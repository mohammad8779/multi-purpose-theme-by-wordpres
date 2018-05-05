<?php get_header();?>
        
		<div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="b-title-page"><?php wp_title(' '); ?></h1>
                  <ol class="breadcrumb">
                    <li><a href="<?php echo home_url();?>">home</a></li>
                    <li class="active"><?php wp_title(' '); ?></li>
                  </ol>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        
      
     
        <?php 
            while(have_posts()):the_post()
         ?>

        <?php the_content();?>

    <?php endwhile;?>
                  

             
    
      
      
<?php get_footer();?>