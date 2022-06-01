jQuery(function(){
	let etsWcfmJsManager = {
		validateSteps: {
			step1:{
				entity:{
					productType:false,
				},
				state:false,
			},
			step2:{
				entity:{
				},
				state:true,
			},
			step3:{
				entity:{
					productTitle:false,
				},
				state:false,
			},
		},
		data: {
			step1: {
				variables: {

				}
			},
			step2: {
				variables: {
					mediaIds:[]
				}

			},
			step3: {
				variables: {
						digitalProMediaIds:[]
				},
			},
		},

		setResetValidation: function(step)
		{
				let proType = jQuery('.type_of_product:checked').val();

				if( step == 1  ) {
					if ( proType ) {
							etsWcfmJsManager.validateSteps.step1.entity.productType = true;
						
					} else {
						etsWcfmJsManager.validateSteps.step1.entity.productType = false;
						alert('Please Select Product Type');
					}
				} else if ( step == 2 ){
					etsWcfmJsManager.validateSteps.step2.state == true;
				} else if ( step == 3 )
				{
						let title = ''; 
						if( proType == 'physical' ) {
							title = jQuery.trim(jQuery('.physical_title').val());
							if ( title ) {
								etsWcfmJsManager.validateSteps.step3.entity.productTitle = true;
							
							} else {
										etsWcfmJsManager.validateSteps.step3.entity.productTitle ==false;
							}
						} else if( proType == 'digital' ) {
							let title = jQuery.trim(jQuery('.digital_title').val());
								if ( title ) {
									etsWcfmJsManager.validateSteps.step3.entity.productTitle =true;
								} else {
									etsWcfmJsManager.validateSteps.step3.entity.productTitle = false;
								}
						}
				}
				etsWcfmJsManager.ValidateForm();
		},

		ValidateForm: function(){
			if ( etsWcfmJsManager.validateSteps.step1.entity.productType ) {
					etsWcfmJsManager.validateSteps.step1.state = true;
			} else {
					etsWcfmJsManager.validateSteps.step1.state = false;
			}

			if ( etsWcfmJsManager.validateSteps.step3.entity.productTitle ) {
					etsWcfmJsManager.validateSteps.step3.state = true;	
			} else {
					etsWcfmJsManager.validateSteps.step3.state = false;	
			}
		},

		displayErrorMessage: function(){
			
		},

		imagesFiller: function(){
			let imgIdsArray = etsWcfmJsManager.data.step2.variables.mediaIds;
			jQuery(".previwer").html('');
			let imageTypeLbl = '';
			let classIs = '';
			let imageSelectedArr = [];
			let totalImages = jQuery(imgIdsArray).length; 

			jQuery.each( imgIdsArray, function(key,val) {
				if ( key == 0 )  {
					imageTypeLbl = 'Main photo';
					 classIs = 'main_photo';
				} else {
					imageTypeLbl = 'Set as a main photo';
					 classIs = 'to_be_main';
				}
				if ( key >= 8 )  {
					return false;
				} 
				else if ( key <= 8 ) {
					jQuery(".previwer").append('<div class="col-md-3 col-6 p-360 img-card">\
                                   <div class="image_container">\
                                   <input type="hidden" name="wcfm_data[productImages][]" value="'+val.mediaid+'">\
                                      <i data-mediaid="'+val.mediaid+'" class="fa fa-times delete_icon_image" aria-hidden="true"></i>\
                                      <img src="'+val.url+'" alt="" class="img-fluid">\
                                   </div><span data-index='+key+' class="image_title pro_image_type '+classIs+'">'+imageTypeLbl+'</span>\
                                </div>');
				} else {
					jQuery('.image_error').html("Only 8 images are allowed");
				}
				
			});
			
			if ( totalImages <= 8 )	{ 
				let remaining =  ( 8 - totalImages );

				if ( remaining <= 8 ) {
				jQuery('.placeholders').html('');
					for ( let i = 1; i <= remaining; i++ ) {
							jQuery(".previwer").last().append('<div class="col-md-3 col-6 p-360">\
	                                               <div class="image_container plus_icon_box">\
	                                                <img src="1" class="single_img_selected">\
	                                                  <i class="fa fa-plus plus-icon" aria-hidden="true"></i>\
	                                               </div>\
	                                            </div>');			
					}
				} 
			} else {
				jQuery('.image_error').html("Only 8 images are allowed");
			}	
		},


		sampleImageFillerDigitalProduct: function(){

				let simgIdsArray = etsWcfmJsManager.data.step3.variables.digitalProMediaIds;
				jQuery(".previwer_samples").html('');
				jQuery.each(simgIdsArray, function(key,val) {
					jQuery(".previwer_samples").append('<div class="sample_image_div col-md-4">\
																						<input type="hidden" name="wcfm_data[digital][sampleimages][]" value="'+val.mediaid+'">\
                                              <img src="'+val.url+'" alt="" class="img-fluid sampleimg">\
                                           	<i  data-mediaid="'+val.mediaid+'" class="fa fa-times delete_sample_image" aria-hidden="true"></i></div>');
				});
		},

		artMultipleImgUploader: function(){
			let atsWcfmMedia;

			// If the upload object has already been created, reopen the dialog
				if ( atsWcfmMedia ) {
					atsWcfmMedia.open();
					return;
				}
				// Extend the wp.media object
				atsWcfmMedia = wp.media.frames.file_frame = wp.media({

					title: 'Select media',
					button: {
					text: 'Select media'
					}, multiple: true 
				});
				atsWcfmMedia.on('select', function() {
					let selection = atsWcfmMedia.state().get('selection');
					selection.map( function( attachment ) {
						attachment = attachment.toJSON();
						let idsArray = etsWcfmJsManager.data.step2.variables.mediaIds;
						let index = idsArray.findIndex(x => x.mediaid == attachment.id);
						if( index === -1 )
						{
							idsArray.push({
								mediaid: attachment.id,
								url:attachment.url,
								featuredImage: 0,
							});  
						}
					});

					etsWcfmJsManager.imagesFiller();
					

				});
				// Open the upload dialog
				atsWcfmMedia.open();
		},

		artPlaceHolderFiller: function(thisObje){
				let atsWcfmMediaForPlaceHolder;
				let thisObject = thisObje;
				// If the upload object has already been created, reopen the dialog
				if ( atsWcfmMediaForPlaceHolder ) {
					atsWcfmMediaForPlaceHolder.open();
					return;
				}
				// Extend the wp.media object
				atsWcfmMediaForPlaceHolder = wp.media.frames.file_frame = wp.media({
					title: 'Select media',
					button: {
					text: 'Select media'
					}, multiple: false 
				});

				atsWcfmMediaForPlaceHolder.on('select', function() {
					let selection = atsWcfmMediaForPlaceHolder.state().get('selection').first().toJSON();
					let idsMainArray = etsWcfmJsManager.data.step2.variables.mediaIds;
					let imgIndex = idsMainArray.findIndex(x => x.mediaid == selection.id);						
						if( imgIndex === -1 )
						{
							idsMainArray.push({
								mediaid: selection.id,
								url:selection.url,
								featuredImage: 0,
							});
							etsWcfmJsManager.imagesFiller();
						} else {
							return;
						}
					
					});
				// Open the upload dialog
				atsWcfmMediaForPlaceHolder.open();
		},

		artSampleImages: function(){
			let etsWcfmProSampleMedia;
			// If the upload object has already been created, reopen the dialog
				if ( etsWcfmProSampleMedia ) {
					etsWcfmProSampleMedia.open();
					return;
				}
				// Extend the wp.media object
				etsWcfmProSampleMedia = wp.media.frames.file_frame = wp.media({
					title: 'Select media',
					button: {
					text: 'Select media'
					}, multiple: true 
				});

				etsWcfmProSampleMedia.on('select', function() {
					let selection = etsWcfmProSampleMedia.state().get('selection');
					selection.map( function( attachment ) {
						attachment = attachment.toJSON();

						let sampleImgIdsArray = etsWcfmJsManager.data.step3.variables.digitalProMediaIds;
						let imgIndex = sampleImgIdsArray.findIndex(x => x.mediaid == attachment.id);
						if( imgIndex === -1 )
						{
							sampleImgIdsArray.push({
								mediaid: attachment.id,
								url:attachment.url,
								featuredImage: 0,
							});
						}

						 etsWcfmJsManager.sampleImageFillerDigitalProduct();

					});
				});
				etsWcfmProSampleMedia.open();
		},

		productTechnicViewer: function(thisObject){
			let termsGoupCls = thisObject.data('term_cls');
			etsWcfmJsManager.clearAllCheckedTechnicItem();
			jQuery('.technics_main').hide();
			jQuery('.'+termsGoupCls).show();
		},

		clearAllCheckedTechnicItem: function()
		{
			jQuery('.technic_input_cls').prop("checked",false);
		},


		checkBoxBehaviourManger: function(thisObject)
		{
			let roleOfCheckbox = thisObject.data('role');
			let isChecked = '';
			switch( roleOfCheckbox )
			{
				case 'product_category':
					jQuery('.product_category_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
					}
				break;

				case 'product_support':
					jQuery('.product_support_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
					}
				break;

				case 'pro_display':
					jQuery('.pro_display_attr').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
					}
				break;

				case 'pro_frame_type':
					jQuery('.pro_frame_type_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if(!isChecked){
						jQuery(thisObject).prop("checked",true);
					}
				break;

				case 'pro_art_type':
					jQuery('.pro_art_type_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
				}
				break;

				case 'pro_ship_location':
					jQuery('.pro_ship_location_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
				}
				break;

				case 'pro_packaging':
					jQuery('.pro_packaging_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
				   	}
				break;

				case 'pro_style':
					jQuery('.pro_style_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
				}
				break;

				case 'pro_theme':
					jQuery('.pro_theme_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ) {
						jQuery(thisObject).prop("checked",true);
				}
				break;

				case 'pro_color':
					jQuery('.pro_color_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
				}
				break;

				case 'pro_digi_artist_tech':
					jQuery('.pro_digi_artist_tech_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
						jQuery(thisObject).prop("checked",true);
				}
				break;

				case 'length_unit':
					jQuery('.length_unit_cls').prop("checked",false);
					isChecked = jQuery(thisObject).prop("checked");
					if( !isChecked ){
					jQuery(thisObject).prop("checked",true);
				}
				break;
				
				default:
					return;
			}

		},
		setProgressBar: function(curStep) {
			jQuery("#step").text(`Step `+curStep);
			let steps = jQuery("fieldset").length;
			let percent = parseFloat(100 / steps) * curStep;
			percent = percent.toFixed();
			jQuery(".progress-bar").css("width", percent + "%")
		},

		stepThreeGroupSelection: function(){
			let typeO_ = jQuery('.type_of_product:checked').val();
			if( typeO_ == 'physical' ){
				jQuery('.form-card.step-3-physical').show();
				jQuery('.form-card.step-3-digital').hide();
			} else if( typeO_ == 'digital' ) {
				jQuery('.form-card.step-3-physical').hide();
				jQuery('.form-card.step-3-digital').show();
			}
		},

		wizardFormManager: function(){
			let current_fs, next_fs, previous_fs; //fieldsets
			let opacity;
			let current = 1;
			etsWcfmJsManager.setProgressBar(current);

			jQuery(".next").click(function () {
				current_fs = jQuery(this).parent();
				next_fs = jQuery(this).parent().next();
				//Add Class Active
				jQuery("#progressbar li").eq(jQuery("fieldset").index(next_fs)).addClass("active");
				//show the next fieldset

				if( current == "2" ){
					etsWcfmJsManager.stepThreeGroupSelection();
				}

				etsWcfmJsManager.setResetValidation(current);

				if ( !etsWcfmJsManager.validateSteps['step'+current].state ) {
					return;
				}
				

				jQuery(next_fs).css('display', 'block');

				//hide the current fieldset with style
				current_fs.animate({ opacity: 0 }, {
				step: function (now) {
					// for making fielset appear animation
					opacity = 1 - now;
					current_fs.css({
						'display': 'none',
						'position': 'relative'
					});
					next_fs.css({ 'opacity': opacity });
				},
					duration: 500
				});
				etsWcfmJsManager.setProgressBar(++current);
			});

			jQuery(".previous").click(function () {
				current_fs = jQuery(this).parent();
				previous_fs = jQuery(this).parent().prev();
				//Remove class active
				jQuery("#progressbar li").eq(jQuery("fieldset").index(current_fs)).removeClass("active");
				//show the previous fieldset
				previous_fs.css('display', 'block');

				//hide the current fieldset with style
				current_fs.animate({ opacity: 0 }, {
					step: function (now) {
						// for making fielset appear animation
						opacity = 1 - now;

						current_fs.css({
							'display': 'none',
							'position': 'relative'
						});
						previous_fs.css({ 'opacity': opacity });
					},
					duration: 500
				});
				etsWcfmJsManager.setProgressBar(--current);
				
			});
		},

		productCategorySelector: function(inpObject){
			let categoryId = jQuery(inpObject).val();
			 jQuery.ajax({
                url: theUArtistUrl.ajax_url,
                dataType: 'json',
                type: 'POST',
                data: {
                	action: 'ets_wcfm_form_category',
                	categoryId:categoryId
                },
                success:function(res){
                }
            });
		},

	}

	jQuery(document).ready(function () {


	    etsWcfmJsManager.wizardFormManager();
		jQuery('#ets_file_uploder').click(function(e) {
			e.preventDefault();
			etsWcfmJsManager.artMultipleImgUploader();
		});

		jQuery(document).on('click', '.plus_icon_box' ,function(e) {
			e.preventDefault();
			etsWcfmJsManager.artPlaceHolderFiller(jQuery(this));
		});

		jQuery(document).on('click', '#sample_digital_art' ,function(e) {
			e.preventDefault();
			etsWcfmJsManager.artSampleImages();
		});


		jQuery(document).on('click', '.product_category_cls', function(){
			if( jQuery(this).prop("checked") ){
				etsWcfmJsManager.productTechnicViewer( jQuery(this) );
			}
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.product_support_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_display_attr', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_frame_type_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_art_type_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_ship_location_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_packaging_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_style_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_theme_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_color_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.pro_digi_artist_tech_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});

		jQuery(document).on('click', '.length_unit_cls', function(){
			etsWcfmJsManager.checkBoxBehaviourManger( jQuery(this) );
		});


	jQuery(document).on('keyup', '#questions', function(){
				let maxLength = 2000;	
				let charValue = jQuery(this).val();
				let currentLength = charValue.length;
				if( currentLength > maxLength ) {
					charValue = charValue.substring(0,maxLength);
				} else {

					jQuery('.show_que_text').text(currentLength);
				}
			});

    jQuery(document).on('click', '.delete_sample_image', function(){
			let imgIdsArrSample = etsWcfmJsManager.data.step3.variables.digitalProMediaIds;
			let thisMediaId = jQuery(this).data('mediaid');
			let index = imgIdsArrSample.findIndex(x => x.mediaid == thisMediaId);
			if( index >= 0 )
			{
				imgIdsArrSample.splice(index, 1);
			}
				etsWcfmJsManager.sampleImageFillerDigitalProduct();
				jQuery(this).closest('.sample_image_div').remove();
		});

		jQuery(document).on('click', '.to_be_main', function(){
			let idexOfimgIs = jQuery(this).data('index');
			let imgUploadedIds = etsWcfmJsManager.data.step2.variables.mediaIds;
			let b = imgUploadedIds[0];
			imgUploadedIds[0] = imgUploadedIds[idexOfimgIs];
			imgUploadedIds[idexOfimgIs] = b;
			etsWcfmJsManager.imagesFiller();
		});

		jQuery(document).on('click', '.delete_icon_image', function(){

			let imgIdsArr = etsWcfmJsManager.data.step2.variables.mediaIds;
			let thisMediaId = jQuery(this).data('mediaid');
			let index = imgIdsArr.findIndex(x => x.mediaid == thisMediaId);
			if( index >= 0 )
			{
				imgIdsArr.splice(index, 1);
				etsWcfmJsManager.imagesFiller();
			}
			jQuery(this).closest('.img-card').remove();
		});

		 jQuery(document).on('click', '.wcfm_submit', function(e) {
			    var isValid = false;
			    etsWcfmJsManager.setResetValidation(3);
			    if( !etsWcfmJsManager.validateSteps.step3.entity.productTitle ) {
			      e.preventDefault();
			      alert('Please Enter Product Title');
			      jQuery('html, body').animate({
								scrollTop: jQuery("#wcfm_vandor_pro_form").offset().top
							}, 1000);
			      return;
			    }
			});


		 jQuery(document).on('click', '.check_box_select_text', function(){
		 	
		 		jQuery(this).closest('.check_box_container').find('.checkbox_main').toggleClass('active');
		 		jQuery(this).toggleClass('ets-collapsed');
		 		jQuery(this).closest('.check_box_container').find('.divider').toggleClass('active');
		 });
		jQuery("#descriptionphy").on('paste',function(e) {
			jQuery(e.target).keyup();
		});

		jQuery("#descriptionphy").on('keyup', function(e) {
			let maxLength = 2000;	
			let charValue = jQuery(this).val();
			let currentLength = charValue.length;
			if( currentLength > maxLength ) {
				charValue = charValue.substring(0, 2000);
			} else {
				jQuery('.show_count').text(currentLength);
			}
		});

		jQuery("#descriptiondigital").on('paste',function(e) {
			jQuery(e.target).keyup();
		});

		jQuery("#descriptiondigital").on('keyup', function(e) {
			let maxLength = 2000;	
			let charValue = jQuery(this).val();
			let currentLength = charValue.length;
			if( currentLength > maxLength ) {
				charValue = charValue.substring(0, 2000);
			} else {
				jQuery('.show_digital').text(currentLength);
			}
		});

		jQuery("#questions").on('paste',function(e) {
			jQuery(e.target).keyup();
		});

		jQuery(document).on('keyup', '#questions', function(){
			let maxLength = 2000;	
			let charValue = jQuery(this).val();
			let currentLength = charValue.length;
			if( currentLength > maxLength ) {
				charValue = charValue.substring(0, maxLength);
			} else {
				jQuery('.show_que_text').text(currentLength);
			}
		});

		jQuery(document).on('keyup', '#keywords', function(){
			let maxKeywords = 10;
			let keywordCount = jQuery(this).val();
			let commaSeprate = keywordCount.split(",").length;
			if( commaSeprate <= 10 )
			{
				jQuery('.keyword_show').text(commaSeprate);
				jQuery('.wcfm_submit').prop('disabled', false);
			} else
			{
				jQuery('.keyword_show').text("Type maximum 10 Keywords only");
				jQuery('.keyword_show').css("color", "red");

				jQuery('.wcfm_submit').prop('disabled', true);
			}
		});

		if ( attachementArr.imageAttData !== null ) {
			etsWcfmJsManager.data.step2.variables.mediaIds = attachementArr.imageAttData;
			etsWcfmJsManager.imagesFiller();
		}
		if((attachementArr.editmode) && (attachementArr.productType !==null))
		{
			jQuery(".Physical,.Digital").on('click', function() {

				alert("You can not change product type");
			});
			
		}

	});
		
	

	
	
});




