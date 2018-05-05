<?php


add_shortcode('ozun-portfolio','ozun_portfolio_shortcode');

function ozun_portfolio_shortcode($attr,$content = null){

	$atts = shortcode_atts(array(

		'works_subtitle'=>'Tempor incididunt labore dolore veniam',
		'works_title' =>'projects we do'

	),$attr);

	extract($atts);

	ob_start(); ?>

		<section class="section-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <div class="ui-subtitle-block"> <?php echo $works_subtitle ;?></div>
                            <h2 class="ui-title-block-2"><span class="shuffle"><?php echo $works_title ;?></span></h2>
                            <div class="ui-decor-1 bg-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="b-isotope b-isotope-1">
                            <ul class="b-isotope-filter list-inline">
                                <li><a class="current" href="<?php the_permalink();?>" data-filter="*">all works</a></li>

                                <?php 

                                	$terms = get_terms('ozun-portfolio-type');

                                	foreach($terms as $term):;
                                 ?>


                              <li><a href="<?php the_permalink();?>" data-filter=".<?php echo $term ->slug;?>"> <?php echo $term->name;?> </a></li>

                            <?php endforeach;?>
                                
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                       
                                        <ul class="b-isotope-grid grid list-unstyled">

                                        	<?php

                                        	 $ozun_portfolio_post = new WP_Query(array(

                                        	 		'post_type'=>'ozun-portfolio',
                                        	 		'posts_per_page'=>5,

                                        	 	)); 

                                        	   while($ozun_portfolio_post->have_posts()):$ozun_portfolio_post->the_post()	
                                        	?>
                                            
                                            <li class="grid-sizer"></li>
                                            
                                            <li class="b-isotope-grid__item grid-item <?php 

                                            			$terms = get_the_terms(get_the_id(),'ozun-portfolio-type');

                                            			foreach($terms as $term){
                                            				echo $term->slug ." ";
                                            			}

                                                   ?>">
                                                <a class="b-isotope-grid__inner" href="<?php the_permalink();?>">

                                                	<?php the_post_thumbnail('home-portfolio');?>

                                                	<span class="b-isotope-grid__wrap-info">

                                                		<span class="b-isotope-grid__info">

                                                			<span class="b-isotope-grid__title"><?php the_title();?></span>

                                                			<span class="b-isotope-grid__categorie">

                                            			     <?php 

										                  		  $terms = get_the_terms(get_the_id(),'ozun-portfolio-type');
										                            foreach($terms as $term){
										                            	echo $term->name." ";
										                  			}
										                      ?>

                                                		    </span>

                                                		</span>

                                                    </span>
                                                </a>
                                            </li>

                                         <?php endwhile;?>

                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-isotope-->
                    </div>
                </div>
            </div>
        </section>

	<?php return ob_get_clean();

}

//slider

add_shortcode('ozun-slider','ozun_home_slider');

function ozun_home_slider(){

    ob_start(); ?>

           <div class="main-slider slider-pro text-center" id="main-slider" data-slider-width="100%" data-slider-height="920px" data-slider-arrows="true" data-slider-buttons="true">
            <div class="sp-slides">

                <?php 

                    $slider_img = new WP_Query(array(

                            'post_type'=>'ozun-slider',
                        ));

                 ?>
                
                <?php 

                    while($slider_img->have_posts()):$slider_img->the_post();
                ?>
                <div class="sp-slide"><?php the_Post_thumbnail('full',array('class'=>'sp-image'));?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="main-slider__info sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400"><?php echo get_post_meta(get_the_id(),'_slider-subtitle',true)?></div>
                                <h2 class="main-slider__title sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400"><?php the_title();?></h2>

                                
                                <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400">

                                    <?php
                                    $first_button = get_post_meta(get_the_id(),'_slider-f-text',true);

                                    if(!empty($first_button)):
                                  ?>
                                    <a class="<?php if(get_post_meta(get_the_id(),'_slider-f-type',true)=='transparent')
                                    {echo'main-slider__btn';}
                                    else{echo'main-slider__btn_white';}
                                    ?> btn btn-default btn-round" href="<?php the_permalink();?>"><?php echo $first_button; ?></a>

                                <?php endif;?>

                                <?php
                                    $second_button = get_post_meta(get_the_id(),'_slider-s-text',true);

                                    if(!empty($second_button)):
                                ?>
                                <a class="<?php if(get_post_meta(get_the_id(),'_slider-s-type',true)=='white')
                                    {echo'main-slider__btn_white';}
                                    else{echo'main-slider__btn';}
                                    ?> btn btn-default btn-round" href="<?php the_permalink();?>"><?php echo $second_button;?></a>

                                <?php endif;?>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
               <?php endwhile;?>
            
            </div>
        </div>

    <?php return ob_get_clean();
}

//welcome section

add_shortcode('ozun-welcome','ozun_welcome');

