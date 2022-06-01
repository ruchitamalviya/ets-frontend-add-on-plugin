   <?php
    $attrd = isset( $_GET['edit'] ) ? absint( $_GET['edit'] ) : 0;
                $value = '';
                $category_tax_map = get_option('ets_wc_category_tax_mapping');
                if ( $attrd && $category_tax_map) {
                    $category_tax_map = get_option('ets_wc_category_tax_mapping');
                    if ( array_key_exists($attrd, $category_tax_map) ) {
                        $value = $category_tax_map[$attrd];
                    }
                }
            ?>

                 <?php 
                    $args = array(
                        'orderby' => 'name',
                        'hierarchical' => 1,
                        'taxonomy' => 'product_cat',
                        'hide_empty' => 0,
                        'parent' => 0,
                    );
                    $categories = get_categories($args);
                    ?>
                <div class="form-field">
                 <tr class="additional-f">
                    <th scope="row" valign="top">
                        <label for="wcfm-attribute-texonomy"><?php echo __('Attribute Category', 'ets-wcfm-frontendform-add-on') ?></label>
                    </th>
                    <td>
                        <?php 
                            echo "<select class='catname mb-10' name='wcfm_attribute_texonomy'>";
                            echo "<option class='' value=''>Select Category</option>";

                            foreach($categories as $index =>  $category) {

                                if ( $category->slug === 'uncategorized' ){
                                    continue;
                                }
                                echo '<option value="' . esc_attr($category->term_id) . '"';
                                    if ($category->term_id == $value) {
                                        echo 'selected';
                                    }

                                echo '>' . esc_html($category->name) . '</option>';
                                }   echo "</select>"; ?>
                    </td>
                </tr>
                </div>