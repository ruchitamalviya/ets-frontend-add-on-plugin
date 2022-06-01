 <div class="step_form_section">
      <div class="step_form_main_container">
          <div class="container">
          <div class="row justify-content-center">
             <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-8 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                   <h2 class="steps" id="step">Step 1</h2>
                   <h2 id="heading"> <?php echo __('Let’s', 'ets-wcfm-frontendform-add-on') ?><span class="create_text"> <?php echo __('create', 'ets-wcfm-frontendform-add-on') ?></span> <?php echo __('your', 'ets-wcfm-frontendform-add-on') ?> <span
                         class="product_text"><?php echo __('product', 'ets-wcfm-frontendform-add-on') ?></span></h2>
                   <form id="wcfm_vandor_pro_form" class="" method="post" >
                      <input name="action" value="add_transfer" type="hidden">
                      <input type="hidden" name="product_type" value="simple">
                      <ul id="progressbar">
                         <li class="active" id="account"> <span class="step_count">1.</span> <span
                               class="step_count_text"><?php echo __('Choose the Type of the Product', 'ets-wcfm-frontendform-add-on') ?> </span></li>
                         <li id="personal"><span class="step_count">2.</span> <span class="step_count_text"> <?php echo __('Upload Your Product', 'ets-wcfm-frontendform-add-on') ?>
                              </span></li>
                         <li id="payment"><span class="step_count">3.</span> <span class="step_count_text"><?php echo __('Fill the
                               Details', 'ets-wcfm-frontendform-add-on') ?></span></li>
                      </ul>
                      <div class="progress">
                         <div class="progress-bar progress-bar-striped " role="progressbar" aria-valuemin="0"
                            aria-valuemax="100"></div>
                      </div>

                      <fieldset class="step-1">
                           <div class="form-card">
                            <div class="step_form_title_main">
                               <p class="step_form_title"><?php echo __('Is this a ready product, or a service you wish to
                                  provide?', 'ets-wcfm-frontendform-add-on') ?></p>
                            </div>

                            <div class="circle_main">
                                 <label>
                                    <input type="radio" value="physical" name="pro_type" class="type_of_product" />
                                       <div class="Physical">

                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/exhibition-gallery.png'  ?>" alt="img">
                                          <span><?php echo __('Physical', 'ets-wcfm-frontendform-add-on') ?></span>
                                       </div>
                                    </label>
                                     <label>
                                    <input type="radio" value="digital" name="product_type" class="type_of_product" />
                                       <div class="Digital">
                                          <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/web-design-brush.png'  ?>" alt="img">
                                          <span><?php echo __('Digital', 'ets-wcfm-frontendform-add-on') ?></span>
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
                               <p class="step_form_title"></p>
                               <p class="step_form_sub_title"><?php  echo __( 'Is this a ready product, or a service you wish to provide?', 'ets-wcfm-frontendform-add-on' ) ?></p>
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
                                          <img src="1" class="single_img_selected">
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
                                      <div class="col-md-3 col-6 p-360">
                                         <div class="image_container plus_icon_box">
                                          <img src="1" class="single_img_selected">
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
                                     <?php  echo __( 'Describe Your Artwork', 'ets-wcfm-frontendform-add-on' ) ?>
                                 </div>

                                 <div class="input_field_container">
                                  <label for="ptitle" class="form_label"><?php  echo __( 'Title:', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                  <div class="form_gradient_border icon_brush">
                                     <input type="text" name="pro_title[physical]" id="ptitle" placeholder="Artwork Title"
                                        class="form_input">
                                  </div>
                                  <div class="row m-0">
                                     <div class="col-md-6 p-0">
                                        <label for="Year" class="form_label"><?php  echo __( 'Year of creation:', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                        <div class="form_gradient_border ">
                                           <?php
                                        echo "<select class='form_select quantity mb-10' name='wcfm_attribute_texonomy'>";
                                        echo "<option class='' value=''>Choose the quantity of revisions</option>";
                                          $yeaderOfcreation = get_terms( array(
                                                      'taxonomy' => 'pa_year-of-creation',
                                                      'hide_empty' => false
                                          ) );
                                        foreach($yeaderOfcreation as $index =>  $year) {
                                            echo '<option value="' . esc_attr($year->term_id) . '"';
                                            echo '>' . esc_html($year->name) . '</option>';
                                            }   echo "</select>"; ?>
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
                                             <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
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
                                                   if ( !empty($categories) ) :
                                                   foreach( $categories as $category ) { 

                                                   if ($category->slug === 'uncategorized') {
                                                   continue;
                                                   }

                                                  $category_tax_map = get_option('ets_wc_category_tax_mapping');

                                                  $category_tax_map = array_flip($category_tax_map);
                                                  $termClass = '';
                                                  if (array_key_exists($category->term_id, $category_tax_map)) {
                                                      $termClass =  $category_tax_map[$category->term_id];
                                                  }
     

                                                   ?>
                                                    <div class="col-md-4">
                                                <div class="checkbox2">
                                                   <label class="ets_checkbox">
                                                   <span class="check_box_label"><?php echo esc_attr($category->name)  ?></span>
                                                   <input type="checkbox"  data-catid="<?php echo esc_attr($category->term_id)  ?>" data-term_cls="attribute_id_<?php echo $termClass;  ?>" name="product_cats[]" class="wcfm_prod_form_check_singal product_category_cls" data-role="product_category"  value="<?php echo esc_attr($category->term_id)  ?>">
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
                                             <input type="text" class="custom_input_check_box" placeholder="Custom"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                                     <?php
                                    $attributes = wc_get_attribute_taxonomies();
                                    foreach ($attributes as $attribute) {
                                        $attribute->attribute_terms = get_terms(array(
                                            'taxonomy' => 'pa_'.$attribute->attribute_name,
                                            'hide_empty' => false,
                                        ));
                                        ?>

                                    <div class="technics_main attribute_id_<?php  echo esc_attr($attribute->attribute_id) ?>" data-attrid="<?php echo esc_attr($attribute->attribute_id)  ?>">
                                 <span class="form_label physical_pro_tech"><?php  echo esc_html($attribute->attribute_label) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                              <?php 
                                              $termsOfAttr = $attribute->attribute_terms;
                                              if ($attribute->attribute_terms) {
                                              foreach($termsOfAttr as $attributeTerm){ ?>
                                                <div class="col-md-4">
                                                 <div class="checkbox2">
                                                         <label class="ets_checkbox">
                                                         <span class="check_box_label"><?php  echo esc_attr($attributeTerm->name ) ?></span>
                                                         <input class="technic_input_cls" type="checkbox" value="<?php echo esc_attr( $attributeTerm->term_id)  ?>">
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
                                                 <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                                 <div class="divider"></div>
                                              </div>
                                           </div>
                                           <div class="checkbox_main">
                                              <div class="row m-0">
                                                 <div class="col-md-4">
                                                    <?php
                                                        $paSOS = get_terms( array(
                                                             'taxonomy' => 'pa_support-or-surface',
                                                             'hide_empty' => false
                                                         ) );
                                                        foreach($paSOS as $support){ 

                                                         ?>
                                                            <div class="checkbox2">
                                                        <label class="ets_checkbox">
                                                        <span class="check_box_label"><?php  echo esc_attr($support->name) ?></span>
                                                        <input name="product_support[]" data-role="product_support" class="product_support_cls" type="checkbox" value="<?php echo esc_attr( $support->slug) ?>">
                                                        <span class="checkmark"> <span class="checkmark1"></span></span>
                                                        </label>
                                                </div>
                                                         <?php }
                                                    ?>
                                                         

                                                 </div>
                                                 <div class="col-md-4">
                                                    <span class="custom_text">
                                                    <input type="text" class="custom_input_check_box" placeholder="Custom"></span>
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
                                               <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                               <div class="divider"></div>
                                            </div>
                                         </div>
                                         <div class="checkbox_main">
                                            <div class="row m-0">
                                               <div class="col-md-4">
                                                     <?php
                                                     $pa_display_attrs = get_terms( array(
                                                      'taxonomy' => 'pa_display',
                                                      'hide_empty' => false
                                                      ) );
                                                     foreach($pa_display_attrs as $displayattr){ ?>
                                                         <div class="checkbox2">
                                                                 <label class="ets_checkbox">
                                                                 <span class="check_box_label"><?php  echo esc_attr($displayattr->name ) ?></span>
                                                                 <input name="pro_display[]" data-role="pro_display" class="pro_display_attr" type="checkbox" value="<?php echo esc_attr( $displayattr->slug)  ?>">
                                                                 <span class="checkmark"> <span class="checkmark1"></span></span>
                                                                 </label>
                                                         </div>
                                                      <?php }
                                                 ?>
                                               </div>
                                                <div class="col-md-4">
                                                  <span class="custom_text"> 
                                                  <input type="text" class="custom_input_check_box" placeholder="Custom"></span>
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
                                               <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                               <div class="divider"></div>
                                            </div>
                                         </div>
                                         <div class="checkbox_main">
                                            <div class="row m-0">
                                              <?php
                                                     $framingAttrs = get_terms( array(
                                                          'taxonomy' => 'pa_framing',
                                                          'hide_empty' => false
                                                      ) );
                                                     foreach($framingAttrs as $framingAttr){ ?>
                                                          <div class="col-md-4">
                                                         <div class="checkbox2">
                                                                 <label class="ets_checkbox">
                                                                 <span class="check_box_label"><?php  echo esc_attr($framingAttr->name ) ?></span>
                                                                 <input name="pro_framing" class="displayattr" type="radio" value="<?php echo esc_attr( $framingAttr->slug)  ?>">
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

                              <div class="fram_type_main">
                                 <span class="form_label"><?php  echo __( 'Frame type', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                             <?php
                                                $frametype = get_terms( array(
                                                'taxonomy' => 'pa_frame-type',
                                                'hide_empty' => false
                                                ) );
                                                foreach($frametype as $ftype){ ?>
                                             <div class="col-md-4">
                                                <div class="checkbox2">
                                                   <label class="ets_checkbox">
                                                   <span class="check_box_label"><?php  echo esc_attr($ftype->name ) ?></span>
                                                   <input name="frame_type[]" data-role="pro_frame_type" class="pro_frame_type_cls" type="checkbox" value="<?php echo esc_attr( $ftype->slug)  ?>">
                                                   <span class="checkmark"> <span class="checkmark1"></span></span>
                                                   </label>
                                                </div>
                                             </div>
                                             <?php }
                                                ?>
                                             <div class="col-md-4">
                                                <span class="custom_text"> 
                                                <input type="text" class="custom_input_check_box" placeholder="Custom"></span>
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
                                        <label for="Title1" class="form_label">Height</label>
                                        <div class="form_gradient_border icon_brush">
                                           <input type="text" name="height" id="Title1" placeholder="Artwork Title"
                                              class="form_input">
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 pr-md-0 p_mobile_0">
                                     <div class="input_field_container">
                                        <label for="Title1" class="form_label">Width</label>
                                        <div class="form_gradient_border icon_brush">
                                           <input type="text" name="width" id="" placeholder="Artwork Title"
                                              class="form_input">
                                        </div>
                                     </div>
                                  </div>
                               </div>

                               <div class="row m-0">
                                  <div class="col-md-6 pl-md-0 p_mobile_0">
                                     <div class="input_field_container">
                                        <label for="" class="form_label">Thickness</label>
                                        <div class="form_gradient_border icon_brush">
                                           <input type="text" name="thickness" id="" placeholder="Artwork Title"
                                              class="form_input">
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 pr-md-0 p_mobile_0">
                                     <div class="input_field_container">
                                        <label for="" class="form_label">Weight</label>
                                        <div class="form_gradient_border icon_brush">
                                           <input type="text" name="weight" id="" placeholder="Artwork Title"
                                              class="form_input">
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
                                              <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                              <div class="divider"></div>
                                           </div>
                                        </div>
                                        <div class="checkbox_main">
                                           <div class="row m-0">
                                            <?php
                                                  $orignalPeace = get_terms( array(
                                                       'taxonomy' => 'pa_original-piece',
                                                       'hide_empty' => false
                                                   ) );
                                                  foreach($orignalPeace as $orignalItem){ ?>
                                                       <div class="col-md-4">
                                                          <div class="checkbox2">
                                                                  <label class="ets_checkbox">
                                                                  <span class="check_box_label"><?php  echo esc_attr($orignalItem->name ) ?></span>
                                                                  <input data-role="" name="is_orignal_piece" class="" type="radio" value="<?php echo esc_attr( $orignalItem->slug)  ?>">
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

                                      <span class="price_note mb_25"><?php  echo __( '*All original pieces must include signature, and certificate of authenticity.', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                     <div class="row m-0">
                                        <div class="col-md-6 p-0">
                                           <label for="pro_price" class="form_label"><?php  echo __( 'Original piece Price without shipping', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                           <div class="form_gradient_border icon_brush">
                                              <input type="text" name="" id="pro_price" placeholder="" class="form_input">
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
                                              <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                              <div class="divider"></div>
                                           </div>
                                        </div>
                                        <div class="checkbox_main">
                                           <div class="row m-0">
                                            <?php
                                            $reproductions = get_terms( array(
                                                       'taxonomy' => 'pa_reproduction',
                                                       'hide_empty' => false
                                                   ) );
                                                  foreach($reproductions as $reproduction){ ?>
                                                       <div class="col-md-4">
                                                          <div class="checkbox2">
                                                                  <label class="ets_checkbox">
                                                                  <span class="check_box_label"><?php  echo esc_attr($reproduction->name ) ?></span>
                                                                  <input name="pro_reproduction" class="reproductions" type="radio" value="<?php echo esc_attr( $reproduction->slug)  ?>">
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

                              <div class="art_type">
                                 <span class="form_label">Type</span>
                                  <div class="form_gradient_border mb_25">
                                     <div class="check_box_container">
                                        <div class="row m-0">
                                           <div class="col-12 p-0">
                                              <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                              <div class="divider"></div>
                                           </div>
                                        </div>
                                        <div class="checkbox_main">
                                           <div class="row m-0">
                                             <?php
                                            $paarttype = get_terms( array(
                                                 'taxonomy' => 'pa_art-type',
                                                 'hide_empty' => false
                                             ) );
                                            foreach($paarttype as $arttype){ ?>
                                                 <div class="col-md-4">
                                                    <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr($arttype->name ) ?></span>
                                                            <input name="pro_art_type[]" data-role="pro_art_type" class="pro_art_type_cls" type="checkbox" value="<?php echo esc_attr( $arttype->slug)  ?>">
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
                                  
                              <div class="row m-0 price">
                                  <div class="col-md-6 p-0">
                                     <label for="Title1" class="form_label"><?php  echo __( 'Price', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                     <div class="form_gradient_border icon_brush">
                                        <input type="text" name="price[physical][regular_price]" id="sale_price_id" placeholder="" class="sale_price_cls">
                                     </div>
                                  </div>
                              </div>

                              <div class="input_field_container">
                                  <p class="check_box_title"><?php  echo __( 'Shipping:', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                  <label for="Title1" class="form_label"><?php  echo __( 'Shipping services (ex: DHL, FedEx)', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                  <div class="form_gradient_border icon_brush">
                                     <input type="text" name="" id="Title1" placeholder="" class="form_input">
                                  </div>
                              </div>


                              <div class="shippingLocations">
                                 <span class="form_label"><?php  echo __( 'Shipping locations', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select locations', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                                <?php
                                                $shippingLocations = get_terms( array(
                                                'taxonomy' => 'pa_shipping-locations',
                                                'hide_empty' => false
                                                ) );
                                                   foreach($shippingLocations as $shippingLocation){ ?>
                                                      <div class="col-md-4">
                                                         <div class="checkbox2">
                                                            <label class="ets_checkbox">
                                                            <span class="check_box_label"><?php  echo esc_attr($shippingLocation->name ) ?></span>
                                                            <input name="pro_ship_location[]" data-role="pro_ship_location" class="pro_ship_location_cls" type="checkbox" value="<?php echo esc_attr( $shippingLocation->slug)  ?>">
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


                              <div class="packaging_main">
                                 <span class="form_label"><?php  echo __( 'Packaging', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                             <?php
                                                $proPackaging = get_terms( array(
                                                'taxonomy' => 'pa_packaging',
                                                'hide_empty' => false
                                                ) );
                                                foreach($proPackaging as $packaging){ ?>
                                                   <div class="col-md-4">
                                                      <div class="checkbox2">
                                                         <label class="ets_checkbox">
                                                         <span class="check_box_label"><?php  echo esc_attr($packaging->name ) ?></span>
                                                         <input name="pro_packaging[]" data-role="pro_packaging" class="pro_packaging_cls" type="checkbox" value="<?php echo esc_attr( $packaging->slug)  ?>">
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



                              <div class="style_main">
                                  <span class="form_label"><?php  echo __( 'Style', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                  <div class="form_gradient_border mb_25">
                                     <div class="check_box_container">
                                        <div class="row m-0">
                                           <div class="col-12 p-0">
                                              <p class="check_box_select_text"><?php  echo __( 'Select from the multiple Categories below', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                              <div class="divider"></div>
                                           </div>
                                        </div>
                                        <div class="checkbox_main">
                                           <div class="row m-0">
                                              <div class="col-md-4">
                                                  <?php
                                                   $styles = get_terms( array(
                                                          'taxonomy' => 'pa_style',
                                                          'hide_empty' => false
                                                      ) );
                                                     foreach($styles as $style){ ?>
                                                             <div class="checkbox2">
                                                                     <label class="ets_checkbox">
                                     <span class="check_box_label"><?php  echo esc_attr($style->name ) ?></span>
                                      <input name="pro_style[]" data-role="pro_style" class="pro_style_cls" type="checkbox" value="<?php echo esc_attr( $style->slug)  ?>">
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
                                 <span class="form_label"><?php  echo __( 'Theme:', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select from the multiple Categories below', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                             <div class="col-md-4">
                                                <?php
                                                   $arttheme = get_terms( array(
                                                   'taxonomy' => 'pa_theme',
                                                   'hide_empty' => false
                                                   ) );
                                                   foreach($arttheme as $theme){ ?>
                                                <div class="checkbox2">
                                                   <label class="ets_checkbox">
                                                   <span class="check_box_label"><?php  echo esc_attr($theme->name ) ?></span>
                                                   <input name="pro_theme[]"data-role="pro_theme" class="pro_theme_cls" type="checkbox" value="<?php echo esc_attr( $theme->slug)  ?>">
                                                   <span class="checkmark"> <span class="checkmark1"></span></span>
                                                   </label>
                                                </div>
                                                <?php }
                                                   ?>
                                                <span class="custom_text">
                                                <input type="text" class="custom_input_check_box" placeholder="Custom"></span>
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
                                       <textarea name="description[physical]" id="description" placeholder="Describe Your Artwork" cols="0" rows="10"></textarea>
                                       </div>
                                    </div>
                                 <span class="textarea_note mb_25">0 / 2000</span>
                              </div>

                              <div class="textarea_container">
                                 <label for="" class="form_label"><?php  echo __( 'Keywords', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                 <div class="form_gradient_border icon_brush textarea_wrapper m-0">
                                    <div class="textarea_bg_light">
                                       <textarea name="keywords" id="keywords" placeholder="Separate Product Tags with commas" cols="0" rows="5"></textarea>
                                    </div>
                                 </div>
                                 <span class="textarea_note mb_25">0 / 2000</span>
                              </div>
                               <div class="btn_submit_form">
                                  <!-- <button class="wcfm_submit"></button> -->
                                  <input id="wcfm_submit" type="submit" name="submit-wcfm-data" value="<?php  echo  __( 'Submit', 'ets-wcfm-frontendform-add-on' ) ?>">
                               </div>
                           </div>
                           
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
                                    <input type="text" name="pro_title[digital]" id="Title1" placeholder="Artwork Title"
                                       class="form_input">
                                 </div>
                              </div>

                              <div class="classification_main">
                                 <p class="check_box_title"><?php  echo __( 'Classification', 'ets-wcfm-frontendform-add-on' ) ?>:</p>
                                 <span class="form_label"><?php  echo __( 'Category', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select the Category', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
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
                                                   if ( !empty($categories) ) :
                                                   foreach( $categories as $category ) { 
                                                      if ($category->slug === 'uncategorized') {
                                                      continue;
                                                   }
                                                   ?>
                                                   <div class="col-md-4">
                                                  <div class="checkbox2">
                                                      <label class="ets_checkbox">
                                                      <span class="check_box_label"><?php echo esc_attr($category->name)  ?></span>
                                                      <input name="" class="wcfm_prod_form_check_singal product_category_cls" data-role="product_category" type="checkbox" value="<?php echo esc_attr($category->term_id)  ?>">
                                                      <span class="checkmark"> <span class="checkmark1"></span> </span>
                                                      </label>
                                                </div>
                                                 </div>
                                                <?php  }
                                                   endif;
                                                   ?>
                                            
                                             <div class="col-md-4">
                                                <span class="custom_text"> 
                                                <input type="text" class="custom_input_check_box" placeholder="Custom"></span>
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
                                              <p class="check_box_select_text"><?php  echo __( 'Select from the multiple Categories below', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                              <div class="divider"></div>
                                           </div>
                                        </div>
                                        <div class="checkbox_main">
                                           <div class="row m-0">
                                              <div class="col-md-4">
                                                  <?php
                                                   $styles = get_terms( array(
                                                          'taxonomy' => 'pa_style',
                                                          'hide_empty' => false
                                                      ) );
                                                     foreach($styles as $style){ ?>
                                                             <div class="checkbox2">
                                                                     <label class="ets_checkbox">
                                                                     <span class="check_box_label"><?php  echo esc_attr($style->name) ?></span>
                                                           <input name="pro_style[]" data-role="pro_style" class="pro_style_cls" type="checkbox" value="<?php echo esc_attr( $style->slug)  ?>">
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


                                 <div class="technics_main">
                                 <span class="form_label"><?php  echo __( 'Artistic Technique', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select the painting Techniques from the multiple Categories', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                             <div class="col-md-4">
                                                <div class="checkbox2">
                                                   <label class="ets_checkbox">
                                                   <span class="check_box_label">Acrylic</span>
                                                   <input type="checkbox" checked="checked">
                                                   <span class="checkmark"> <span class="checkmark1"></span> </span>
                                                   </label>
                                                </div>
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
                                             <p class="check_box_select_text"><?php  echo __( 'Select from the multiple Categories below', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                             <div class="col-md-4">
                                                <?php
                                                   $arttheme = get_terms( array(
                                                   'taxonomy' => 'pa_theme',
                                                   'hide_empty' => false
                                                   ) );
                                                   foreach($arttheme as $theme){ ?>
                                                <div class="checkbox2">
                                                   <label class="ets_checkbox">
                                                   <span class="check_box_label"><?php  echo esc_attr($theme->name) ?></span>
                                                     <input name="pro_theme[]"data-role="pro_theme" class="pro_theme_cls" type="checkbox" value="<?php echo esc_attr( $theme->slug)  ?>">
                                                   <span class="checkmark"> <span class="checkmark1"></span></span>
                                                   </label>
                                                </div>
                                                <?php }
                                                   ?>
                                                <span class="custom_text">
                                                <input type="text" class="custom_input_check_box" placeholder="Custom"></span>
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
                                       <input type="text" name="Title" id="Title1" placeholder=""
                                          class="form_input">
                                    </div>
                                 </div>
                              </div>

                              <div class="revision">
                                 <div class="input_field_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Revision', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush">
                                       <?php
                                        echo "<select class='form_select revisions mb-10' name='wcfm_attribute_texonomy'>";
                                        echo "<option class='' value=''>Choose the quantity of revisions</option>";
                                          $revisions = get_terms( array(
                                                      'taxonomy' => 'pa_revision',
                                                      'hide_empty' => false
                                          ) );
                                        foreach($revisions as $index =>  $revision) {
                                            echo '<option value="' . esc_attr($revision->term_id) . '"';
                                            echo '>' . esc_html($revision->name) . '</option>';
                                            }   echo "</select>"; ?>
                                    </div>
                                 </div>
                              </div>

                              <div class="figure">
                                 <div class="input_field_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Figures', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush">
                                       <input type="text" name="Title" id="Title1" placeholder=""
                                          class="form_input">
                                    </div>
                                 </div>
                              </div>

                              <div class="source_file">
                                 <div class="input_field_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Source File', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush">

                                        <?php
                                        echo "<select class='form_select sourcetype mb-10' name='wcfm_attribute_texonomy'>";
                                        echo "<option class='' value=''>Choose the format</option>";
                                          $sourceFileTypes = get_terms( array(
                                                      'taxonomy' => 'pa_source-file',
                                                      'hide_empty' => false
                                          ) );
                                        foreach($sourceFileTypes as $index =>  $sourceFileType) {
                                            echo '<option value="' . esc_attr($sourceFileType->term_id) . '"';
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
                                              echo "<select class='form_select resolution mb-10' name='wcfm_attribute_texonomy'>";
                                              echo "<option class='' value=''>Choose the resolution</option>";
                                                $resolutions = get_terms( array(
                                                            'taxonomy' => 'pa_high-resolution',
                                                            'hide_empty' => false
                                                ) );
                                              foreach($resolutions as $index =>  $resolution) {
                                                  echo '<option value="' . esc_attr($resolution->term_id) . '"';
                                                  echo '>' . esc_html($resolution->name) . '</option>';
                                                  }   echo "</select>"; ?>
                                   
                                    </div>
                                 </div>
                              </div>

                              <div class="background_scene">
                                 <div class="input_field_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Background/scene', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush">
                                       <input type="text" name="Title" id="Title1" placeholder=""
                                          class="form_input">
                                    </div>
                                 </div>
                              </div>

                              <div class="color_main">
                                 <span class="form_label"><?php  echo __( 'Color', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select from the multiple Categories below', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                             <div class="col-md-4">

                                               <?php
                                                   $colors = get_terms( array(
                                                   'taxonomy' => 'pa_digital-painting-color',
                                                   'hide_empty' => false
                                                   ) );
                                                   foreach($colors as $color){ ?>
                                                <div class="checkbox2">
                                                   <label class="ets_checkbox">
                                                   <span class="check_box_label"><?php  echo esc_attr($color->name) ?></span>
                                                   <input name="pro_colors[]"data-role="pro_color" class="pro_color_cls" type="checkbox" value="<?php echo  esc_attr($color->slug) ?>">
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

                              <div class="full_body">
                                 <div class="input_field_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Full Body', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush">
                                       <input type="text" name="Title" id="Title1" placeholder=""
                                          class="form_input">
                                    </div>
                                 </div>
                              </div>

                              <div class="commercial_use">
                                 <span class="form_label"><?php  echo __( 'Commercial Use', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                 <div class="form_gradient_border mb_25">
                                    <div class="check_box_container">
                                       <div class="row m-0">
                                          <div class="col-12 p-0">
                                             <p class="check_box_select_text"><?php  echo __( 'Select', 'ets-wcfm-frontendform-add-on' ) ?></p>
                                             <div class="divider"></div>
                                          </div>
                                       </div>
                                       <div class="checkbox_main">
                                          <div class="row m-0">
                                              <?php
                                                     $commercialUse = get_terms( array(
                                                          'taxonomy' => 'pa_commercial-use',
                                                          'hide_empty' => false
                                                      ) );
                                                     foreach($commercialUse as $comUse){ ?>
                                                          <div class="col-md-4">
                                                         <div class="checkbox2">
                                                                 <label class="ets_checkbox">
                                                                 <span class="check_box_label"><?php  echo esc_attr($comUse->name) ?></span>
                                                                 <input name="is_pro_com_use"  class="pro_com_use" type="radio" value="<?php echo  esc_attr($comUse->slug) ?>">
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

                              <div class="full_body">
                                 <div class="input_field_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Price', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush">
                                        <input type="text" name="price[digital][regular_price]" id="sale_price_id" placeholder="" class="sale_price_cls">
                                    </div>
                                 </div>
                              </div>

                              <div class="description_main">
                                 <div class="textarea_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Description', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush textarea_wrapper m-0">
                                       <div class="textarea_bg_light">
                                          <textarea name="description[digital]" id="description" placeholder="Describe Your Artwork" cols="0" rows="10"></textarea>
                                       </div>
                                    </div>
                                    <span class="textarea_note mb_25">0 / 2000</span>
                                 </div>
                              
                              </div>

                              <div class="question_main">
                                 <div class="textarea_container">
                                    <label for="Title1" class="form_label"><?php  echo __( 'Questions', 'ets-wcfm-frontendform-add-on' ) ?></label>
                                    <div class="form_gradient_border icon_brush textarea_wrapper m-0">
                                       <div class="textarea_bg_light">
                                          <textarea name="questions" id="questions" placeholder="Add the questions" cols="0" rows="10"></textarea>
                                       </div>
                                    </div>
                                    <span class="textarea_note mb_25">0 / 2000</span>
                                 </div>
                              </div>
                              
                              <div class="sample_digital_art_main">
                                    <label for="sample_digital_art" id="sample_art_lbl">
                                       <img src="<?php echo ETS_WCFM_PLUGIN_URL.'assets/img/step3_icon.png'  ?>" class="img-fluid" alt="img">
                                       <input type="file" id="sample_digital_art" name="pro_sample_digitla_art" class="sample_digital_art">
                                    <span class=""><?php  echo __( 'Attach the reference images', 'ets-wcfm-frontendform-add-on' ) ?></span>
                                    </label>
                                </div>
                                  <div class="row">
                                  <div class="previwer_samples">

                                  </div>
                                  </div>
                                  <div class="btn_submit_form">
                                     
                                      <input id="wcfm_submit" type="submit" name="submit-wcfm-data" value="<?php  echo  __( 'Submit', 'ets-wcfm-frontendform-add-on' ) ?>">
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