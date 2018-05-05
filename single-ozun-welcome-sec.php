<?php get_header();?>
        <!-- end .header-->
        <div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="b-title-page"><?php global $ozun; echo $ozun['blog-title']?></h1>
                  <ol class="breadcrumb">
                    <li><a href="home.html">home</a></li>
                    <li class="active"><?php wp_title(' '); ?></li>
                  </ol>
                  <!-- end breadcrumb-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end .b-title-page-->
           <section class="section-default">
            <div class="container">
                
                <div class="row">

                    <?php

                        $welcome_post = new WP_Query(array(

                                'post_type'     =>'ozun-welcome-sec',
                               
                                'order'         =>'rand',

                            ));
                        while($welcome_post->have_posts()):$welcome_post->the_post();
                    ?>
                    <div class="col-sm-4">
                        <section class="b-advantages b-advantages-1  wow  fadeIn" data-wow-duration="1s" data-wow-delay="1s"> <i class="<?php echo get_post_meta(get_the_id(),'_welcome-icon',true);?>"></i>
                            <div class="b-advantages__inner">
                                <h3 class="b-advantages__title ui-title-inner"><a href="<?php the_permalink();?>"> <?php the_title();?></a></h3>
                                <div class="b-advantages__info"><?php the_content();?></div>
                            </div>
                        </section>
                        <!-- end .b-advantages-->
                    </div>

                <?php endwhile;?>
                    
                </div>
            </div>
        </section>
      
      <!-- end .section-type-1-->
<?php get_footer();?>