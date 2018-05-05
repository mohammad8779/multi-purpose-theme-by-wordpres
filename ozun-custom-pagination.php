<?php
/*
template name:custom post pagination
*/

get_header();?>
 
<?php 
	
	$currentpage = get_query_var('paged')?get_query_var('paged'):1; 
	$ozun_er_post = new WP_Query(array(

			'post_type'=>'ozun-welcome-sec',
			'posts_per_page'=>1,
      'paged'=>$currentpage ,

	 ));

?>	 


<section class="section-default">
    <div class="container">
        
        <div class="row">

            <?php

                $welcome_post = new WP_Query(array(

                        'post_type'     =>'ozun-welcome-sec',
                        'posts_per_page'=> 4,
                        

                    ));
                while($ozun_er_post->have_posts()):$ozun_er_post->the_post();
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

<div class="text-center">
 <?php

  $maxpage = $ozun_er_post->max_num_pages;
  echo paginate_links(array(
               
      'current'=>$currentpage,
      'total'=>$maxpage,
      'show_all'=>true,
      'prev_text'  => __('<span class="fa fa-angle-left"></span>','ozun'),
      'next_text'  => __('<span class="fa fa-angle-right"></span>','ozun'),

      
              

    ));

?>

</div>



<?php get_footer();?>