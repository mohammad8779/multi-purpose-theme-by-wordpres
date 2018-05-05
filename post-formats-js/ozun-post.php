<?php

add_action('admin_print_scripts','ozun_formats_js',1000);

function ozun_formats_js(){
	?>
	
		<?php if(get_post_type() =='post'): ?>

			<script>

				jQuery(document).ready(function(){

					var id = jQuery('input[name ="post_format"]:checked').attr('id');

					if(id == 'post-format-video'){

						jQuery('.cmb2-id--for-video').show();
					}

					else{

						jQuery('.cmb2-id--for-video').hide();
					}

					if(id == 'post-format-audio'){

						jQuery('.cmb2-id--for-audio').show();
					}

					else{

						jQuery('.cmb2-id--for-audio').hide();
					}

					if(id == 'post-format-gallery'){

						jQuery('.cmb2-id--for-gallery').show();
					}

					else{

						jQuery('.cmb2-id--for-gallery').hide();
					}


					jQuery('input[name="post_format"]').change(function(){

							jQuery('.cmb2-id--for-video').hide();
							jQuery('.cmb2-id--for-audio').hide();
							jQuery('.cmb2-id--for-gallery').hide();



				   var id = jQuery('input[name ="post_format"]:checked').attr('id');

					if(id == 'post-format-video'){

						jQuery('.cmb2-id--for-video').show();
					}

					else{

						jQuery('.cmb2-id--for-video').hide();
					}

					if(id == 'post-format-audio'){

						jQuery('.cmb2-id--for-audio').show();
					}

					else{

						jQuery('.cmb2-id--for-audio').hide();
					}

					if(id == 'post-format-gallery'){

						jQuery('.cmb2-id--for-gallery').show();
					}

					else{

						jQuery('.cmb2-id--for-gallery').hide();
					}




					})

					






				});




			</script>



	    <?php endif;?>

     <?php

};