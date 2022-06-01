<?php
/**
 * Plugin Name:     Ets Wcfm Frontend Form Add On
 * Plugin URI:      https://www.expresstechsoftwares.com/
 * Description:     This plugin provides a custom Product form for WCFM Frontend manager.
 * Author:          ETS
 * Author URI:      https://www.expresstechsoftwares.com/
 * Text Domain:     ets-wcfm-frontendform-add-on
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ets_Wcfm_Frontendform_Add_On
 */


if (!defined('ABSPATH')) {
    exit;
}

define('ETS_WCFM_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ETS_WCFM_PLUGIN_PATH', plugin_dir_path(__FILE__));



class ETS_WCFM_PRODUCT_FORM_MANAGER {

    private static $instance = null;

    /**
     * Yes, a blank constructor, to implement singleton,
     * to keep the real essence of WordPress project, 
     * so that someone can easily unhook any of our method
     * 
     * @return void
     */
    private function __construct()
    {
        
    }   

    /**
     * Register the WP hooks
     * 
     * @return void
     */
    public static function register(){
        /*add_term_meta(172, 'temp_multivalue_check', '123');
        add_term_meta(172, 'temp_multivalue_check', '345');
        add_term_meta(172, 'temp_multivalue_check', '678');*/

        /*echo '<pre>';
        var_dump(get_term_meta(172, 'temp_multivalue_check'));
        echo '</pre>';
        die("dead?");*/


        $plugin = self::get_instance();
        //add_action( 'bp_before_profile_content', array($plugin, 'ets_before_profile_content') );
        add_action( 'init',array( $plugin,'wcfm_get_edit_url' ) );
        add_filter( 'query_vars', array( $plugin,'get_url_query_param' ) );
        // Frontend add form
        add_action( 'wp_enqueue_scripts', array($plugin, 'scripts'), 1 );
        add_shortcode( 'ets_wcfm_product_form', array($plugin,'render_wcfm__custom_product_form'));
        add_action( 'woocommerce_after_add_attribute_fields', array($plugin, 'attribute_texonomy_map') );
        add_action( 'woocommerce_after_edit_attribute_fields', array($plugin, 'attribute_texonomy_map') );
        add_action( 'woocommerce_attribute_added', array( $plugin ,'ets_wcfm_save_wc_attribute') );
        add_action( 'woocommerce_attribute_updated', array( $plugin ,'ets_wcfm_save_wc_attribute') );
        add_action( 'wp_ajax_wcfm_product_form_submission', array( $plugin ,'wcfm_product_form_submission' ));
        add_action( 'wp_ajax_nopriv_wcfm_product_form_submission', array( $plugin ,'wcfm_product_form_submission'));
        add_action( 'init', array( $plugin ,'wcfm_vendor_product_form_submission' ) );
        add_filter( 'upload_mimes',array($plugin, 'my_custom_mims_type' ));
       
    }
    /**
     * Singleton pattern
     * Method explicity for creating the object
     * of this class
     * 
     * @return object, an object of this class
     */
    public static function get_instance()
    {
        if ( self::$instance == null )
        {
          self::$instance = new self();
        }

        return self::$instance;
    }

      
    /**
     * Enqueue frontend scripts
     * 
     * @return void
     */
    public function scripts() {

        wp_enqueue_media();

        wp_enqueue_style(
          'ets-wcfm-product-form-js',
          ETS_WCFM_PLUGIN_URL . '/assets/css/style.css',
          [],
          '1.0'
        );

        wp_enqueue_style(
        'ets-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        [],
        '4.3.1'
        );

        wp_enqueue_style(
        'ets-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css',
        [],
        '4.0.3'
        );

        wp_enqueue_style( 'font-css', 'https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700', '', '1.0.0', false );
        wp_enqueue_style( 'font-dm-sens-css', 'https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet', '', '1.0.0', false );
        wp_enqueue_style( 'font-css-inter', 'https://fonts.googleapis.com/css2?family=DM+Sans&family=Inter&display=swap" rel="stylesheet', '', '1.0.0', false );
        wp_enqueue_script(
            'ets-wcfm-product-form-js',
            ETS_WCFM_PLUGIN_URL . '/assets/js/ets-wcfm.js',['jquery'],
            '1.0', 'true'
        );

         wp_localize_script( 'ets-wcfm-product-form-js', 'theUArtistUrl', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    }

    /**
     * Add Texonomy drop down into Product add edit page.
     * @param
     * @return
     * */
    public function attribute_texonomy_map(){
        $attrTexMap = WP_PLUGIN_DIR.'/ets-wcfm-frontendform-add-on/views/attribute-texonomy-map.php';
        include $attrTexMap;
    }

    /**
     * Save attribute WCFM.
     * 
     * @return 
     * */

    public function ets_wcfm_save_wc_attribute( $id ) 
     {
        if ( is_admin() && isset( $_POST['wcfm_attribute_texonomy'] ) ) {
            $category_id = sanitize_text_field( $_POST['wcfm_attribute_texonomy'] );
           
            if ( !($category_tax_map = get_option('ets_wc_category_tax_mapping')) ) {
                $category_tax_map = [];
               
            }

            if ( !$category_id ) {
                unset( $category_tax_map[$id] );
                update_option( 'ets_wc_category_tax_mapping', $category_tax_map );
            } else {         
                $category_tax_map[$id] = $category_id;
                update_option( 'ets_wc_category_tax_mapping', $category_tax_map );
            }
        }
    }

    /**
     * Product from submission wcfm.
     * @param POST
     * @return
     **/
    // public function ets_before_profile_content(){
    //   echo "this is my custom hooks";
    //   die;
    // }

    public function wcfm_vendor_product_form_submission(){
        global $WCFM, $wpdb, $_POST;
        if ( isset( $_POST['submit-wcfm-data'] ) ) {
                $user_id = get_current_user_id();
                $wcfm_product_form_data = $_POST;
                $proDescrition = '';
                $proTitle = '';
                $proRegularPrice = '';
                $proCatArr = '';
                $productAttributes = '';
                $digiSampleImages = '';
                $phyProThickness = '';
                $phyProOrignalPPrice = '';
                $phyProShipping = '';
                $digitalProFigure = '';
                $digitalProsubject = '';
                $digitalProBackgroundScene = '';
                $digitalProFullBody = '';
                $digitalProQuestions = '';
                $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                $uri_segments = explode('/', $uri_path);
                if( isset($uri_segments[3] ) ) {
                  $product_edit_id =  $uri_segments[3]; 
                  if ( isset( $product_edit_id ) ) {
                    $product = wc_get_product( $product_edit_id );
                    $product_type = wp_get_post_terms( $product_edit_id, 'pa_product-type' );
                    $product_type_name = $product_type[0]->name;
                    if ( isset($product_type ) && !empty($product_type) && $product_type_name == 'physical' ) {
                        //physical title
                      if ( isset( $wcfm_product_form_data['wcfm_data']['physical']['pro_title'] ) ) {
                        $proTitle = $wcfm_product_form_data['wcfm_data']['physical']['pro_title'];
                         $product->set_name( $proTitle );
                      }
                       //physical product price
                      if ( isset( $wcfm_product_form_data['wcfm_data']['physical']['price']['regular_price'] ) ) {
                        $proRegularPrice = $wcfm_product_form_data['wcfm_data']['physical']['price']['regular_price'];
                        $product->set_regular_price( $proRegularPrice );
                      }

                      //physical product description
                      if ( isset($wcfm_product_form_data['wcfm_data']['physical']['description']) ) {
                        $proDescrition = $wcfm_product_form_data['wcfm_data']['physical']['description'];
                        $product->set_description( $proDescrition );
                      }

                      //product phy  categories
                      if ( isset($wcfm_product_form_data['wcfm_data']['physical']['product_cats']) ) {
                        $proCatArr = $wcfm_product_form_data['wcfm_data']['physical']['product_cats'];
                        $product->set_category_ids( $proCatArr );
                      }
                      if ( isset( $wcfm_product_form_data['wcfm_data']['physical']['attributes'] ) ) {
                         $product_attributes = $wcfm_product_form_data['wcfm_data']['physical']['attributes'];
                       }
                    }

                    if ( isset($product_type ) && !empty($product_type) && $product_type_name == 'digital' ) {
                      //digital title
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['pro_title'] ) ) {
                        $proTitle = $wcfm_product_form_data['wcfm_data']['digital']['pro_title'];
                         $product->set_name( $proTitle );
                      }
                      
                      // digital product reguler price     
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['price']['regular_price'] ) ) {
                        $proRegularPrice = $wcfm_product_form_data['wcfm_data']['digital']['price']['regular_price'];
                        $product->set_regular_price( $proRegularPrice );
                      }
                      //digital product description
                      if ( isset($wcfm_product_form_data['wcfm_data']['digital']['description']) ) {
                        $proDescrition = $wcfm_product_form_data['wcfm_data']['digital']['description'];
                        $product->set_description( $proDescrition );
                      }
                      // digital product categories
                      if ( isset($wcfm_product_form_data['wcfm_data']['digital']['product_cats']) ) {
                        $proCatArr = $wcfm_product_form_data['wcfm_data']['digital']['product_cats'];
                        $product->set_category_ids( $proCatArr );
                      }
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['attributes'] ) ) {
                         $product_attributes = $wcfm_product_form_data['wcfm_data']['digital']['attributes'];
                       }
                    }
                    //product thickness
                    if ( isset(  $wcfm_product_form_data['wcfm_data']['physical']['_thickness'] ) ) {
                      $phyProThickness =  $wcfm_product_form_data['wcfm_data']['physical']['_thickness'];
                      update_post_meta( $product_edit_id, '_thickness' , $phyProThickness );
                    }

                    //product orignal piece price
                    if ( isset(  $wcfm_product_form_data['wcfm_data']['physical']['_orignal_piece_price'] ) ) {
                      $phyProOrignalPPrice =  $wcfm_product_form_data['wcfm_data']['physical']['_orignal_piece_price'];
                      update_post_meta( $product_edit_id, '_orignal_piece_price', $phyProOrignalPPrice );
                    }

                    //Shipping By.
                    if ( isset(  $wcfm_product_form_data['wcfm_data']['physical']['_shipping'] ) ) {
                      $phyProShipping =  $wcfm_product_form_data['wcfm_data']['physical']['_shipping'];
                      update_post_meta( $product_edit_id, '_shipping', $phyProShipping );
                    }

                    //product height
                    if( isset( $wcfm_product_form_data['height'])){
                      $product_height = $wcfm_product_form_data['height'];
                      $product->set_height( $product_height ); 
                    }

                    //product width
                    if( isset( $wcfm_product_form_data['width'])){
                      $product_width = $wcfm_product_form_data['width'];
                      $product->set_width( $product_width );
                    }

                    //product weight
                    if( isset( $wcfm_product_form_data['weight'])){
                      $product_weight = $wcfm_product_form_data['weight'];
                      $product->set_weight( $product_weight );
                    }

                    if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                      $digitalProFigure = $wcfm_product_form_data['wcfm_data']['digital']['figure'];
                      update_post_meta( $product_edit_id, '_digital_product_figure', $digitalProFigure );
                    }

                    //Digital Product Subject
                    if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                      $digitalProsubject = $wcfm_product_form_data['wcfm_data']['digital']['subject'];
                      update_post_meta( $product_edit_id, '_digital_product_subject', $digitalProsubject );
                    }
                    //Digital Product Background
                    if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                      $digitalProBackgroundScene = $wcfm_product_form_data['wcfm_data']['digital']['background_scene'];
                      update_post_meta( $product_edit_id, '_digital_product_background_scene', $digitalProBackgroundScene );
                    }

                    //Digital Product Full Body
                    if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                      $digitalProFullBody = $wcfm_product_form_data['wcfm_data']['digital']['full_body'];
                      update_post_meta( $product_edit_id, '_digital_product_full_body', $digitalProFullBody );
                    }

                    //Digital Product Questions
                    if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                      $digitalProQuestions = $wcfm_product_form_data['wcfm_data']['digital']['questions'];
                      update_post_meta( $product_edit_id, '_digital_product_questions', $digitalProQuestions );
                    }
                    //digital sample image
                     if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['sampleimages'] ) ) {
                          $digiSampleImages = $wcfm_product_form_data['wcfm_data']['digital']['sampleimages'];
                           update_post_meta( $product_edit_id, '_digital_product_sample_images', $digiSampleImages);
                      }

                        if ( $product_attributes ) {
                         foreach ($product_attributes as $term => $product_attribute) {
                            $taxonomy_name = $term;

                            if ( isset( $product_attribute['custom'] ) ) {
                              $custom_term = trim( $product_attribute['custom'] );

                              if ( $custom_term ) {
                                // Create the term for this taxonomy
                                if( !term_exists( $custom_term, $taxonomy_name ) ) {
                                    $term_data = wp_insert_term( $custom_term, $taxonomy_name );
                                    $new_term_id   = $term_data['term_id'];
                                     if( current_user_can('wcfm_vendor') ){
                                         $custom_term_meta = update_term_meta($new_term_id, 'custom_terms_key', $user_id );  
                                      }
                                } else {
                                     $new_term_id  = get_term_by( 'name', $custom_term, $taxonomy_name )->term_id;
                                }
                                // $new_term_id
                                $product_attribute = [$new_term_id];
                              }

                              unset( $product_attribute['custom'] );
                            }

                            $attr_array[] = [
                                      'term_name' => $term,
                                      'is_active' => 'enable',
                                      'name' => wc_attribute_label( $term ),
                                      'value' => $product_attribute,
                                      'is_visible' => "enable",
                                      'is_variation' =>  "enable",
                                      'tax_name' => '',
                                      'is_taxonomy' => "1",
                                  ];          
                          }
                       
                        }
                        $pro_attributes = array();
                        $default_attributes = array();
                        if( isset( $attr_array ) && !empty( $attr_array ) ) {
                          
                          foreach($attr_array as $attributes) {

                            if( isset( $attributes['is_active'] ) && !empty( $attributes['name'] ) && !empty( $attributes['value'] ) ) {
                            
                              $attribute_name = ( $attributes['term_name'] ) ? $attributes['term_name'] : $attributes['name'];
                              $is_visible = 0;
                              if ( isset( $attributes['is_visible'] ) ) $is_visible = 1;
                              $is_variation = 0;
                              if ( isset($attributes['is_variation'] ) ) $is_variation = 1;
                              //if( !in_array( $wcfm_product_form_data['pro_type'], $wcfm_variable_product_types ) ) $is_variation = 0;
                          
                              $is_taxonomy = 0;
                              if(  $attributes['is_taxonomy'] == 1  ) $is_taxonomy = 1;
                          
                              $term_name = '';
                              if( $is_taxonomy == 1 ) $term_name = $attributes['term_name'];
                          
                              $attribute_id   = wc_attribute_taxonomy_id_by_name( $term_name );
                              $options = isset( $attributes['value'] ) ? $attributes['value'] : '';

                              if ( is_array( $options ) ) {
                                  // Term ids sent as array.
                                  $options = wp_parse_id_list( $options );
                              } else {
                                  // Terms or text sent in textarea.
                                  $options = 0 < $attribute_id ? wc_sanitize_textarea( wc_sanitize_term_text_based( $options ) ) : wc_sanitize_textarea( $options );
                                  $options = wc_get_text_attributes( $options );
                              }

                              if ( empty( $options ) ) {
                                  continue;
                              } 
                              if ( $product_edit_id ) {
                               $remove_term = wp_delete_object_term_relationships($product_edit_id, $attributes['term_name']);
                              }

                              $attribute = new WC_Product_Attribute();
                              $attribute->set_id( $attribute_id );
                              $attribute->set_name( wc_clean( $attribute_name ) );
                              $attribute->set_options( $options );
                              //$attribute->set_position( $attribute_position );
                              $attribute->set_visible( $is_visible );
                              $attribute->set_variation(  $is_variation );
                              $pro_attributes[] = $attribute;
                            }
                          }   
                        }
                        $product->set_attributes( $pro_attributes );
                      

                      if( apply_filters( 'wcfm_is_allow_featured', true ) ) {
                          $product_thumbnail = $product->get_image('thumbnail');
                          $attachment_ids = $product->get_gallery_image_ids();

                        if( isset( $wcfm_product_form_data['wcfm_data']['productImages'] ) && !empty( $wcfm_product_form_data['wcfm_data']['productImages'] ) ) {
                          $featured_img_id = $WCFM->wcfm_get_attachment_id($wcfm_product_form_data['wcfm_data']['productImages'][0]);
                            set_post_thumbnail( $product_edit_id, $featured_img_id );
                            wp_update_post( array( 'ID' => $featured_img_id, 'post_parent' => $product_edit_id ) );
                        }
                      }
                      if( apply_filters( 'wcfm_is_allow_gallery', true ) ) {
                        if( isset( $wcfm_product_form_data['wcfm_data']['productImages'] ) && !empty( $wcfm_product_form_data['wcfm_data']['productImages'] ) ) {
                          $gallery = array();
                          $gallerylimit = apply_filters( 'wcfm_gallerylimit', -1 );
                          if( $gallerylimit == '-1' ) $gallerylimit = 500;
                            foreach( $wcfm_product_form_data['wcfm_data']['productImages'] as $key => $gallery_imgs) {
                                if( $key == 0 ){
                                  continue;
                                }
                              if( isset( $gallery_imgs ) && !empty( $gallery_imgs ) ) {
                                $gallery_img_id = $WCFM->wcfm_get_attachment_id( $gallery_imgs );
                               
                                wp_update_post( array( 'ID' => $gallery_img_id, 'post_parent' => $product_edit_id ) );
                                $gallery[] = $gallery_img_id;
                              if( $gallerylimit == count( $gallery ) ) break;
                            }
                          }
                          if ( ! empty( $gallery ) ) {
                               update_post_meta( $product_edit_id ,'_product_image_gallery', implode( ',', $gallery ) );
                          } else {
                              update_post_meta( $product_edit_id, '_product_image_gallery', '' );
                          }

                        } elseif( isset( $wcfm_product_form_data['wcfm_data']['productImages'] ) && empty( $wcfm_product_form_data['wcfm_data']['productImages'] ) ) {
                            update_post_meta( $product_edit_id, '_product_image_gallery', '' );
                          }
                      }

                    if( apply_filters( 'wcfm_is_allow_tags', true ) ) {
                      if( isset( $wcfm_product_form_data['keywords'] )  && !empty( $wcfm_product_form_data['keywords'] ) ) {
                          if( apply_filters( 'wcfm_is_tags_input', true ) ) {
                              wp_set_post_terms( $product_edit_id, apply_filters( 'wcfm_pm_product_tags_before_save', $wcfm_product_form_data['keywords'], $new_product_id ), 'product_tag' );
                          } else {
                              $taxonomy_values = $wcfm_product_form_data['keywords'];
                              if( !empty( $taxonomy_values ) ) {
                                  $is_first = true;
                                  foreach( $taxonomy_values as $taxonomy_value ) {
                                      if( $is_first ) {
                                          $is_first = false;
                                          wp_set_object_terms( $product_edit_id, (int)$taxonomy_value, 'product_tag' );
                                      } else {
                                          wp_set_object_terms( $product_edit_id, (int)$taxonomy_value, 'product_tag', true );
                                      }
                                  }
                              }
                          }
                      } else {
                          if( apply_filters( 'wcfm_is_allow_reset_product_tag', true ) ) {
                              wp_delete_object_term_relationships( $product_edit_id, 'product_tag' );
                          }
                      }
                    }

                    $product->save();
                  } 

                }else
                {
                  if ( isset($wcfm_product_form_data['pro_type'] ) && $wcfm_product_form_data['pro_type'] == 'physical' ) {
  
                    
                      //Category
                      if ( isset($wcfm_product_form_data['wcfm_data']['physical']['product_cats'] ) ) {
                          $proCatArr = $wcfm_product_form_data['wcfm_data']['physical']['product_cats'];
                      }

                      //Description
                      if ( isset($wcfm_product_form_data['wcfm_data']['physical']['description'] ) ) {
                          $proDescrition = $wcfm_product_form_data['wcfm_data']['physical']['description'];  
                      }

                      //Title
                      if ( isset( $wcfm_product_form_data['wcfm_data']['physical']['pro_title'] ) ) {
                          $proTitle = $wcfm_product_form_data['wcfm_data']['physical']['pro_title'];
                      
                      }
                       //Price
                      if ( isset( $wcfm_product_form_data['wcfm_data']['physical']['price']['regular_price'] ) ) {
                          $proRegularPrice = $wcfm_product_form_data['wcfm_data']['physical']['price']['regular_price'];
                      }
                      //Attributes
                      if ( isset( $wcfm_product_form_data['wcfm_data']['physical']['attributes'] ) ) {
                          $productAttributes = $wcfm_product_form_data['wcfm_data']['physical']['attributes']; 
                      }                  
                      //Thickness
                      if ( isset(  $wcfm_product_form_data['wcfm_data']['physical']['_thickness'] ) ) {
                          $phyProThickness =  $wcfm_product_form_data['wcfm_data']['physical']['_thickness'];
                      }
                       //Orignal Pieace Price.
                      if ( isset(  $wcfm_product_form_data['wcfm_data']['physical']['_orignal_piece_price'] ) ) {
                          $phyProOrignalPPrice =  $wcfm_product_form_data['wcfm_data']['physical']['_orignal_piece_price'];
                      }
                      //Shipping By.
                      if ( isset(  $wcfm_product_form_data['wcfm_data']['physical']['_shipping'] ) ) {
                          $phyProShipping =  $wcfm_product_form_data['wcfm_data']['physical']['_shipping'];
                      }

                  } elseif( isset($wcfm_product_form_data['pro_type'] ) && $wcfm_product_form_data['pro_type'] == 'digital' ) {


                      //Category
                      if ( isset($wcfm_product_form_data['wcfm_data']['digital']['product_cats']) ) {
                          $proCatArr = $wcfm_product_form_data['wcfm_data']['digital']['product_cats'];
                      }

                      //Description
                      if ( isset($wcfm_product_form_data['wcfm_data']['digital']['description'])) {
                          $proDescrition = $wcfm_product_form_data['wcfm_data']['digital']['description'];
                      }

                       //Title
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['pro_title'] ) ) {
                          $proTitle = $wcfm_product_form_data['wcfm_data']['digital']['pro_title'];
                      }

                      //Price
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['price']['regular_price'] ) ) {
                          $proRegularPrice = $wcfm_product_form_data['wcfm_data']['digital']['price']['regular_price'];
                      }

                       //Attributes
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['attributes'] ) ) {
                          $productAttributes = $wcfm_product_form_data['wcfm_data']['digital']['attributes'];    
                      }

                      //Digital Product Sample Images.
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['sampleimages'] ) ) {
                          $digiSampleImages = $wcfm_product_form_data['wcfm_data']['digital']['sampleimages'];
                      }

                      //Digital Product Figure
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                          $digitalProFigure = $wcfm_product_form_data['wcfm_data']['digital']['figure'];
                      }

                      //Digital Product Subject
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                          $digitalProsubject = $wcfm_product_form_data['wcfm_data']['digital']['subject'];
                      }
                      //Digital Product Background
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                          $digitalProBackgroundScene = $wcfm_product_form_data['wcfm_data']['digital']['background_scene'];
                      }
                      //Digital Product Full Body
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                          $digitalProFullBody = $wcfm_product_form_data['wcfm_data']['digital']['full_body'];
                      }
                       //Digital Product Questions
                      if ( isset( $wcfm_product_form_data['wcfm_data']['digital']['figure'] ) ) {
                          $digitalProQuestions = $wcfm_product_form_data['wcfm_data']['digital']['questions'];
                      }
                  }

                  if( $proTitle )
                  {
                      $current_user_id = apply_filters( 'wcfm_current_vendor_id', get_current_user_id() );
                      // Creating new product
                      $wcfm_new_product = apply_filters( 'wcfm_product_content_before_save', array(
                              'post_title'   => wc_clean( $proTitle ),
                              'post_status'  => 'publish',
                              'post_type'    => 'product',
                              'post_excerpt' => sanitize_option( 'wcfm_editor_content', apply_filters( 'wcfm_editor_content_before_save', stripslashes( html_entity_decode($proDescrition , ENT_QUOTES, 'UTF-8' ) ) ) ),
                              'post_content' => sanitize_option( 'wcfm_editor_content', apply_filters( 'wcfm_editor_content_before_save', stripslashes( html_entity_decode( $proDescrition, ENT_QUOTES, 'UTF-8' ) ) ) ),
                              'post_author'  => $current_user_id,
                              'post_name'    => sanitize_title( $proTitle )
                      ), $wcfm_product_form_data );

                      $new_product_id = wp_insert_post( $wcfm_new_product, true );

                      // Product Real Author
                      update_post_meta( $new_product_id, '_wcfm_product_author', get_current_user_id() );

                      if( !is_wp_error( $new_product_id ) ) {
                          
                          // Set Product SKU
                          if( isset( $wcfm_product_form_data['sku'] ) && !empty( $wcfm_product_form_data['sku'] ) )  {
                          } else {
                              $wcfm_product_form_data['sku'] = '';
                          }

                          // Set Product Type
                          // $pro_type = wp_set_object_terms( $new_product_id, $wcfm_product_form_data['ets_product_type'], 'pa_product-type' );

                         $pro_type = wp_set_object_terms( $new_product_id, $wcfm_product_form_data['pro_type'], 'pa_product-type');

                          $wcfm_variable_product_types = apply_filters( 'wcfm_variable_product_types', array( 'variable', 'variable-subscription', 'pw-gift-card' ) );

                          // Set Product Featured Image
                          if( apply_filters( 'wcfm_is_allow_featured', true ) ) {
                              if( isset( $wcfm_product_form_data['wcfm_data']['productImages'] ) && !empty( $wcfm_product_form_data['wcfm_data']['productImages'] ) ) {
                                      $featured_img_id = $WCFM->wcfm_get_attachment_id($wcfm_product_form_data['wcfm_data']['productImages'][0]);
                                      set_post_thumbnail( $new_product_id, $featured_img_id );
                                      wp_update_post( array( 'ID' => $featured_img_id, 'post_parent' => $new_product_id ) );
                              }
                          }

                          // Set Product Image Gallery
                          if( apply_filters( 'wcfm_is_allow_gallery', true ) ) {
                              if( isset( $wcfm_product_form_data['wcfm_data']['productImages'] ) && !empty( $wcfm_product_form_data['wcfm_data']['productImages'] ) ) {
                                  $gallery = array();
                                  $gallerylimit = apply_filters( 'wcfm_gallerylimit', -1 );
                                  if( $gallerylimit == '-1' ) $gallerylimit = 500;
                                  foreach( $wcfm_product_form_data['wcfm_data']['productImages'] as $key => $gallery_imgs ) {
                                        if( $key == 0 ){
                                          continue;
                                      }
                                      if(isset($gallery_imgs) && !empty( $gallery_imgs ) )  {
                                          $gallery_img_id = $WCFM->wcfm_get_attachment_id( $gallery_imgs );
                                          wp_update_post( array( 'ID' => $gallery_img_id, 'post_parent' => $new_product_id ) );
                                          $gallery[] = $gallery_img_id;
                                          if( $gallerylimit == count( $gallery ) ) break;
                                      }
                                  }
                                  if ( ! empty( $gallery ) ) {
                                      update_post_meta( $new_product_id, '_product_image_gallery', implode( ',', $gallery ) );
                                  } else {
                                      update_post_meta( $new_product_id, '_product_image_gallery', '' );
                                  }
                              } elseif( isset($wcfm_product_form_data['wcfm_data']['productImages']) && empty( $wcfm_product_form_data['wcfm_data']['productImages'] ) ) {
                                  update_post_meta( $new_product_id, '_product_image_gallery', '' );
                              }
                          }


                          //Prepare attribute array.
                          if ( isset( $productAttributes )  && !empty( $productAttributes )) {
                              $attrArray = [];
                            
                              foreach ( $productAttributes as $term => $productAttribute ) {
                                $taxonomy_name = $term;
                               

                                if ( isset($productAttribute['custom'] ) ) {
                                  $customTerm = trim( $productAttribute['custom'] );

                                  if ( $customTerm ) {
                                    // Create the term for this taxonomy
                                    if( ! term_exists( $customTerm, $taxonomy_name ) ) {
                                       $term_data = wp_insert_term( $customTerm, $taxonomy_name,);
                                       $new_term_id   = $term_data['term_id'];

                                       if( current_user_can('wcfm_vendor') ){
                                           $custom_term_meta = update_term_meta($new_term_id, 'custom_terms_key', $user_id );
                                        }
                                       
                                    } else {
                                         $new_term_id = get_term_by( 'name', $term_name, $taxonomy_name )->term_id;
                                    }
                                    // $new_term_id
                                    $productAttribute = [$new_term_id];
                                  
                                  }

                                  unset( $productAttribute['custom'] );
                                }

                                $attrArray[] = [
                                          'term_name' => $term,
                                          'is_active' => 'enable',
                                          'name' => wc_attribute_label( $term ),
                                          'value' => $productAttribute,
                                          'is_visible' => "enable",
                                          'is_variation' =>  "enable",
                                          'tax_name' => '',
                                          'is_taxonomy' => "1",
                                      ];             
                              }
                          }
                          
                          // Attributes
                          $pro_attributes = array();
                          $default_attributes = array();
                          if( isset( $attrArray ) && !empty( $attrArray ) ) {
                              foreach( $attrArray as $attributes ) {
                                  if( isset( $attributes['is_active'] ) && !empty( $attributes['name'] ) && !empty( $attributes['value'] ) ) {
                                      
                                      $attribute_name = ( $attributes['term_name'] ) ? $attributes['term_name'] : $attributes['name'];
                                      $is_visible = 0;
                                      if( isset( $attributes['is_visible'] ) ) $is_visible = 1;
                                      $is_variation = 0;
                                      if( isset( $attributes['is_variation'] ) ) $is_variation = 1;
                                      if( !in_array( $wcfm_product_form_data['pro_type'], $wcfm_variable_product_types ) ) $is_variation = 0;
                                      
                                      $is_taxonomy = 0;
                                      if( $attributes['is_taxonomy'] == 1 ) $is_taxonomy = 1;
                                      
                                      $term_name = '';
                                      if( $is_taxonomy == 1 ) $term_name = $attributes['term_name'];
                                      
                                      $attribute_id   = wc_attribute_taxonomy_id_by_name( $term_name );
                                      $options = isset( $attributes['value'] ) ? $attributes['value'] : '';

                                      if ( is_array( $options ) ) {
                                          // Term ids sent as array.
                                          $options = wp_parse_id_list( $options );
                                      } else {
                                          // Terms or text sent in textarea.
                                          $options = 0 < $attribute_id ? wc_sanitize_textarea( wc_sanitize_term_text_based( $options ) ) : wc_sanitize_textarea( $options );
                                          $options = wc_get_text_attributes( $options );
                                      }
                      
                                      if ( empty( $options ) ) {
                                          continue;
                                      }
                                      
                                      $attribute = new WC_Product_Attribute();
                                      $attribute->set_id( $attribute_id );
                                      $attribute->set_name( wc_clean( $attribute_name ) );
                                      $attribute->set_options( $options );
                                      //$attribute->set_position( $attribute_position );
                                      $attribute->set_visible( $is_visible );
                                      $attribute->set_variation(  $is_variation );
                                      $pro_attributes[] = $attribute;
                                  }
                              }   
                          }
            

                          /*STR Temp For remove error need to delete after dynamic value*/
                          $downloadables = array();
                          $wcfm_product_form_data += [
                              "button_text" => '',
                              "download_limit" => '',
                              "download_expiry" => '',
                          ];

                          /*END Temp For remove error need to delete after dynamic value*/

                          // Process product type first so we have the correct class to run setters.
                          $product_type = empty( $wcfm_product_form_data['product_type'] ) ? WC_Product_Factory::get_product_type( $new_product_id ) : sanitize_title( stripslashes( $wcfm_product_form_data['product_type'] ) );
                        
                       
                          $classname  = WC_Product_Factory::get_product_classname( $new_product_id, $product_type ? $product_type : 'simple' );
                          $product = new $classname( $new_product_id );

                          $wcfm_product_data_factory = apply_filters( 'wcfm_product_data_factory', array(
                                              'virtual' => 'is_virtual',
                                              'sku'   => isset( $wcfm_product_form_data['sku'] ) ? wc_clean( $wcfm_product_form_data['sku'] ) : null,
                                              'tax_status' => isset( $wcfm_product_form_data['tax_status'] ) ? wc_clean( $wcfm_product_form_data['tax_status'] ) : null,
                                              'tax_class' => isset( $wcfm_product_form_data['tax_class'] ) ? wc_clean( $wcfm_product_form_data['tax_class'] ) : null,
                                              'weight' => isset( $wcfm_product_form_data['weight'] ) ? wc_clean( $wcfm_product_form_data['weight'] ) : null,
                                              'length'             => isset( $wcfm_product_form_data['length'] ) ? wc_clean( $wcfm_product_form_data['length'] ) : null,
                                              'width'              => isset( $wcfm_product_form_data['width'] ) ? wc_clean( $wcfm_product_form_data['width'] ) : null,
                                              'height'  => isset( $wcfm_product_form_data['height'] ) ? wc_clean( $wcfm_product_form_data['height'] ) : null,
                                              'shipping_class_id' => isset( $wcfm_product_form_data['shipping_class'] ) ? absint( $wcfm_product_form_data['shipping_class'] ) : null,
                                              'sold_individually'  => ! empty( $wcfm_product_form_data['sold_individually'] ),
                                              'upsell_ids' => isset( $wcfm_product_form_data['upsell_ids'] ) ? array_map( 'intval', (array) $wcfm_product_form_data['upsell_ids'] ) : array(),
                                              'cross_sell_ids' => isset( $wcfm_product_form_data['crosssell_ids'] ) ? array_map( 'intval', (array) $wcfm_product_form_data['crosssell_ids'] ) : array(),
                                              'regular_price' => $proRegularPrice,
                                              'sale_price' => $proRegularPrice ,
                                              'date_on_sale_from'  => isset( $wcfm_product_form_data['sale_date_from'] ) ? wcfm_standard_date( wc_clean( $wcfm_product_form_data['sale_date_from'] ) ) : '',
                                              'date_on_sale_to'    => isset( $wcfm_product_form_data['sale_date_upto'] ) ? wcfm_standard_date( wc_clean( $wcfm_product_form_data['sale_date_upto'] ) ) : '',
                                              'manage_stock'       => ! empty( $wcfm_product_form_data['manage_stock'] ),
                                              'backorders'         => isset( $wcfm_product_form_data['backorders'] ) ? wc_clean( $wcfm_product_form_data['backorders'] ) : '',
                                              'stock_status'       => isset( $wcfm_product_form_data['stock_status'] ) ? wc_clean( $wcfm_product_form_data['stock_status'] ) : '',
                                              'stock_quantity'     => isset( $wcfm_product_form_data['stock_qty'] ) ? wc_stock_amount( $wcfm_product_form_data['stock_qty'] ) : '',
                                              'product_url'        => isset( $wcfm_product_form_data['product_url'] ) ? esc_url_raw( $wcfm_product_form_data['product_url'] ) : '',
                                              'button_text'        => wc_clean( $wcfm_product_form_data['button_text'] ),
                                              'children'           => 'grouped' === $product_type ? $grouped_products : null,
                                              'downloadable'       => isset( $wcfm_product_form_data['is_downloadable'] ),
                                              'download_limit'     => '' === $wcfm_product_form_data['download_limit'] ? '' : absint( $wcfm_product_form_data['download_limit'] ),
                                              'download_expiry'    => '' === $wcfm_product_form_data['download_expiry'] ? '' : absint( $wcfm_product_form_data['download_expiry'] ),
                                              'downloads'          => $downloadables,
                                              'attributes'         => $pro_attributes,
                                              'default_attributes' => $default_attributes,
                                              'reviews_allowed'    => true,
                                          ), $new_product_id, $product, $wcfm_product_form_data );

                                         /* if( !apply_filters( 'wcfmu_is_allow_downloadable', true ) ) {
                                          unset( $wcfm_product_data_factory['downloadable'] );
                                          unset( $wcfm_product_data_factory['download_limit'] );
                                          unset( $wcfm_product_data_factory['download_expiry'] );
                                          unset( $wcfm_product_data_factory['downloads'] );
                                          }*/

                                          /*if( apply_filters( 'wcfm_is_allow_disable_tax_by_capability', false ) ) {
                                              if( !apply_filters( 'wcfm_is_allow_tax', true ) || !apply_filters( 'wcfm_is_allow_pm_tax', true ) ) {
                                                  $wcfm_product_data_factory['tax_status'] = 'none';
                                              }
                                          }*/

                                        /*  if( $product_type == 'external' ) {
                                          $wcfm_product_data_factory['manage_stock'] = '';
                                          }*/

                                          $errors = $product->set_props( $wcfm_product_data_factory );

                                          if ( is_wp_error( $errors ) ) {
                                              if( !$has_error ) {
                                                  if( defined('WCFM_REST_API_CALL') ) {
                                                      
                                                  } else {
                                                      /*echo '{"status": false, "message": "' . esc_html( $errors->get_error_message() ) . '", "id": "' . $new_product_id . '", "redirect": "' . esc_url( get_permalink( $new_product_id ) ) . '"}';*/
                                                  }
                                              }
                                              $has_error = true;
                                          }

                                          /**
                                          * @since WC 3.0.0 to set props before save.
                                          */
                                          //do_action( 'woocommerce_admin_process_product_object', $product );
                                          $product->save();

                                          
                                          // Set Product Category
                                          if( apply_filters( 'wcfm_is_allow_category', true ) && apply_filters( 'wcfm_is_allow_pm_category', true ) && apply_filters( 'wcfm_is_allow_product_category', true ) ) {
                                              if( isset( $proCatArr ) && !empty( $proCatArr ) ) {
                                                  $is_first = true;
                                                  foreach( $proCatArr as $product_cats ) {
                                                      if( $is_first )  {
                                                          $is_first = false;
                                                          wp_set_object_terms( $new_product_id, (int)$product_cats, 'product_cat' );
                                                      } else {
                                                          wp_set_object_terms( $new_product_id, (int)$product_cats, 'product_cat', true );
                                                      }
                                                  }
                                              } else {
                                                  if( apply_filters( 'wcfm_is_allow_reset_product_cat', true ) ) {
                                                      wp_delete_object_term_relationships( $new_product_id, 'product_cat' );
                                                  }
                                              }
                                          }
                                         
                                          // Set Product Tags keywords
                                          if( apply_filters( 'wcfm_is_allow_tags', true ) ) {
                                              if( isset($wcfm_product_form_data['keywords'] ) && !empty( $wcfm_product_form_data['keywords'] ) ) {
                                                  if( apply_filters( 'wcfm_is_tags_input', true ) ) {
                                                      wp_set_post_terms( $new_product_id, apply_filters( 'wcfm_pm_product_tags_before_save', $wcfm_product_form_data['keywords'], $new_product_id ), 'product_tag' );
                                                  } else {
                                                      $taxonomy_values = $wcfm_product_form_data['keywords'];
                                                      if( !empty( $taxonomy_values ) ) {
                                                          $is_first = true;
                                                          foreach( $taxonomy_values as $taxonomy_value ) {
                                                              if( $is_first ) {
                                                                  $is_first = false;
                                                                  wp_set_object_terms( $new_product_id, (int)$taxonomy_value, 'product_tag' );
                                                              } else {
                                                                  wp_set_object_terms( $new_product_id, (int)$taxonomy_value, 'product_tag', true );
                                                              }
                                                          }
                                                      }
                                                  }
                                              } else {
                                                  if( apply_filters( 'wcfm_is_allow_reset_product_tag', true ) ) {
                                                      wp_delete_object_term_relationships( $new_product_id, 'product_tag' );
                                                  }
                                              }
                                          }

                                          //Additional Product Entities To be store In Meta.
                                          //Thickness.
                                          update_post_meta( $new_product_id, '_thickness', $phyProThickness );
                                          //Orignal Piece Price.
                                          update_post_meta( $new_product_id, '_orignal_piece_price', $phyProOrignalPPrice );
                                          //Orignal Piece Price.
                                          update_post_meta( $new_product_id, '_shipping', $phyProShipping );
                                          //Digital Product Sample Images
                                           update_post_meta( $new_product_id, '_digital_product_sample_images', $digiSampleImages );

                                          //Digital Product Figure
                                           update_post_meta( $new_product_id, '_digital_product_figure', $digitalProFigure );

                                          //Digital Product Subject
                                           update_post_meta( $new_product_id, '_digital_product_subject', $digitalProsubject );

                                          //Digital Product Background Scene
                                           update_post_meta( $new_product_id, '_digital_product_background_scene', $digitalProBackgroundScene );

                                          //Digital Product full body
                                           update_post_meta( $new_product_id, '_digital_product_full_body', $digitalProFullBody );

                                          //Digital Product Sample Images
                                           update_post_meta( $new_product_id, '_digital_product_questions', $digitalProQuestions );

                      }
                  }
                }     
        }
    } 
   
    public function my_custom_mims_type($mimes) {
        
        if ( is_admin() ){
            ( $mimes['pdf'] );
            ( $mimes['txt'] );
            ( $mimes['svg'] );
            ( $mimes['exe'] );
            ( $mimes['mpeg'] );
            ( $mimes['mpeg3'] );
        } else {
            unset( $mimes['svg'] );
            unset( $mimes['exe'] );
            unset( $mimes['doc'] );
            unset( $mimes['pdf'] );
            unset( $mimes['txt'] );
            unset( $mimes['mpeg'] );
            unset( $mimes['mpeg3'] );
        }
        return $mimes;
    }
    
    public function render_wcfm__custom_product_form(){
      $wcfm_product_form_data = $_POST;
      $product_name = '';
      $product_price = '';
      $product_description = '';
      $product_reguler_price = '';
      $product_thickness ='';
      $product_shipping = '';
      $product_org_piece_price = '';
      $digital_question = '';
      $digital_product_fig = '';
      $digital_subject = '';
      $digital_bg_scene ='';
      $digital_full_body = '';
      $digital_sample_img = '';
      $get_cat = '';
      $product_weight = '';
      $product_width = '';
      $product_height = '';
      $product_thumbnail = '';
      $attachment_ids = '';
      $year_creation_terms = '';
      $support_terms = '';
      $display_terms = '';
      $framing_terms = '';
      $frame_type_terms = '';
      $length_unit_terms = '';
      $org_piece_terms = '';
      $reproduction_terms = '';
      $art_type_terms = '';
      $ship_location_terms = '';
      $packing_terms = '';
      $style_terms = '';
      $theme_terms = '';
      $digital_theme_terms = '';
      $digital_style_terms = '';
      $digital_artistteq_terms = '';
      $digital_revision_terms = '';
      $digital_source_terms = '';
      $high_resolution_terms = '';
      $digital_color_terms = '';
      $digital_commercial_terms = '';
      
      if ( is_user_logged_in() )  {
        $user_id = get_current_user_id();
        $user = new WP_User( $user_id );
        if ( !empty( $user->roles ) && is_array( $user->roles ) )   {

          foreach ( $user->roles as $role )   {

            if( $role == 'wcfm_vendor' || $role == 'administrator' )  {
              $admin_role = $role == 'administrator';
              $uri_path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
              $uri_segments = explode('/', $uri_path);
              $product_edit_id = $uri_segments[3]; 
              
              if( isset( $uri_segments[3] ) && !empty( $uri_segments[3] ) ) {

                $product = wc_get_product( $product_edit_id );
                //var_dump($product);
                $vendor_id = get_post_field( 'post_author', $product_edit_id );

                if( $vendor_id == $user_id || $role == 'administrator' ){
                  $edit_mode ='';

                  if( $product == true && $edit_mode = true ){
                    
                    $product_name = $product->get_name();
                    $product_description = $product->get_description();
                    $product_reguler_price = $product->get_regular_price(); 
                    $get_cat = $product->get_category_ids();
                    $product_weight = $product->get_weight();
                    $product_width = $product->get_width();
                    $product_height = $product->get_height();
                    $product_thumbnail = $product->get_image('thumbnail');
                    $attachment_ids = $product->get_gallery_image_ids();
                    $featured_id = get_post_thumbnail_id( $product_edit_id );
                    $featured_url = wp_get_attachment_image_src( $featured_id, 'full' );
                    $image_array = [];
                    $image_array[]  = array(
                      'mediaid'       => $featured_id ,
                      'url'           => $featured_url[0],
                      'featuredImage' => 1
                    );

                    foreach ( $attachment_ids as $key => $attachment_id ) {
                     
                      $gallery_image_url = wp_get_attachment_url( $attachment_id );
                      $image_array[]  = array(
                        'mediaid'       => $attachment_id ,
                        'url'           => $gallery_image_url,
                        'featuredImage' => 0 
                      );
                    }
                    
                    $product_thickness = get_post_meta( $product_edit_id, '_thickness', true );
                    $product_shipping = get_post_meta( $product_edit_id, '_shipping', true );
                    $product_org_piece_price = get_post_meta( $product_edit_id, '_orignal_piece_price', true );
                    $digital_question = get_post_meta( $product_edit_id, '_digital_product_questions', true );
                    $digital_product_fig = get_post_meta( $product_edit_id, '_digital_product_figure', true );
                    $digital_figure = get_post_meta( $product_edit_id, '_digital_product_figure', true);
                    $digital_subject = get_post_meta( $product_edit_id, '_digital_product_subject', true );
                    $digital_bg_scene = get_post_meta($product_edit_id, '_digital_product_background_scene', true );
                    $digital_full_body = get_post_meta( $product_edit_id, '_digital_product_full_body', true );
                    $product_type = wp_get_post_terms( $product_edit_id, 'pa_product-type' );
                    $year_creation_terms = wp_get_post_terms($product_edit_id, 'pa_year-of-creation');
                    $support_terms = wp_get_post_terms( $product_edit_id, 'pa_support-or-surface' );
                    $display_terms = wp_get_post_terms( $product_edit_id, 'pa_display' );
                    $framing_terms =  wp_get_post_terms( $product_edit_id, 'pa_framing' );
                    $frame_type_terms = wp_get_post_terms( $product_edit_id, 'pa_frame-type' );
                    $length_unit_terms = wp_get_post_terms( $product_edit_id, 'pa_length-unit' );
                    $org_piece_terms = wp_get_post_terms( $product_edit_id, 'pa_original-piece' );
                    $reproduction_terms = wp_get_post_terms( $product_edit_id, 'pa_reproduction') ;
                    $art_type_terms = wp_get_post_terms( $product_edit_id, 'pa_art-type' );
                    $ship_location_terms = wp_get_post_terms( $product_edit_id,'pa_shipping-locations' );
                    $packing_terms = wp_get_post_terms( $product_edit_id, 'pa_packaging' );
                    $style_terms = wp_get_post_terms( $product_edit_id, 'pa_style' );
                    $theme_terms = wp_get_post_terms( $product_edit_id, 'pa_theme' );
                    $get_physical_cateogry = get_the_terms( $product_edit_id, 'product_cat');
                    $get_painting_subcat = get_the_terms( $product_edit_id, 'pa_panting-techniques');
                    $get_print_subcat = get_the_terms( $product_edit_id, 'pa_printmaking-techniques' );
                    $keywords = wp_get_post_terms( $product_edit_id, 'product_tag');
                    //digital terms
                    $digital_theme_terms = get_the_terms($product_edit_id, 'pa_theme' );
                    $digital_style_terms = get_the_terms( $product_edit_id, 'pa_style' );
                    $digital_artistteq_terms = get_the_terms( $product_edit_id,'pa_artistic-techniques');
                    $digital_revision_terms = get_the_terms( $product_edit_id, 'pa_revision' );
                    $digital_source_terms = get_the_terms( $product_edit_id, 'pa_source-file' );
                    $high_resolution_terms = get_the_terms( $product_edit_id, 'pa_high-resolution' );
                    $digital_color_terms = get_the_terms( $product_edit_id,'pa_digital-painting-color' );
                    $digital_commercial_terms = get_the_terms( $product_edit_id, 'pa_commercial-use' );
                    $get_digital_cateogry = get_the_terms( $product_edit_id, 'product_cat' );
                               
                    if ( get_query_var( 'products' ) == true || get_query_var( 'products' ) !== '' ) {

                      $wcfmFormHtml = WP_PLUGIN_DIR.'/ets-wcfm-frontendform-add-on/views/wcfm-product-form.php';
                      include $wcfmFormHtml;
                    }

                  }else {

                    echo '<div><h4 class="text-center pt-5">This is not valid product.</h4></div>';
                  }

                }else{

                   echo '<div><h4 class="text-center pt-5">You do not have permissions to access this page.</h4></div>';
                }

                } else {
                       $wcfmFormHtml = WP_PLUGIN_DIR.'/ets-wcfm-frontendform-add-on/views/wcfm-product-form.php';
                      include $wcfmFormHtml;
                }

            } else {
              
                echo '<div><h4 class="text-center pt-5">You do not have permissions to access this page.</h4></div>';
            }            
          }

          wp_localize_script( 'ets-wcfm-product-form-js', 'attachementArr', array( 'imageAttData' => $image_array , 'editmode' => $edit_mode ,'productType' => $product_type ) );

        }

      } else {

            echo '<div><h4 class="text-center pt-5">You do not have permissions to access this page.</h4></div>';
      }
    }

    public function wcfm_get_edit_url() {
        $rules = add_rewrite_rule( 'products/([a-z0-9-]+)[/]?$', 'index.php?', 'top' );
    }

    public function get_url_query_param( $query_vars ) {
        $query_vars[] = 'products';
        return $query_vars;
    }

} 

ETS_WCFM_PRODUCT_FORM_MANAGER::register();


        
       
        
       
        
