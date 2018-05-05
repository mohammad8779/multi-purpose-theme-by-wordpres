<?php get_header();?>
       
        <div class="section-title-page area-bg area-bg_grad-3 area-bg_op_85 parallax">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="b-title-page"><?php global $ozun; echo $ozun['blog-title']?></h1>
                  <ol class="breadcrumb">
                    <li><a href="<?php echo home_url();?>">home</a></li>
                    <li class="active"><?php wp_title(' ');?></li>
                  </ol>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
       
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="l-main-content">
              <div class="posts-group">
                  <?php 
                      while(have_posts()):the_post()
                   ?>

                  <?php get_template_part('content');?>

              <?php endwhile;?>
                  

                 
              </div>
             

              <div class="text-center">
                
                <ul class="pagination pagination-2 typography-last-elem">
                  <li><a href="#"><span class="fa fa-angle-left"></span></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                </ul>

                  <?php the_posts_pagination(array(

                      'screen_reader_text'=> ' ',
                      'type'              =>'list pagination',
                      'prev_text'        =>__('<span class="fa fa-angle-left"></span>','ozun'),
                      'next_text'        =>__('<span class="fa fa-angle-right"></span>','ozun'),



                  ));?>

              </div>


              
            </div>
            
          </div>
            

            <?php get_sidebar();?>


        </div>
      </div>
      

      
     
<?php get_footer();?>