<?php get_header();?>
        
		<div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="b-title-page"><?php global $ozun; echo $ozun['blog-title']?></h1>
                  <ol class="breadcrumb">
                    <li><a href="<?php echo home_url();?>">home</a></li>
                    <li class="active"><?php wp_title(' '); ?></li>
                  </ol>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        
      
     
        <?php if ( have_posts() ) : ?>
            
            <h1><?php printf( __( 'Search Results for: %s', 'ozun' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            
             
            

       <ul>
        <?php  while ( have_posts() ) : the_post(); ?>

            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>

           

         <?php endwhile; ?>
       </ul>
     

      <?php else : ?>

       <h1><?php _e( 'Nothing Found', 'ozun' ); ?></h1>

    <?php endif;?>
                  

             
    
      
      
<?php get_footer();?>