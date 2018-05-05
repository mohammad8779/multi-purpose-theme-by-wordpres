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
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="l-main-content">
              <div class="posts-group">
                  <?php 
                      while(have_posts()):the_post()
                   ?>

                  <section class="b-post b-post-1 b-post-1_mod-a clearfix">
                  <div class="entry-media"><a class="js-zoom-images img-responsive" href="<?php the_permalink();?>"><?php the_post_thumbnail('post-image');?></a>
                    <div class="entry-date"><?php the_time('d');?><span class="entry-date__month"><?php the_time('F‘ y');?></span></div>
                  </div>
                  <div class="entry-main">
                    <div class="entry-header">
                      <div class="entry-meta"><span class="entry-meta__item">by<a class="entry-meta__link text-primary" href="<?php the_author();?>"><?php the_author();?></a></span><span class="entry-meta__item">--<a class="entry-meta__link entry-meta__link_color" href="blog-main.html"><?php the_tags();?></a></span><span class="entry-meta__item"><i class="entry-meta__icon fa fa-share-alt"></i>53</span></div>
                      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="blog-post.html"><?php the_title();?></a></h2>
                    </div>
                    <div class="entry-content">
                      <p><?php the_content();?></p>
                    </div>
                  </div>
                </section>

              <?php endwhile;?>
                  

                 
              </div>
            

            
             

            

                <?php comments_template();?>

            </div>
            <!-- end .l-main-content-->
          </div>
         
        </div>
      </div>
      
      <!-- end .section-type-1-->
<?php get_footer();?>