function ozun_welcome($attr,$content){

    $atts = shortcode_atts(array(

            'subtitle'=>'Tempor incididunt labore dolore veniam',
            'title'   =>'welcome to ozun',

        ),$attr);

    extract($atts);
    ob_start();?>

         <section class="section-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <div class="ui-subtitle-block"><?php echo $subtitle;?></div>
                            <h2 class="ui-title-block-2"><?php echo $title;?></h2>
                            <div class="ui-decor-1 bg-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php

                        $welcome_post = new WP_Query(array(

                                'post_type'     =>'ozun-welcome-sec',
                                'posts_per_page'=> 4,
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




    <?php return ob_get_clean();
}


//ozun tab content

add_shortcode('ozun-tab','ozun_tab_shortcode');
function ozun_tab_shortcode($attr,$content= null){

    $atts = shortcode_atts(array(


        ),$attr);

    extract($atts);

    ob_start()?>

         <div class="section-area bg-grey pruning">
            <div class="section-default section-type-3 area-bg area-bg_blue area-bg_op_90 parallax pull-right">
                <div class="area-bg__inner">
                    <ul class="b-tabs-nav nav nav-tabs">

                        <?php 

                           
                            $tab_menu = new WP_Query(array(

                                    'post_type'=>'ozun-tab-sec',

                                )); 
                             $active = 0;    
                            while($tab_menu->have_posts()):$tab_menu->the_post();
                        ?>
                        <li class="<?php if($active==0){echo"active";}?>"><a href="#ozuntab-<?php the_ID();?>" data-toggle="tab"><?php echo get_post_meta(get_the_id(),'_tabs-menu',true)?></a></li>
                         <?php $active++;?>
                        <?php endwhile;?>
                    </ul>
                    

                    <div class="b-tabs-content tab-content">

                        <?php 

                            $tab_content = new WP_Query(array(

                                    'post_type'=>'ozun-tab-sec',

                                ));
                            $active = 0;  
                            while($tab_content->have_posts()):$tab_content->the_post();
                        ?>
                        <div class="tab-pane <?php if($active==0){echo"active";}?>" id="ozuntab-<?php the_ID()?>">
                            <section class="section-area">
                                <h2 class="ui-title-block-3"><?php the_title();?></h2>
                                <div class="ui-subtitle-block-2"><?php echo get_post_meta(get_the_id(),'_tabs-subtitle',true);?></div>
                                <div class="ui-decor-2 bg-white"></div>
                                <p><?php the_content();?></p><a class="btn btn-default btn-round" href="<?php the_permalink();?>">read more</a>
                            </section>
                        </div>
                       
                       <?php $active++;?>
                       <?php endwhile;?>
                       
                      
                    </div>
                    <!-- end .b-tabs-->
                </div>

                <div class="section-type-3__bg-item">
                    <div class="scrollme">
                        <div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-300" data-rotatez="0">
                            <img src="<?php echo get_template_directory_uri();?>/assets/media/content/bg/bg-item-1.png" alt="foto">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php return ob_get_clean();

}

//ozun offer

add_shortcode('ozun-offer','ozun_offer_shortcode');

function ozun_offer_shortcode($attr,$content){

    $atts = shortcode_atts(array(

        'offer_title'=>'we offer',
        'offer_subtitle'=>'Incididunt labore dolore veniam',

        ),$attr);

    extract($atts);

    ob_start();?>

        <section class="section-default bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <div class="ui-subtitle-block"><?php echo $offer_subtitle;?></div>
                            <h2 class="ui-title-block-2"><?php echo $offer_title; ?></h2>
                            <div class="ui-decor-1 bg-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">


                        <div class="b-advantages-group-2">

                            <?php 

                            $offer_post = new WP_Query(array(

                                    'post_type'=>'ozun-offer-sec',
                                    'posts_per_page'=> -1,

                                )); 

                            while($offer_post->have_posts()):$offer_post->the_post();

                        ?>
                            <section class="b-advantages b-advantages-3 b-advantages-3_mod-b b-advantages_3-col  wow  fadeIn" data-wow-duration="1s" data-wow-delay="1.2s"><i class="b-advantages__icon stroke <?php echo get_post_meta(get_the_id(),'_offer-icon',true);?>"></i>
                                <div class="b-advantages__inner">
                                    <h3 class="b-advantages__title ui-title-inner"><a href="home.html"><?php the_title();?></a></h3>
                                    <div class="b-advantages__info"><?php the_content();?></div>
                                </div>
                            </section>

                        <?php endwhile;?>
                            
                            <!-- end .b-advantages-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    <?php return ob_get_clean();


}

//common banner section

add_shortcode('ozun-common-section','ozun_common_section_shortcode');

function ozun_common_section_shortcode($attr,$content=null){

    $atts = shortcode_atts(array(
    
       'provide_title'=>'we provide higher quality services',
       'provide_subtitle'=>'and you’ll get solutions for everything',

       'first_button_text'=>'the offerings test',
       'second_button_text'=>'learn more test',


    ),$attr);    

    extract($atts);

    ob_start();?>

        <section class="section-type-1 section-sm parallax area-bg area-bg_grad-2 area-bg_op_80">
        <div class="area-bg__inner">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <h2 class="ui-title-block-3"><?php echo $provide_title;?></h2>
                <div class="ui-subtitle-block-2"><?php echo $provide_subtitle;?></div>
              </div>
              <div class="col-md-5"><a class="btn btn-default btn-round pull-right" href="<?php the_permalink();?>"><?php echo $first_button_text;?></a><a class="btn btn-default btn-round pull-right" href="<?php the_permalink();?>"><?php echo $second_button_text;?></a></div>
            </div>
          </div>
        </div>
      </section>




    <?php return ob_get_clean();
}
