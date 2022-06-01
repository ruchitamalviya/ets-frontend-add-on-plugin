 <?php
    $user_id = get_current_user_id();
 ?>
 <div class="step_form_section">
      <div class="step_form_main_container">
          <div class="container">
          <div class="row justify-content-center">
             <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                  
                   <h2 class="steps" id="step">Step 1</h2>
                   <h2 id="heading"> <?php echo __( 'Let’s', 'ets-wcfm-frontendform-add-on' ) ?><span class="create_text"> <?php echo __('create', 'ets-wcfm-frontendform-add-on') ?></span> <?php echo __('your', 'ets-wcfm-frontendform-add-on') ?> <span
                         class="product_text"><?php echo __( 'product', 'ets-wcfm-frontendform-add-on' ) ?></span></h2>
                   <form id="wcfm_vandor_pro_form" class="" method="post" >
                      <input name="action" value="add_transfer" type="hidden">
                      <input type="hidden" name="product_type" value="simple">
                      <ul id="progressbar">
                         <li class="active" id="account"> <span class="step_count">1.</span> <span
                               class="step_count_text"><?php echo __('Choose the Type of the Product', 'ets-wcfm-frontendform-add-on') ?> </span></li>
                         <li id="personal"><span class="step_count">2.</span> <span class="step_count_text"> <?php echo __( 'Upload Your Product', 'ets-wcfm-frontendform-add-on' ) ?>
                              </span></li>
                         <li id="payment"><span class="step_count">3.</span> <span class="step_count_text"><?php echo __( 'Fill the
                               Details', 'ets-wcfm-frontendform-add-on' ) ?></span></li>
                      </ul>
                      <div class="progress">
                         <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100"></div>
                      </div>
                      <fieldset class="step-1">
                           <div class="form-card ">
                            <div class="step_form_title_main">
                               <p class="step_form_title"><?php echo __( 'Is this a ready product, or a service you wish to
                                  provide?', 'ets-wcfm-frontendform-add-on' ) ?></p>
                            </div>
                            <div class="circle_main">                             
                                 <label>
                                    <input type="radio" value="physical" <?php if(isset($product_type) && !empty($product_type) && $product_type[0]->name =='physical') { echo 'checked'; 
                                       } ?>  <?php if(isset($product_type) && !empty($product_type)) { echo 'disabled'; 
                                       } ?>  name="pro_type" class="type_of_product" />
                                       <div class="Physical">
                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/exhibition-gallery.png'  ?>" alt="img">
                                          <span><?php echo __( 'Physical', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       </div>
                                    </label>
                                     <label>
                                    <input type="radio" value="digital" <?php if(isset($product_type) && !empty($product_type) && $product_type[0]->name=='digital') { echo 'checked'; } ?> <?php if(isset($product_type) && !empty($product_type)) { echo 'disabled'; } ?> name="pro_type" class="type_of_product" />
                                       <div class="Digital">
                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/web-design-brush.png'  ?>" alt="img">
                                          <span><?php echo __( 'Digital', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       </div>
                                    </label>

                            </div>
                           </div>
                           <button class="next action-button" name="next" type="button" value="next"><?php  echo __( 'Next Step', 'ets-wcfm-frontendform-add-on' ) ?>
                              <i class="fa fa-chevron-right button_arrow_next" aria-hidden="true"></i>
                           </button>
                      </fieldset>
                     
                      <fieldset class="step-2">
                           <div class="form-card">
                              <div class="step_form_title_main">
                               <p class="step_form_title"><?php  echo __( 'Upload your product images', 'ets-wcfm-frontendform-add-on' ) ?></p>
                               <p class="step_form_sub_title"><?php  echo __( 'Drag and drop the images or choose them from your device', 'ets-wcfm-frontendform-add-on' ) ?></p>
                            </div>

                            <div class="ets_file_uploder">
                                <label class="" for="upload_lbl" id="ets_file_uploder">
                                    <div class="download_icon_main">
                                       <div class="download_icon">
                                          <div class="download_icon_border">
                                             <img src=" <?php echo ETS_WCFM_PLUGIN_URL.'assets/img/dwonload.png'  ?>" alt="dwonload">
                                          </div>
                                       </div>
                                       <p class="image_formate"><?php  echo __( '*The images should be in PNG or JPEG formats', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                          <p class="image_error"></p>

                                    </div>

                                </label>
                                <input type="text" name="image_art" id="upload_lbl" class="upload_lbl" multiple> 
                            </div>

                            <div class="image_upload">
                               <p class="image_preview"><?php  echo __( 'Preview', 'ets-wcfm-frontendform-add-on' ) ?></p>
                               <div class="row m-0 previwer">
                               </div>

                               <div class="row m-0 mt-3 img_cards placeholders">
                                      <div class="col-md-3 col-6 p-360">
                                            
                                         <div class="image_container plus_icon_box">
                                          <img src="" class="single_img_selected">
                                              <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>
                                        <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="3" class="single_img_selected">
                                            <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>

                                       <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="3" class="single_img_selected">
                                            <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>
                                                                
                                      <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="3" class="single_img_selected">
                                            <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>
                                       <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="3" class="single_img_selected">
                                            <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>
                                      <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="2" class="single_img_selected">
                                            <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>
                                      <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="3" class="single_img_selected">
                                            <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>
                                      <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="4" class="single_img_selected">
                                            <i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                                         </div>
                                      </div>

                               </div>
                            </div>
                           </div>
                           <button type="button" name="next" class="next action-button" value="Next">
                            <?php  echo __( 'Next Step', 'ets-wcfm-frontendform-add-on' ) ?> <i class="fa fa-chevron-right button_arrow_next" aria-hidden="true"></i>
                           </button>
                           <button type="button" name="previous" class="previous action-button-previous"
                            value="Previous">
                            <i class="fa fa-chevron-left Previous_arrow" aria-hidden="true"></i>
                            <?php  echo __( 'Previous Step', 'ets-wcfm-frontendform-add-on' ) ?>
                           </button>
                      </fieldset>
                             
                        <fieldset class="step-3">
                              <div class="form-card step-3-physical">
                                    <div class="step_form_title_main step_3_title_main">
                                        <div class="step_3_title_icon">
                                           <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/step3_icon.png'  ?>" alt="image" class="img-fluid">
                                        </div>
                                        <span class="step_3_title"><?php  echo __( 'Describe Your Artwork', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    </div>

                                    <div class="input_field_container">
                                     <label for="ptitle" class="form_label"><?php  echo __( 'Title:', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                     <div class="form_gradient_border icon_brush">
                                      <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png' ?>" class="brush_img" alt="img">
                                        <input value="<?php if(isset($product_name) && !empty($product_name) && $product_name)
                                        { echo $product_name; } ?>" type="text" name="wcfm_data[physical][pro_title]" id="ptitle" placeholder="Artwork Title"
                                           class="form_input physical_title">
                                     </div>
                                     <div class="row m-0">
                                      <?php
                                          $year_of_creations = get_terms( array(
                                            'taxonomy' => 'pa_year-of-creation',
                                            'hide_empty' => false
                                          ) );
                                          foreach ($year_of_creations as  $year_of_creation) {
                                          }  
                                         ?>
                                        <div class="col-md-6 p-0">
                                           <label for="Year" class="form_label"><?php  echo __( 'Year of creation:', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                           <div class="form_gradient_border icon_brush">
                                              <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                                                      
                                               <input type="text" name="wcfm_data[physical][attributes][pa_year-of-creation][custom]" id="year" placeholder="Year of creation"
                                           class="form_input physical_title" value="<?php if ( isset( $year_creation_terms[0]->name ) && !empty( $year_creation_terms[0]->name== $year_of_creation->name ) && $year_creation_terms[0]->name == $year_of_creation->name)  {
                                                          echo  $year_creation_terms[0]->name;
                                                      } ?>" > 
                                           </div>
                                        </div>
                                     </div>
                                 
                                  </div>

                                    <div class="product_technique">
                                    <p class="check_box_title"><?php echo __( 'Classification:', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                    <span class="form_label"><?php  echo __( 'Category', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                               
                                                   <?php 
                                                      $args = array(
                                                         'orderby' => 'name',
                                                         'hierarchical' => 1,
                                                         'taxonomy' => 'product_cat',
                                                         'hide_empty' => 0,
                                                         'parent' => 0,
                                                      );
                                                      $categories = get_categories($args);
                                                      $show_techs = array();
                                                      if ( !empty($categories) ) :

                                                      foreach( $categories as $category ) { 

                                                      if ( $category->slug === 'uncategorized' ) {
                                                      continue;
                                                      }

                                                     $category_tax_map = get_option('ets_wc_category_tax_mapping');

                                                     $category_tax_map = array_flip( $category_tax_map );
                                                     $termClass = '';
                                                     if (array_key_exists( $category->term_id, $category_tax_map )) {
                                                        $termClass =  $category_tax_map[$category->term_id];
                                                     }
                                                     
                                                     
                                                      ?>
                                                   <div class="col-md-4">
                                                   <div class="checkbox2">
                                                      <label class="ets_checkbox">
                                                      <span class="check_box_label"><?php echo esc_attr($category->name)  ?></span>
                                                      <input type="checkbox"  data-catid="<?php echo esc_attr($category->term_id)  ?>" data-term_cls="attribute_id_<?php echo $termClass;  ?>" name="wcfm_data[physical][product_cats][]" class="wcfm_prod_form_check_singal product_category_cls" data-role="product_category"  value="<?php echo esc_attr($category->term_id)  ?>" 
                                                      <?php 
                                                        if ( isset($get_physical_cateogry[0]->name ) && !empty( $get_physical_cateogry[0]->name == $category->name ) && $get_physical_cateogry[0]->name == $category->name ) {
                                                            echo 'checked';
                                                           $show_techs[] = $category_tax_map[$category->term_id];
                                                          }
                                                        ?> >
                                                      <span class="checkmark"> <span class="checkmark1"></span> </span>
                                                      </label>
                                                   </div>
                                                   </div>
                                               <?php  }
                                                      endif;
                                                      ?>
                                                </div>
                                            
                                             <div class="col-md-4">
                                                <span class="custom_text">
                                                <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img"> 
                                                <input type="text" class="custom_input_check_box" name="wcfm_data[physical][product_cats][custom] " placeholder="Custom"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                        <?php
                                       $attributes = wc_get_attribute_taxonomies();
                                     
                                       foreach ( $attributes as $attribute ) {
                                           $attribute->attribute_terms = get_terms( array(
                                               'taxonomy' => 'pa_'.$attribute->attribute_name,
                                               'hide_empty' => false,
                                              
                                           ));
                                           

                                           ?>

                                       <div class="technics_main  <?php echo in_array($attribute->attribute_id, $show_techs)? 'f-display': ''; ?> attribute_id_<?php  echo esc_attr($attribute->attribute_id) ?>" data-attrid="<?php echo esc_attr($attribute->attribute_id)  ?>">
                                    <span class="form_label physical_pro_tech"><?php  echo esc_html($attribute->attribute_label) ?></span>
                                    <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                 <?php 
                                                 $termsOfAttr = $attribute->attribute_terms;
                                                 if ( $attribute->attribute_terms ) {

                                                 foreach(  $termsOfAttr as $attributeTerm  ){
                                                  ?>


                                                   <div class="col-md-4">
                                                    <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr( $attributeTerm->name ) ?></span>
                                                           <?php 
                                                              $nameForTechnique = 'wcfm_data[physical][attributes]['.'pa_'.  $attribute->attribute_name .'][]'; 
                                                            ?> 
                                                            <input name="<?php echo $nameForTechnique ?>"class="technic_input_cls" type="checkbox" value="<?php echo esc_attr( $attributeTerm->term_id)  ?>"
                                                            <?php 
                                                                if ( isset( $get_painting_subcat[0]->name ) && !empty( $get_painting_subcat[0]->name == $attributeTerm->name ) && $get_painting_subcat[0]->name == $attributeTerm->name ) {
                                                                    echo 'checked';
                                                                }
                                                                if ( isset( $get_print_subcat[0]->name ) && !empty( $get_print_subcat[0]->name == $attributeTerm->name) && $get_print_subcat[0]->name == $attributeTerm->name ) {
                                                                    echo 'checked';
                                                                }
                                                              ?> >
                                                            <span class="checkmark"> <span class="checkmark1"></span></span>
                                                            </label>
                                                            </div>
                                                            </div>
                                                <?php 
                                                 }
                                             }  ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php } ?>

                                  <div class="support">
                                      <span class="form_label"><?php  echo __( 'Support or surface', 'ets-wcfm-frontendform-add-on' ) ?> </span>
                                      <div class="form_gradient_border mb_25">
                                           <div class="check_box_container">
                                              <div class="row m-0">
                                                 <div class="col-12 p-0">
                                                    <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                    <div class="divider active"></div>
                                                 </div>
                                              </div>
                                              <div class="checkbox_main active">
                                                 <div class="row m-0">
                                                    
                                                   <?php
                                                     $paSOS = get_terms( array(
                                                          'taxonomy' => 'pa_support-or-surface',
                                                          'hide_empty' => false
                                                      ) );

                                                     foreach( $paSOS as $support ){ 
                                                        $get_custom_terms = get_term_meta($support->term_id, 'custom_terms_key', $user_id);
                                                       $get_term_by_admin = get_term_meta($support->term_id, 'order_'.$support->taxonomy, $user_id);
                                                      
                                                       if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                          ?>
                                                      
                                                          <div class="col-md-4">
                                                          <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr($support->name) ?></span>
                                                            <input name="wcfm_data[physical][attributes][pa_support-or-surface][]" data-role="product_support" class="product_support_cls" type="checkbox" value="<?php echo esc_attr( $support->term_id) ?>" <?php 
                                                              if ( isset( $support_terms[0]->name ) && !empty( $support_terms[0]->name == $support->name ) && $support_terms[0]->name == $support->name ) {
                                                                  echo 'checked';
                                                              }
                                                            ?> >
                                                            <span class="checkmark"> <span class="checkmark1"></span></span>
                                                            </label>
                                                            </div>
                                                          </div>
                                                  <?php }
                                                     elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                      ?>
                                                          <div class="col-md-4">
                                                          <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr($support->name) ?></span>
                                                            <input name="wcfm_data[physical][attributes][pa_support-or-surface][]" data-role="product_support" class="product_support_cls" type="checkbox" value="<?php echo esc_attr( $support->term_id) ?>" <?php 
                                                              if ( isset( $support_terms[0]->name ) && !empty( $support_terms[0]->name == $support->name ) && $support_terms[0]->name == $support->name ) {
                                                                  echo 'checked';
                                                              }
                                                            ?> >
                                                            <span class="checkmark"> <span class="checkmark1"></span></span>
                                                            </label>
                                                       </div>
                                                       </div>
                                                  <?php 
                                                      }
                                                    } ?>
                                                       
                                                    <div class="col-md-4">
                                                       <span class="custom_text">
                                                        <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">
                                                       <input type="text" class="custom_input_check_box" name="wcfm_data[physical][attributes][pa_support-or-surface][custom]" placeholder="Custom"></span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                  </div>

                                 <div class="presantaion_main">
                                      <p class="check_box_title"><?php  echo __( 'Presentation:', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                      <span class="form_label"><?php  echo __( 'Display', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                      <div class="form_gradient_border mb_25">
                                         <div class="check_box_container">
                                            <div class="row m-0">
                                               <div class="col-12 p-0">
                                                  <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                  <div class="divider active"></div>
                                               </div>
                                            </div>
                                            <div class="checkbox_main active">
                                               <div class="row m-0">
                                                 
                                                        <?php
                                                          $pa_display_attrs = get_terms( array(
                                                           'taxonomy' => 'pa_display',
                                                           'hide_empty' => false,
                                                        
                                                           ) );
                                                          foreach( $pa_display_attrs as $displayattr ){ 

                                                             $get_custom_terms = get_term_meta($displayattr->term_id, 'custom_terms_key', $user_id);
                                                             $get_term_by_admin = get_term_meta($displayattr->term_id, 'order_'.$displayattr->taxonomy, $user_id);
                                                            
                                                             if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                              ?>
                                                              <div class="col-md-4">
                                                              <div class="checkbox2">
                                                                <label class="ets_checkbox">
                                                                <span class="check_box_label"><?php  echo esc_attr( $displayattr->name ) ?></span>
                                                                <input name="wcfm_data[physical][attributes][pa_display][]" data-role="pro_display" class="pro_display_attr" type="checkbox" value="<?php echo esc_attr( $displayattr->term_id)  ?>" 
                                                                  <?php
                                                                   if ( isset($display_terms[0]->name ) && !empty($display_terms[0]->name == $displayattr->name ) && $display_terms[0]->name == $displayattr->name ) {
                                                                      echo 'checked';
                                                                    }
                                                                  ?> >
                                                                      <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                      </label>
                                                                </div>
                                                              </div>
                                                              <?php
                                                              }
                                                             elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                              ?>
                                                               <div class="col-md-4">
                                                              <div class="checkbox2">
                                                                <label class="ets_checkbox">
                                                                <span class="check_box_label"><?php  echo esc_attr( $displayattr->name ) ?></span>
                                                                <input name="wcfm_data[physical][attributes][pa_display][]" data-role="pro_display" class="pro_display_attr" type="checkbox" value="<?php echo esc_attr( $displayattr->term_id)  ?>" 
                                                                  <?php
                                                                   if ( isset($display_terms[0]->name ) && !empty($display_terms[0]->name == $displayattr->name ) && $display_terms[0]->name == $displayattr->name ) {
                                                                      echo 'checked';
                                                                    }
                                                                  ?> >
                                                                      <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                      </label>
                                                               </div>
                                                              </div>
                                                               <?php
                                                              }
                                                            } ?>
                                                 
                                                   <div class="col-md-4">
                                                     <span class="custom_text"> <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png' ?>" class="brush_custom" alt="img">
                                                     <input type="text" name="wcfm_data[physical][attributes][pa_display][custom]" class="custom_input_check_box" placeholder="Custom" data-role="pro_display" class="pro_display_attr"></span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                                     
                                  <div class="framing_main">
                                      <span class="form_label"><?php  echo __( 'Framing', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                      <div class="form_gradient_border mb_25">
                                         <div class="check_box_container">
                                            <div class="row m-0">
                                               <div class="col-12 p-0">
                                                  <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                  <div class="divider active"></div>
                                               </div>
                                            </div>
                                            <div class="checkbox_main active">
                                               <div class="row m-0">
                                                 <?php
                                                        $framingAttrs = get_terms( array(
                                                             'taxonomy' => 'pa_framing',
                                                             'hide_empty' => false
                                                         ) );
                                                        foreach( $framingAttrs as $framingAttr ){ 
                                                          $get_custom_terms = get_term_meta($framingAttr->term_id, 'custom_terms_key', $user_id);
                                                           $get_term_by_admin = get_term_meta($framingAttr->term_id, 'order_'.$framingAttr->taxonomy, $user_id);
                                                          
                                                           if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) { ?>

                                                             <div class="col-md-4">
                                                            <div class="checkbox2">
                                                                    <label class="ets_checkbox">
                                                                    <span class="check_box_label"><?php  echo esc_attr( $framingAttr->name ) ?></span>
                                                                    <input name="wcfm_data[physical][attributes][pa_framing][]" class="displayattr" type="radio" value="<?php echo esc_attr( $framingAttr->term_id)  ?>" 
                                                                    <?php 
                                                                      if ( isset( $framing_terms[0]->name ) && !empty( $framing_terms[0]->name == $framingAttr->name ) && $framing_terms[0]->name == $framingAttr->name ) {
                                                                          echo 'checked';
                                                                        }
                                                                    ?>>
                                                                    <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                    </label>
                                                            </div>
                                                            </div>
                                                            <?php }
                                                             elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) { ?>
                                                               <div class="col-md-4">
                                                            <div class="checkbox2">
                                                                    <label class="ets_checkbox">
                                                                    <span class="check_box_label"><?php  echo esc_attr($framingAttr->name ) ?></span>
                                                                    <input name="wcfm_data[physical][attributes][pa_framing][]" class="displayattr" type="radio" value="<?php echo esc_attr( $framingAttr->term_id)  ?>" 
                                                                    <?php 
                                                                      if ( isset( $framing_terms[0]->name ) && !empty( $framing_terms[0]->name == $framingAttr->name ) && $framing_terms[0]->name == $framingAttr->name ) {
                                                                          echo 'checked';
                                                                        }
                                                                    ?>>
                                                                    <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                    </label>
                                                            </div>
                                                            </div>

                                                         <?php } 
                                                        }
                                                    ?>
                                                    <div class="col-md-4">
                                                   <span class="custom_text"> <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img"> 
                                                   <input type="text" name="wcfm_data[physical][attributes][pa_framing][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                  </div>

                                 <div class="fram_type_main">
                                       <span class="form_label"><?php  echo __( 'Frame type', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       <div class="form_gradient_border mb_25">
                                          <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                <?php
                                                   $frametype = get_terms( array(
                                                   'taxonomy' => 'pa_frame-type',
                                                   'hide_empty' => false
                                                   ) );
                                                   foreach( $frametype as $ftype ){ 
                                                        $get_custom_terms = get_term_meta($ftype->term_id, 'custom_terms_key', $user_id);
                                                             $get_term_by_admin = get_term_meta($ftype->term_id, 'order_'.$ftype->taxonomy, $user_id);
                                                            
                                                        if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) { ?>

                                                          <div class="col-md-4">
                                                             <div class="checkbox2">
                                                                <label class="ets_checkbox">
                                                                <span class="check_box_label"><?php  echo esc_attr( $ftype->name ) ?></span>
                                                                <input name="wcfm_data[physical][attributes][pa_frame-type][]" data-role="pro_frame_type" class="pro_frame_type_cls" type="checkbox" value="<?php echo esc_attr( $ftype->term_id)  ?>" <?php 
                                                                  if ( isset( $frame_type_terms[0]->name ) && !empty( $frame_type_terms[0]->name == $ftype->name )  && $frame_type_terms[0]->name == $ftype->name ) {
                                                                      echo 'checked';      
                                                                    }
                                                                ?>>
                                                                <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                </label>
                                                             </div>
                                                          </div>
                                                          <?php }
                                                          elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) { 
                                                       ?>
                                                       <div class="col-md-4">
                                                         <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr( $ftype->name ) ?></span>
                                                            <input name="wcfm_data[physical][attributes][pa_frame-type][]" data-role="pro_frame_type" class="pro_frame_type_cls" type="checkbox" value="<?php echo esc_attr( $ftype->term_id)  ?>" <?php 
                                                              if ( isset( $frame_type_terms[0]->name ) && !empty( $frame_type_terms[0]->name == $ftype->name )  && $frame_type_terms[0]->name == $ftype->name ) {
                                                                  echo 'checked';      
                                                              }
                                                            ?>>
                                                            <span class="checkmark"> <span class="checkmark1"></span></span>
                                                            </label>
                                                         </div>
                                                        </div>
                                                        <?php } 
                                                      } ?>
                                                  
                                                <div class="col-md-4">
                                                   <span class="custom_text"> <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">
                                                   <input type="text" name="wcfm_data[physical][attributes][pa_frame-type][custom]" class="custom_input_check_box" placeholder="Custom"></span> 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="unit_main">
                                       <span class="form_label"><?php  echo __( 'Length Unit', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       <div class="form_gradient_border mb_25">
                                          <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                <?php
                                                   $lengthUnit = get_terms( array(
                                                      'taxonomy' => 'pa_length-unit',
                                                      'hide_empty' => false
                                                   ) );
                                                   foreach( $lengthUnit as $lUnit ) { 
                                                      $get_custom_terms = get_term_meta($lUnit->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($lUnit->term_id, 'order_'.$lUnit->taxonomy, $user_id);
                                                            
                                                        if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                      ?>
                                                  <div class="col-md-4">
                                                     <div class="checkbox2">
                                                        <label class="ets_checkbox">
                                                        <span class="check_box_label"><?php  echo esc_attr( $lUnit->name ) ?></span>
                                                        <input name="wcfm_data[physical][attributes][pa_length-unit][]" data-role="length_unit" class="length_unit_cls" type="checkbox" value="<?php echo esc_attr( $lUnit->term_id )  ?>" <?php 
                                                          if (  isset($length_unit_terms[0]->name  )&& ! empty(  $length_unit_terms[0]->name == $lUnit->name  ) && $length_unit_terms[0]->name == $lUnit->name  )   {
                                                               echo 'checked';        
                                                          }
                                                       ?>>
                                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                        </label>
                                                     </div>
                                                  </div>
                                                  <?php }
                                                    elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) { 
                                                     ?>
                                                     <div class="col-md-4">
                                                     <div class="checkbox2">
                                                        <label class="ets_checkbox">
                                                        <span class="check_box_label"><?php  echo esc_attr( $lUnit->name ) ?></span>
                                                        <input name="wcfm_data[physical][attributes][pa_length-unit][]" data-role="length_unit" class="length_unit_cls" type="checkbox" value="<?php echo esc_attr( $lUnit->term_id )  ?>" <?php 
                                                          if (  isset($length_unit_terms[0]->name  )&& ! empty(  $length_unit_terms[0]->name == $lUnit->name  ) && $length_unit_terms[0]->name == $lUnit->name  )   {
                                                               echo 'checked';        
                                                          }
                                                       ?>>
                                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                        </label>
                                                     </div>
                                                  </div>
                                                <?php } 
                                              } ?>
                                                <div class="col-md-4">
                                                   <span class="custom_text"> <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img"> 
                                                   <input type="text" name="wcfm_data[physical][attributes][pa_length-unit][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="row m-0 w">
                                     <div class="col-md-6 pl-md-0 p_mobile_0">
                                        <div class="input_field_container">
                                           <label for="Title1" class="form_label"><?php  echo __( 'Height', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                           <div class="form_gradient_border icon_brush">
                                             <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                              <input type="text" name="height" id="Title1" placeholder="Height"
                                                 class="form_input" value="<?php if( isset( $product_height ) && $product_height ){
                                                    echo $product_height;
                                                 }?>">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6 pr-md-0 p_mobile_0">
                                        <div class="input_field_container">
                                           <label for="Title1" class="form_label"><?php  echo __( 'Width', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                           <div class="form_gradient_border icon_brush">
                                             <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                              <input type="text" name="width" id="" placeholder="Width"
                                                 class="form_input" value="<?php if( isset( $product_width ) && $product_width ){
                                                   echo $product_width;
                                                 }?>">
                                           </div>
                                        </div>
                                     </div>
                                  </div>

                                  <div class="row m-0">
                                     <div class="col-md-6 pl-md-0 p_mobile_0">
                                        <div class="input_field_container">
                                           <label for="" class="form_label"><?php  echo __( 'Thickness', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                           <div class="form_gradient_border icon_brush">
                                             <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                              <input type="text" name="wcfm_data[physical][_thickness]" id="" placeholder="Thickness"
                                                 class="form_input" value="<?php if ( isset( $product_thickness ) && $product_thickness ){
                                                      echo $product_thickness;
                                                 }?>">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6 pr-md-0 p_mobile_0">
                                        <div class="input_field_container">
                                           <label for="" class="form_label"><?php  echo __( 'Weight', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                           <div class="form_gradient_border icon_brush">
                                             <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                              <input type="text" name="weight" id="" placeholder="Weight"
                                                 class="form_input" value="<?php if ( isset( $product_weight ) && $product_weight ){
                                                    echo $product_weight;
                                                 }?>">
                                           </div>
                                        </div>
                                     </div>
                                  </div>

                                 <div class="price_orignal">
                                     <p class="check_box_title"><?php  echo __( 'Price:', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                       <span class="form_label"><?php  echo __( 'Sell original piece', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       <div class="form_gradient_border ">
                                        <div class="check_box_container">
                                           <div class="row m-0">
                                              <div class="col-12 p-0">
                                                 <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                 <div class="divider active"></div>
                                              </div>
                                           </div>
                                           <div class="checkbox_main active">
                                              <div class="row m-0">
                                               <?php
                                                     $orignalPeace = get_terms( array(
                                                          'taxonomy' => 'pa_original-piece',
                                                          'hide_empty' => false
                                                      ) );
                                                     foreach( $orignalPeace as $orignalItem ){ 
                                                      $get_custom_terms = get_term_meta($orignalItem->term_id, 'custom_terms_key', $user_id);
                                                      $get_term_by_admin = get_term_meta($orignalItem->term_id, 'order_'.$orignalItem->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {

                                                      ?>
                                                          <div class="col-md-4">
                                                             <div class="checkbox2">
                                                                     <label class="ets_checkbox">
                                                                     <span class="check_box_label"><?php  echo esc_attr( $orignalItem->name ) ?></span>
                                                                     <input data-role="" name="wcfm_data[physical][attributes][pa_original-piece][]" class="" type="radio" value="<?php echo esc_attr( $orignalItem->term_id )  ?>" <?php 
                                                                       if ( isset( $org_piece_terms[0]->name) && !empty( $org_piece_terms[0]->name == $orignalItem->name ) && $org_piece_terms[0]->name == $orignalItem->name ) {
                                                                          echo 'checked';
                                                                        }
                                                                      ?> >
                                                                     <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                     </label>
                                                                   </div>
                                                               </div>
                                                            <?php }
                                                             elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) { 
                                                       ?>
                                                       <div class="col-md-4">
                                                             <div class="checkbox2">
                                                                     <label class="ets_checkbox">
                                                                     <span class="check_box_label"><?php  echo esc_attr( $orignalItem->name ) ?></span>
                                                                     <input data-role="" name="wcfm_data[physical][attributes][pa_original-piece][]" class="" type="radio" value="<?php echo esc_attr( $orignalItem->term_id )  ?>" <?php 
                                                                       if ( isset( $org_piece_terms[0]->name) && !empty( $org_piece_terms[0]->name == $orignalItem->name ) && $org_piece_terms[0]->name == $orignalItem->name ) {
                                                                          echo 'checked';
                                                                        }
                                                                      ?> >
                                                                     <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                     </label>
                                                                   </div>
                                                               </div>
                                                             <?php } } ?>
                                                        <div class="col-md-4">
                                                   <span class="custom_text"> <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">                                             
                                                   <input type="text" name="wcfm_data[physical][attributes][pa_original-piece][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                </div>
                                                 </div>
                                              </div>
                                           </div>
                                     </div>

                                         <span class="price_note mb_25"><?php  echo __( '*All original pieces must include signature, and certificate of authenticity.', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                        <div class="row m-0">
                                           <div class="col-md-6 p-0">
                                              <label for="pro_price" class="form_label"><?php  echo __( 'Original piece Price without shipping', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                              <div class="form_gradient_border icon_brush">
                                                <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                                 <input type="text" name="wcfm_data[physical][_orignal_piece_price]" id="pro_price" placeholder="" class="form_input" value="<?php if ( isset( $product_org_piece_price ) &&  $product_org_piece_price ) {
                                                  echo  $product_org_piece_price;
                                                 }?>">
                                              </div>
                                           </div>
                                        </div>
                                 </div>

                                 <div class="repro_main">
                                    <span class="form_label"><?php  echo __( 'Reproduction available', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                     <div class="form_gradient_border mb_25">
                                        <div class="check_box_container">
                                           <div class="row m-0">
                                              <div class="col-12 p-0">
                                                 <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                 <div class="divider active"></div>
                                              </div>
                                           </div>
                                           <div class="checkbox_main active">
                                              <div class="row m-0">
                                               <?php
                                               $reproductions = get_terms( array(
                                                          'taxonomy' => 'pa_reproduction',
                                                          'hide_empty' => false
                                                      ) );
                                                     foreach( $reproductions as $reproduction ) {

                                                        $get_custom_terms = get_term_meta($reproduction->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($reproduction->term_id, 'order_'.$reproduction->taxonomy, $user_id);
                                                            
                                                          if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                        ?>
                                                            <div class="col-md-4">
                                                               <div class="checkbox2">
                                                                       <label class="ets_checkbox">
                                                                       <span class="check_box_label"><?php  echo esc_attr( $reproduction->name ) ?></span>
                                                                       <input name="wcfm_data[physical][attributes][pa_reproduction][]" class="reproductions" type="radio" value="<?php echo esc_attr( $reproduction->term_id)  ?>" 
                                                                       <?php
                                                                          if ( isset( $reproduction_terms[0]->name) && !empty( $reproduction_terms[0]->name == $reproduction->name) && $reproduction_terms[0]->name == $reproduction->name) {
                                                                          echo 'checked';
                                                                          }
                                                                          ?> >
                                                                       <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                       </label>
                                                               </div>
                                                           </div>
                                                        <?php }
                                                         elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                         ?>
                                                          <div class="col-md-4">
                                                               <div class="checkbox2">
                                                                       <label class="ets_checkbox">
                                                                       <span class="check_box_label"><?php  echo esc_attr( $reproduction->name ) ?></span>
                                                                       <input name="wcfm_data[physical][attributes][pa_reproduction][]" class="reproductions" type="radio" value="<?php echo esc_attr( $reproduction->term_id)  ?>" 
                                                                       <?php
                                                                          if ( isset( $reproduction_terms[0]->name) && !empty( $reproduction_terms[0]->name == $reproduction->name) && $reproduction_terms[0]->name == $reproduction->name) {
                                                                          echo 'checked';
                                                                          }
                                                                          ?> >
                                                                       <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                       </label>
                                                               </div>
                                                            </div>
                                                            <?php } 
                                                          } ?>
                                                        <div class="col-md-4">
                                                         <span class="custom_text"> 
                                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">         
                                                         <input type="text" name="wcfm_data[physical][attributes][pa_reproduction][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                      </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                 </div>

                                 <div class="art_type">
                                    <span class="form_label"><?php  echo __( 'Type', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                     <div class="form_gradient_border mb_25">
                                        <div class="check_box_container">
                                           <div class="row m-0">
                                              <div class="col-12 p-0">
                                                 <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                 <div class="divider active"></div>
                                              </div>
                                           </div>
                                           <div class="checkbox_main active">
                                              <div class="row m-0">
                                                <?php
                                               $paarttype = get_terms( array(
                                                    'taxonomy' => 'pa_art-type',
                                                    'hide_empty' => false
                                                ) );
                                               foreach( $paarttype as $arttype ){ 
                                                      $get_custom_terms = get_term_meta($arttype->term_id, 'custom_terms_key', $user_id);
                                                      $get_term_by_admin = get_term_meta($arttype->term_id, 'order_'.$arttype->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {?>
                                                      <div class="col-md-4">
                                                       <div class="checkbox2">
                                                               <label class="ets_checkbox">
                                                               <span class="check_box_label"><?php  echo esc_attr( $arttype->name ) ?></span>
                                                               <input name="wcfm_data[physical][attributes][pa_art-type][]" data-role="pro_art_type" class="pro_art_type_cls" type="checkbox" value="<?php echo esc_attr( $arttype->term_id)  ?>" 
                                                               <?php 
                                                                 if ( isset( $art_type_terms[0]->name ) && !empty($art_type_terms[0]->name == $arttype->name ) && $art_type_terms[0]->name == $arttype->name ) {
                                                                    echo 'checked';
                                                                  }
                                                                ?>>
                                                               <span class="checkmark"> <span class="checkmark1"></span></span>
                                                               </label>
                                                       </div>
                                                               </div>
                                                            <?php }
                                                            elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                       ?>
                                                       <div class="col-md-4">
                                                       <div class="checkbox2">
                                                               <label class="ets_checkbox">
                                                               <span class="check_box_label"><?php  echo esc_attr( $arttype->name ) ?></span>
                                                               <input name="wcfm_data[physical][attributes][pa_art-type][]" data-role="pro_art_type" class="pro_art_type_cls" type="checkbox" value="<?php echo esc_attr( $arttype->term_id)  ?>" 
                                                               <?php 
                                                                 if ( isset( $art_type_terms[0]->name ) && !empty($art_type_terms[0]->name == $arttype->name ) && $art_type_terms[0]->name == $arttype->name ) {
                                                                    echo 'checked';
                                                                  }
                                                                ?>>
                                                               <span class="checkmark"> <span class="checkmark1"></span></span>
                                                               </label>
                                                              </div>
                                                               </div>
                                                             <?php }
                                                        } ?>
                                                       <div class="col-md-4">
                                                         <span class="custom_text"> 
                                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img"> 
                                                         <input type="text" name="wcfm_data[physical][attributes][pa_art-type][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                      </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                 </div>
                                     
                                 <div class="row m-0 price">
                                     <div class="col-md-6 p-0">
                                        <label for="Title1" class="form_label"><?php  echo __( 'Price', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                        <div class="form_gradient_border icon_brush">
                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png' ?>" class="brush_img" alt="img">
                                           <input type="text" name="wcfm_data[physical][price][regular_price]" id="sale_price_id" placeholder="" class="sale_price_cls form_input" value="<?php if( isset( $product_reguler_price ) && $product_reguler_price ) {
                                            echo $product_reguler_price ;
                                           }?>">
                                        </div>
                                     </div>
                                 </div>

                                 <div class="input_field_container">
                                     <p class="check_box_title"><?php  echo __( 'Shipping:', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                     <label for="Title1" class="form_label"><?php  echo __( 'Shipping services (ex: DHL, FedEx)', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                     <div class="form_gradient_border icon_brush">
                                      <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                        <input type="text" name="wcfm_data[physical][_shipping]" id="" placeholder="" class="form_input" value="<?php if( isset( $product_shipping ) &&  $product_shipping ){
                                                  echo  $product_shipping;
                                                 }?>">
                                     </div>
                                 </div>
                                 <div class="shippingLocations">
                                    <span class="form_label"><?php  echo __( 'Shipping locations', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select locations', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                   <?php
                                                   $shippingLocations = get_terms( array(
                                                   'taxonomy' => 'pa_shipping-locations',
                                                   'hide_empty' => false
                                                   ) );
                                                      foreach( $shippingLocations as $shippingLocation  ){ 

                                                        $get_custom_terms = get_term_meta($shippingLocation->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($shippingLocation->term_id, 'order_'.$shippingLocation->taxonomy, $user_id);
                                                          
                                                        if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                          ?>
                                                         <div class="col-md-4">
                                                            <div class="checkbox2">
                                                               <label class="ets_checkbox">
                                                               <span class="check_box_label"><?php  echo esc_attr( $shippingLocation->name ) ?></span>
                                                               <input name="wcfm_data[physical][attributes][pa_shipping-locations][]" data-role="pro_ship_location" class="pro_ship_location_cls" type="checkbox" value="<?php echo esc_attr( $shippingLocation->term_id)  ?>" 
                                                                <?php 
                                                                  if (isset( $ship_location_terms[0]->name ) && !empty( $ship_location_terms[0]->name == $shippingLocation->name ) && $ship_location_terms[0]->name == $shippingLocation->name ) {
                                                                    echo 'checked';
                                                                  }
                                                                ?>>
                                                               <span class="checkmark"> <span class="checkmark1"></span></span>
                                                               </label>
                                                            </div>
                                                         </div>
                                                         <?php }
                                                          elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {

                                                         ?>
                                                       <div class="col-md-4">
                                                                <div class="checkbox2">
                                                                   <label class="ets_checkbox">
                                                                   <span class="check_box_label"><?php  echo esc_attr( $shippingLocation->name ) ?></span>
                                                                   <input name="wcfm_data[physical][attributes][pa_shipping-locations][]" data-role="pro_ship_location" class="pro_ship_location_cls" type="checkbox" value="<?php echo esc_attr( $shippingLocation->term_id)  ?>" 
                                                                    <?php 
                                                                      if (isset( $ship_location_terms[0]->name ) && !empty( $ship_location_terms[0]->name == $shippingLocation->name ) && $ship_location_terms[0]->name == $shippingLocation->name ) {
                                                                        echo 'checked';
                                                                      }
                                                                    ?>>
                                                                   <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                   </label>
                                                                </div>
                                                             </div>
                                                          <?php }
                                                        } ?>
                                                <div class="col-md-4">
                                                         <span class="custom_text">
                                                         <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">  
                                                        
                                                         <input type="text" name="wcfm_data[physical][attributes][pa_shipping-locations][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                      </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="packaging_main">
                                    <span class="form_label"><?php  echo __( 'Packaging', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                <?php
                                                   $proPackaging = get_terms( array(
                                                   'taxonomy' => 'pa_packaging',
                                                   'hide_empty' => false
                                                   ) );
                                                   foreach(  $proPackaging as $packaging  ){ 
                                                    $get_custom_terms = get_term_meta($packaging->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($packaging->term_id, 'order_'.$packaging->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                    ?>
                                                      <div class="col-md-4">
                                                         <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr( $packaging->name ) ?></span>
                                                            <input name="wcfm_data[physical][attributes][pa_packaging][]" data-role="pro_packaging" class="pro_packaging_cls" type="checkbox" value="<?php echo esc_attr( $packaging->term_id)  ?>" 
                                                            <?php 
                                                              if ( isset( $packing_terms[0]->name ) && !empty( $packing_terms[0]->name == $packaging->name ) && $packing_terms[0]->name == $packaging->name ) {
                                                                  echo 'checked';    
                                                                }
                                                              ?>>
                                                            <span class="checkmark"> <span class="checkmark1"></span></span>
                                                            </label>
                                                         </div>
                                                      </div>
                                                <?php }

                                                 elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                   ?>
                                                   <div class="col-md-4">
                                                         <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr( $packaging->name ) ?></span>
                                                            <input name="wcfm_data[physical][attributes][pa_packaging][]" data-role="pro_packaging" class="pro_packaging_cls" type="checkbox" value="<?php echo esc_attr( $packaging->term_id)  ?>" 
                                                            <?php 
                                                              if ( isset( $packing_terms[0]->name ) && !empty( $packing_terms[0]->name == $packaging->name ) && $packing_terms[0]->name == $packaging->name ) {
                                                                  echo 'checked';    
                                                                }
                                                              ?>>
                                                            <span class="checkmark"> <span class="checkmark1"></span></span>
                                                            </label>
                                                         </div>
                                                      </div>
                                                    <?php } } ?>
                                                   <div class="col-md-4">
                                                         <span class="custom_text"> 
                                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img"> 
                                                        
                                                         <input type="text" name="wcfm_data[physical][attributes][pa_packaging][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                      </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="style_main">
                                     <span class="form_label"><?php  echo __( 'Style', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                     <div class="form_gradient_border mb_25">
                                        <div class="check_box_container">
                                           <div class="row m-0">
                                              <div class="col-12 p-0">
                                                 <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                 <div class="divider active"></div>
                                              </div>
                                           </div>
                                           <div class="checkbox_main active">
                                              <div class="row m-0">
                                                 
                                                     <?php
                                                      $styles = get_terms( array(
                                                             'taxonomy' => 'pa_style',
                                                             'hide_empty' => false
                                                         ) );
                                                        foreach( $styles as $style ){ 
                                                          $get_custom_terms = get_term_meta($style->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($style->term_id, 'order_'.$style->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {

                                                          ?>
                                                         <div class="col-md-4">
                                                                <div class="checkbox2">
                                                                        <label class="ets_checkbox">
                                        <span class="check_box_label"><?php  echo esc_attr( $style->name ) ?></span>
                                         <input name="wcfm_data[physical][attributes][pa_style][]" data-role="pro_style" class="pro_style_cls" type="checkbox" value="<?php echo esc_attr( $style->term_id)  ?>" 
                                         <?php 
                                           if ( isset( $style_terms[0]->name ) && !empty( $style_terms[0]->name == $style->name ) && $style_terms[0]->name == $style->name ) {
                                                echo 'checked';
                                            }
                                          ?>>
                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                        </label>
                                                                </div>
                                                                 </div>
                                                         <?php }
                                                          elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                      ?>
                                                      <div class="col-md-4">
                                                                <div class="checkbox2">
                                                                        <label class="ets_checkbox">
                                        <span class="check_box_label"><?php  echo esc_attr( $style->name ) ?></span>
                                         <input name="wcfm_data[physical][attributes][pa_style][]" data-role="pro_style" class="pro_style_cls" type="checkbox" value="<?php echo esc_attr( $style->term_id)  ?>" 
                                         <?php 
                                           if ( isset( $style_terms[0]->name ) && !empty( $style_terms[0]->name == $style->name ) && $style_terms[0]->name == $style->name ) {
                                                echo 'checked';
                                            }
                                          ?>>
                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                        </label>
                                                                </div>
                                                                 </div>
                                                               <?php } } ?>
                                                <div class="col-md-4">
                                                         <span class="custom_text"> 
                                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">
                                                         <input type="text" class="custom_input_check_box" name="wcfm_data[physical][attributes][pa_style][custom]" placeholder="Custom"></span>
                                                      </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                    </div>

                                    <div class="theme_main">
                                    <span class="form_label"><?php  echo __( 'Theme:', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                   <?php
                                                      $arttheme = get_terms( array(
                                                      'taxonomy' => 'pa_theme',
                                                      'hide_empty' => false
                                                      ) );
                                                      foreach( $arttheme as $theme ){ 
                                                        $get_custom_terms = get_term_meta($theme->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($theme->term_id, 'order_'.$theme->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                        ?>
                                                           <div class="col-md-4">
                                                   <div class="checkbox2">
                                                      <label class="ets_checkbox">
                                                      <span class="check_box_label"><?php  echo esc_attr( $theme->name ) ?></span>
                                                      <input name="wcfm_data[physical][attributes][pa_theme][]"data-role="pro_theme" class="pro_theme_cls" type="checkbox" value="<?php echo esc_attr( $theme->term_id )  ?>" 
                                                        <?php
                                                           if ( isset( $theme_terms[0]->name ) && !empty( $theme_terms[0]->name == $theme->name ) && $theme_terms[0]->name == $theme->name ) {
                                                                    echo 'checked';          
                                                            }
                                                        ?>>
                                                      <span class="checkmark"> <span class="checkmark1"></span></span>
                                                      </label>
                                                   </div>
                                                    </div>
                                                   <?php }
                                                   elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                      ?>
                                                      <div class="col-md-4">
                                                   <div class="checkbox2">
                                                      <label class="ets_checkbox">
                                                      <span class="check_box_label"><?php  echo esc_attr( $theme->name ) ?></span>
                                                      <input name="wcfm_data[physical][attributes][pa_theme][]"data-role="pro_theme" class="pro_theme_cls" type="checkbox" value="<?php echo esc_attr( $theme->term_id )  ?>" 
                                                        <?php
                                                           if ( isset( $theme_terms[0]->name ) && !empty( $theme_terms[0]->name == $theme->name ) && $theme_terms[0]->name == $theme->name ) {
                                                                    echo 'checked';          
                                                            }
                                                        ?>>
                                                      <span class="checkmark"> <span class="checkmark1"></span></span>
                                                      </label>
                                                   </div>
                                                    </div>
                                                  <?php } } ?>
                                                       <div class="col-md-4">
                                                   <span class="custom_text">
                                                    <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">  
                                                   <input type="text" name="wcfm_data[physical][attributes][pa_theme][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="textarea_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Description', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush textarea_wrapper m-0">
                                       <div class="textarea_bg_light">
                                        <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                          <textarea name="wcfm_data[physical][description]" id="descriptionphy"  placeholder="Describe Your Artwork" cols="0" rows="10" maxlength="2000"><?php if(  isset(  $product_description  ) && !empty(  $product_description  )  ){ echo $product_description; } ?></textarea>

                                          </div>
                                       </div>
                                    <span class="textarea_note mb_25 show_count">0</span><span class="show_limit">/2000</span>
                                 </div>

                                 <div class="textarea_container">
                                    <label for="" class="form_label"><?php  echo __( 'Keywords', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush textarea_wrapper m-0">
                                       <div class="textarea_bg_light">
                                        <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png' ?>" class="brush_img" alt="img">
                                         <?php foreach ( $keywords  as  $keyword ) {
                                              $all_keywords_name[] = $keyword->name; 
                                             }
                                             ?>
                                          <textarea name="keywords" id="keywords"  placeholder="Separate Product Tags with commas" cols="0" rows="5"><?php $all_keyword = implode(',', $all_keywords_name );echo $all_keyword;?></textarea>
                                       </div>
                                    </div>
                                    <span class="textarea_note mb_25 keyword_show">Maximum 10 keywords</span>
                                 </div>
                                  <div class="btn_submit_form">
                                     <button class="wcfm_submit"><?php  echo  __( 'Submit', 'ets-wcfm-frontendform-add-on' ) ?></button>
                                     <input id="wcfm_submit" type="hidden" name="submit-wcfm-data" value="">

                                  </div>
                              </div>
                          
                           <!-- Digital product form step 3 start here -->
                              
                             
                              <div class="form-card step-3-digital">
                                    <div class="step_form_title_main step_3_title_main">
                                    <div class="step_3_title_icon">
                                       <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/step3_icon.png'  ?>" alt="image" class="img-fluid">
                                    </div>
                                       <span class="step_3_title"><?php  echo __( 'Describe Your Artwork', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    </div>

                                 <div class="input_field_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Title', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush">
                                      <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                       <input type="text" name="wcfm_data[digital][pro_title]" id="Title1" placeholder="Artwork Title"
                                          class="form_input digital_title" value="<?php if( isset(  $product_name  ) && $product_name  ){ echo $product_name; }?>">
                                    </div>
                                 </div>

                                 <div class="classification_main">
                                    <p class="check_box_title"><?php  echo __( 'Classification', 'ets-wcfm-frontendform-add-on' ) ?>:</p>
                                    <span class="form_label"><?php  echo __( 'Category', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                
                                                    <?php 
                                                      $args = array(
                                                         'orderby' => 'name',
                                                         'hierarchical' => 1,
                                                         'taxonomy' => 'product_cat',
                                                         'hide_empty' => 0,
                                                         'parent' => 0,
                                                      );
                                                      $categories = get_categories( $args );
                                                      if ( !empty( $categories ) ) :
                                                      foreach( $categories as $category ) { 
                                                         if ( $category->slug === 'uncategorized' ) {
                                                         continue;
                                                      }
                                                      ?>
                                                      <div class="col-md-4">
                                                     <div class="checkbox2">
                                                         <label class="ets_checkbox">
                                                         <span class="check_box_label"><?php echo esc_attr( $category->name )  ?></span>
                                                <input name="wcfm_data[digital][product_cats][]" class="wcfm_prod_form_check_singal product_category_cls" data-role="product_category" type="checkbox" value="<?php echo esc_attr( $category->term_id )  ?>"
                                                    <?php 
                                                      if ( isset($get_digital_cateogry[0]->name ) && !empty( $get_digital_cateogry[0]->name == $category->name ) && $get_digital_cateogry[0]->name == $category->name ) {
                                                         echo 'checked';
                                                      }
                                                    ?>>
                                                         <span class="checkmark"> <span class="checkmark1"></span> </span>
                                                         </label>
                                                   </div>
                                                    </div>
                                                   <?php  }
                                                      endif;
                                                      ?>
                                               
                                                <div class="col-md-4">
                                                   <span class="custom_text"> <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img"> 
                                                    
                                                   <input type="text" name="wcfm_data[digital][product_cats][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                    <div class="style_main">
                                     <span class="form_label"><?php  echo __( 'Style', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                     <div class="form_gradient_border mb_25">
                                        <div class="check_box_container">
                                           <div class="row m-0">
                                              <div class="col-12 p-0">
                                                 <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                 <div class="divider active"></div>
                                              </div>
                                           </div>
                                           <div class="checkbox_main active">
                                              <div class="row m-0">
                                                 
                                                     <?php
                                                      $styles = get_terms( array(
                                                             'taxonomy' => 'pa_style',
                                                             'hide_empty' => false
                                                         ) );
                                                        foreach( $styles as $style ){ 
                                                          $get_custom_terms = get_term_meta($style->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($style->term_id, 'order_'.$style->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {

                                                          ?>
                                                         <div class="col-md-4">
                                                                <div class="checkbox2">
                                                                        <label class="ets_checkbox">
                                        <span class="check_box_label"><?php  echo esc_attr( $style->name ) ?></span>
                                         <input name="wcfm_data[digital][attributes][pa_style][]" data-role="pro_style" class="pro_style_cls" type="checkbox" value="<?php echo esc_attr( $style->term_id )  ?>" 
                                         <?php 
                                           if ( isset( $digital_style_terms[0]->name ) && !empty( $digital_style_terms[0]->name == $style->name ) && $digital_style_terms[0]->name == $style->name ) {
                                                echo 'checked';
                                            }
                                          ?> >
                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                        </label>
                                                                </div>
                                                                 </div>
                                                         <?php }
                                                         elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                      ?>
                                                      <div class="col-md-4">
                                                                <div class="checkbox2">
                                                                        <label class="ets_checkbox">
                                        <span class="check_box_label"><?php  echo esc_attr( $style->name ) ?></span>
                                         <input name="wcfm_data[digital][attributes][pa_style][]" data-role="pro_style" class="pro_style_cls" type="checkbox" value="<?php echo esc_attr( $style->term_id )  ?>" 
                                         <?php 
                                           if ( isset( $digital_style_terms[0]->name ) && !empty( $digital_style_terms[0]->name == $style->name ) && $digital_style_terms[0]->name == $style->name ) {
                                                echo 'checked';
                                            }
                                          ?> >
                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                        </label>
                                                                </div>
                                                                 </div>
                                                               <?php } } ?>
                                                <div class="col-md-4">
                                                         <span class="custom_text"> 
                                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">                                 
                                                         <input type="text" name="wcfm_data[digital][attributes][pa_style][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                      </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                    </div>

                                    <div class="technics_main_digital">
                                          <span class="form_label"><?php  echo __( 'Artistic Technique', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                          <div class="form_gradient_border mb_25">
                                             <div class="check_box_container">
                                                <div class="row m-0">
                                                   <div class="col-12 p-0">
                                                      <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select the painting Techniques from the multiple Categories', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                      <div class="divider active"></div>
                                                   </div>
                                                </div>
                                                <div class="checkbox_main active">
                                             <div class="row m-0">
                                                <div class="col-md-4">
                                                   <?php
                                                   $artistictechniques = get_terms( array(
                                                      'taxonomy' => 'pa_artistic-techniques',
                                                      'hide_empty' => false
                                                   ) );
                                                   foreach( $artistictechniques as $artistictech ){ 

                                                    ?>
                                                      <div class="checkbox2">
                                                         <label class="ets_checkbox">
                                                         <span class="check_box_label"><?php  echo esc_attr( $artistictech->name ) ?></span>
                                                         <input name="wcfm_data[digital][attributes][pa_artistic-techniques][]" data-role="pro_digi_artist_tech" class="pro_digi_artist_tech_cls" type="checkbox" value="<?php echo esc_attr( $artistictech->term_id)  ?>"
                                                          <?php 
                                                            if ( isset( $digital_artistteq_terms[0]->name ) &&  !empty( $digital_artistteq_terms[0]->name == $artistictech->name ) && $digital_artistteq_terms[0]->name == $artistictech->name ) {
                                                                  echo 'checked';    
                                                            }
                                                          ?>>
                                                         <span class="checkmark"> <span class="checkmark1"></span></span>
                                                         </label>
                                                      </div>
                                                   <?php }
                                                   ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                    </div>

                                  <div class="theme_main">
                                     <span class="form_label"><?php  echo __( 'Theme', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                     <div class="form_gradient_border mb_25">
                                        <div class="check_box_container">
                                           <div class="row m-0">
                                              <div class="col-12 p-0">
                                                 <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                 <div class="divider active"></div>
                                              </div>
                                           </div>
                                           <div class="checkbox_main active">
                                              <div class="row m-0">
                                                 
                                                     <?php
                                                      $arttheme = get_terms( array(
                                                             'taxonomy' => 'pa_theme',
                                                             'hide_empty' => false
                                                         ) );
                                                        foreach( $arttheme as $theme ){ 
                                                          $get_custom_terms = get_term_meta($theme->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta($theme->term_id, 'order_'.$theme->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {
                                                          ?>
                                                         <div class="col-md-4">
                                                                <div class="checkbox2">
                                                                        <label class="ets_checkbox">
                                        <span class="check_box_label"><?php  echo esc_attr( $theme->name ) ?></span>
                                         <input name="wcfm_data[digital][attributes][pa_theme][]" data-role="pro_theme" class="pro_theme" type="checkbox" value="<?php echo esc_attr( $theme->term_id)  ?>"
                                          <?php 
                                            if ( isset( $digital_theme_terms[0]->name ) && !empty( $digital_theme_terms[0]->name == $theme->name ) && $digital_theme_terms[0]->name == $theme->name ) {
                                               echo 'checked';                   
                                             }
                                           ?>>
                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                        </label>
                                                                </div>
                                                                 </div>
                                                         <?php }
                                                         elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {
                                                      ?>
                                                       <div class="col-md-4">
                                                                <div class="checkbox2">
                                                                        <label class="ets_checkbox">
                                        <span class="check_box_label"><?php  echo esc_attr( $theme->name ) ?></span>
                                         <input name="wcfm_data[digital][attributes][pa_theme][]" data-role="pro_theme" class="pro_theme" type="checkbox" value="<?php echo esc_attr( $theme->term_id)  ?>"
                                          <?php 
                                            if ( isset( $digital_theme_terms[0]->name ) && !empty( $digital_theme_terms[0]->name == $theme->name ) && $digital_theme_terms[0]->name == $theme->name ) {
                                               echo 'checked';                   
                                             }
                                           ?>>
                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                        </label>
                                                                </div>
                                                                 </div>
                                                               <?php } } ?>

                                                <div class="col-md-4">
                                                         <span class="custom_text">
                                                         <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_custom" alt="img">  
                                                       
                                                         <input type="text" name="wcfm_data[digital][attributes][pa_theme][custom]" class="custom_input_check_box" placeholder="Custom"></span>
                                                      </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                    </div>  
                                 <div class="subject">
                                    <div class="input_field_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Subject', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush">
                                        <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                          <input type="text" name="wcfm_data[digital][subject]" id="Title1" placeholder=""
                                             class="form_input" value="<?php if ( isset( $digital_subject ) && $digital_subject ){
                                              echo $digital_subject;
                                             }?> ">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="revision">
                                    <div class="input_field_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Revision', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush">
                                          <?php
                                           echo "<select class='form_select revisions mb-10' name='wcfm_data[digital][attributes][pa_revision][]' value='". $digital_revision_terms[0]->name."'>";
                                           echo "<option class='' value=''>Choose the quantity of revisions</option>";
                                             $revisions = get_terms( array(
                                                         'taxonomy' => 'pa_revision',
                                                         'hide_empty' => false
                                             ) );
                                           foreach(  $revisions as $index =>  $revision  ) {
                                               echo '<option value="' . esc_attr( $revision->term_id ) . '"';

                                               if( isset( $digital_revision_terms[0]->term_id ) && $digital_revision_terms[0]->term_id && $digital_revision_terms[0]->term_id == $revision->term_id ) {
                                                        echo "selected";
                                                     }
                                               echo '>' . esc_html( $revision->name ) . '</option>';
                                               }   echo "</select>"; ?>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="figure">
                                    <div class="input_field_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Figures', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                      
                                       <div class="form_gradient_border icon_brush">
                                         <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                          <input type="text" name="wcfm_data[digital][figure]" id="Title1" placeholder=""
                                             class="form_input" value="<?php if ( isset( $digital_figure ) && $digital_figure ){
                                                echo $digital_figure;
                                             }?>">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="source_file">
                                    <div class="input_field_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Source File', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush">

                                           <?php
                                           echo "<select class='form_select sourcetype mb-10' name='wcfm_data[digital][attributes][pa_source-file][]'>";
                                           echo "<option class='' value=''>Choose the format</option>";
                                             $sourceFileTypes = get_terms( array(
                                                         'taxonomy' => 'pa_source-file',
                                                         'hide_empty' => false
                                             ) );
                                           foreach( $sourceFileTypes as $index =>  $sourceFileType ) {
                                               echo '<option value="' . esc_attr( $sourceFileType->term_id ) . '"';
                                               if( isset( $digital_source_terms[0]->term_id ) && $digital_source_terms[0]->term_id && $digital_source_terms[0]->term_id == $sourceFileType->term_id ) {
                                                        echo "selected";
                                                     }

                                               echo '>' . esc_html($sourceFileType->name) . '</option>';
                                               }   echo "</select>"; ?>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="resolution_h">
                                    <div class="input_field_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'High Resolution', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush">
                                                <?php
                                                 echo "<select class='form_select resolution mb-10' name='wcfm_data[digital][attributes][pa_high-resolution][]'>";
                                                 echo "<option class='' value=''>Choose the resolution</option>";
                                                   $resolutions = get_terms( array(
                                                               'taxonomy' => 'pa_high-resolution',
                                                               'hide_empty' => false
                                                   ) );
                                                 foreach( $resolutions as $index =>  $resolution ) {

                                                     echo '<option value="' . esc_attr( $resolution->term_id). '"'  ;
                                                     if( isset( $high_resolution_terms[0]->term_id ) && $high_resolution_terms[0]->term_id && $high_resolution_terms[0]->term_id == $resolution->term_id ) {
                                                        echo "selected";
                                                     }
                                                     echo '>' . esc_html( $resolution->name ) . '</option>';
                                                     }   echo "</select>"; ?>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="background_scene">
                                    <div class="input_field_container">

                                       <label for="Title1" class="form_label"><?php  echo __( 'Background/scene', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush">
                                        <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                          <input type="text" name="wcfm_data[digital][background_scene]" id="" placeholder=""
                                             class="form_input" value="<?php if( isset( $digital_bg_scene ) && $digital_bg_scene ){
                                              echo $digital_bg_scene;
                                             }?>">
                                       </div>
                                    </div>
                                 </div> 

                                 <div class="color_main">
                                    <span class="form_label"><?php  echo __( 'Color', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select from the multiple Categories below', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                              
                                                   <?php
                                                      $colors = get_terms( array(
                                                      'taxonomy' => 'pa_digital-painting-color',
                                                      'hide_empty' => false
                                                      ) );
                                                      foreach( $colors as $color ){ 
                                                        $get_custom_terms = get_term_meta( $color->term_id, 'custom_terms_key', $user_id);
                                                        $get_term_by_admin = get_term_meta( $color->term_id, 'order_'. $color->taxonomy, $user_id);
                                                          
                                                      if($get_custom_terms && $get_custom_terms == $user_id || current_user_can('administrator') ) {

                                                        ?>
                                                           <div class="col-md-4">
                                                   <div class="checkbox2">
                                                      <label class="ets_checkbox">
                                                      <span class="check_box_label"><?php  echo esc_attr( $color->name ) ?></span>
                                                      <input name="wcfm_data[digital][attributes][pa_digital-painting-color][]"data-role="pro_color" class="pro_color_cls" type="checkbox" value="<?php echo esc_attr( $color->term_id)  ?>" 
                                                      <?php 
                                                        if ( isset( $digital_color_terms[0]->name ) && !empty( $digital_color_terms[0]->name == $color->name ) && $digital_color_terms[0]->name == $color->name ) {
                                                                  echo 'checked';      
                                                        }
                                                      ?>>
                                                      <span class="checkmark"> <span class="checkmark1"></span></span>
                                                      </label>
                                                   </div>
                                                    </div>
                                                   <?php }
                                                   elseif ( $get_term_by_admin == '0' || current_user_can('administrator')) {

                                                      ?>
                                                       <div class="col-md-4">
                                                   <div class="checkbox2">
                                                      <label class="ets_checkbox">
                                                      <span class="check_box_label"><?php  echo esc_attr( $color->name ) ?></span>
                                                      <input name="wcfm_data[digital][attributes][pa_digital-painting-color][]"data-role="pro_color" class="pro_color_cls" type="checkbox" value="<?php echo esc_attr( $color->term_id)  ?>" 
                                                      <?php 
                                                        if ( isset( $digital_color_terms[0]->name ) && !empty( $digital_color_terms[0]->name == $color->name ) && $digital_color_terms[0]->name == $color->name ) {
                                                                  echo 'checked';      
                                                        }
                                                      ?>>
                                                      <span class="checkmark"> <span class="checkmark1"></span></span>
                                                      </label>
                                                   </div>
                                                    </div>
                                                  <?php } } ?>
                                                       <div class="col-md-4">
                                                   <span class="custom_text">
                                                    <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'?>" class="brush_custom" alt="img"> 
                                                   <input type="text" class="custom_input_check_box" name="wcfm_data[digital][attributes][pa_digital-painting-color][custom]" placeholder="Custom"></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="full_body">
                                    <div class="input_field_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Full Body', 'ets-wcfm-frontendform-add-on' ) ?></label> 
                                       <div class="form_gradient_border icon_brush">
                                        <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                          <input type="text" name="wcfm_data[digital][full_body]" id="" placeholder=""
                                             class="form_input" value="<?php if( isset( $digital_full_body ) && $digital_full_body ){
                                              echo $digital_full_body;
                                             }?>">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="commercial_use">
                                    <span class="form_label"><?php  echo __( 'Commercial Use', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    <div class="form_gradient_border mb_25">
                                       <div class="check_box_container">
                                          <div class="row m-0">
                                             <div class="col-12 p-0">
                                                <p class="check_box_select_text ets-collapsed"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                <div class="divider active"></div>
                                             </div>
                                          </div>
                                          <div class="checkbox_main active">
                                             <div class="row m-0">
                                                 <?php
                                                        $commercialUse = get_terms( array(
                                                             'taxonomy' => 'pa_commercial-use',
                                                             'hide_empty' => false
                                                         ) );
                                                        foreach( $commercialUse as $comUse ){ ?>
                                                             <div class="col-md-4">
                                                            <div class="checkbox2">
                                                                    <label class="ets_checkbox">
                                                                    <span class="check_box_label"><?php  echo esc_attr( $comUse->name ) ?></span>
                                                                    <input name="wcfm_data[digital][attributes][pa_commercial-use][]"  class="pro_com_use" type="radio" value="<?php echo  esc_attr($comUse->term_id) ?>" 
                                                                    <?php 
                                                                    if ( isset( $digital_commercial_terms[0]->name ) && ! empty( $digital_commercial_terms[0]->name == $comUse->name ) && $digital_commercial_terms[0]->name == $comUse->name ) {
                                                                        echo 'checked';
                                                                      }
                                                                    ?>>
                                                                    <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                    </label>
                                                            </div>
                                                            </div>
                                                         <?php }
                                                    ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="pro_pricing_main">
                                    <div class="input_field_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Price', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush">
                                      
                                           <input type="text" name="wcfm_data[digital][price][regular_price]" id="sale_price_id" placeholder="" class="sale_price_cls" value="<?php if(isset( $product_reguler_price ) && $product_reguler_price ) {
                                            echo $product_reguler_price ;
                                           }?>">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="description_main">
                                    <div class="textarea_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Description', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush textarea_wrapper m-0">
                                          <div class="textarea_bg_light">
                                             <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                             <textarea name="wcfm_data[digital][description]" id="descriptiondigital" placeholder="Describe Your Artwork" cols="0" rows="10" maxlength="2000"><?php if( isset( $product_description ) && !empty( $product_description ) ){ echo $product_description; } ?></textarea>
                                          </div>
                                       </div>
                                       <span class="textarea_note mb_25 show_digital">0</span><span class="show_limit">/2000</span>
                                    </div>
                                 </div>

                                 <div class="question_main">
                                    <div class="textarea_container">
                                       <label for="Title1" class="form_label"><?php  echo __( 'Questions', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                       <div class="form_gradient_border icon_brush textarea_wrapper m-0">
                                          <div class="textarea_bg_light">
                                            <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/brush.png'  ?>" class="brush_img" alt="img">
                                             <textarea name="wcfm_data[digital][questions]" id="questions"   placeholder="Add the questions" cols="0" rows="10" maxlength="2000"><?php if(  isset(  $digital_question  ) && $digital_question  ){ echo $digital_question; }?></textarea>
                                          </div>
                                       </div>
                                       <span class="textarea_note mb_25 show_que_text">0</span><span class="show_limit">/2000</span>
                                    </div>
                                 </div>
                                 
                                 <div class="sample_digital_art_main">
                                       <label for="sample_digital_art" id="sample_art_lbl">
                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/dwonload.png'  ?>" class="img-fluid" alt="img">
                                          <input type="file" id="sample_digital_art" name="pro_sample_digitla_art" class="sample_digital_art">
                                         <?php
                                            // $digital_sample_img = get_post_meta($product_edit_id, ' _digital_product_sample_images', true );
                                            // var_dump($digital_sample_img);
                                         ?>
                                       <span class="attech_refrence"><?php  echo __( 'Attach the reference images', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                       </label>
                                   </div>
                                     <div class="row">
                                     <div class="previwer_samples">
                                     </div>
                                     </div>
                                     <div class="btn_submit_form">
                                          <button class="wcfm_submit"><?php  echo  __( 'Submit', 'ets-wcfm-frontendform-add-on' ) ?></button>
                                         <input id="wcfm_submit" type="hidden" name="submit-wcfm-data" value="">
                                     </div>
                              </div>
                               <button type="button" name="previous" class="previous action-button-previous"
                                  value="Previous">
                               <i class="fa fa-chevron-left Previous_arrow" aria-hidden="true"></i>
                               Previous Step
                               </button>
                        </fieldset>
                                  </form>
                               
                </div>
             </div>
          </div>
      </div>
      </div>
</div>