<?php
  //for recent post
 class ozun_recent_post extends WP_Widget{

 	public function __construct(){

 		parent::__construct('ozun-id',__('Ozun Recent Post Widget','ozun'), array(

 			          'Description'=>__('This is for ozun recent post','ozun'),)
 		          );
 	  } 


 	public function widget($ozun_wid,$post_poriman){ ?>

 		<?php echo $ozun_wid['before_widget'] ?>
                  <?php echo $ozun_wid['before_title']?> recent posts <?php echo $ozun_wid['after_title']?>
                  

                  	<?php 

                  		$widget_post = new WP_Query(array(

                  				'post_type'=>'post',
                          'posts_per_page'=>$post_poriman['post_number']

                  			));

                  	?>

                  	
                       
                      	<?php while($widget_post->have_posts()):$widget_post->the_post();?>
                          <div class="widget-content">
                      		<div class="post-widget clearfix">
		                        <div class="post-widget__media"><a href="<?php the_permalink();?>"> <?php the_post_thumbnail('widget_post_img');?> </a></div>
		                        <div class="post-widget__inner"><a class="post-widget__title ui-title-inner" href="<?php the_permalink();?>"><?php the_title();?></a>
		                          <div class="post-widget__meta">
		                            <div class="post-widget__meta-item"> By&nbsp;<a class="post-widget__meta-link" href="<?php the_permalink();?>"> <?php the_author(' &nbsp;')?> </a></div>
		                            <div class="post-widget__meta-item"><a class="post-widget__meta-link post-widget__meta-link_color" href="<?php the_permalink();?>"><?php the_category(' , ');?></a></div>
		                          </div>
		                        </div>
		                       
                             </div>
                         </div>

                         <?php endwhile?>
                     
                     </div>
                 
                  
            <?php echo $ozun_widget['after_widget']?>


 	<?php
 	}


  public function form($valuedao){ ?>

        <p><label for="<?php echo $this->get_field_id('title')?>">Title:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $valuedao['title']?>" type="text"></p>


        <p><label for="<?php echo $this->get_field_id('post_number')?>">Number of posts to show:</label>
        <input class="tiny-text" id="<?php echo $this->get_field_id('post_number')?>" name="<?php echo $this->get_field_name('post_number')?>"  min="1" value="<?php echo $valuedao['post_number']?>" size="3" type="number"></p>


        <p><input class="checkbox" id="<?php echo $this->get_field_id('post_date')?>" name="<?php echo $this->get_field_name('post_date')?>" <?php if(!empty($valuedao['post_date']) ){echo "checked='checked'";} ?> type="checkbox">
         <label for="<?php echo $this->get_field_id('post_date')?>">Display post date?</label></p>

  <?php
  }



 }

 add_action('widgets_init','widget_hook');

 function widget_hook(){

 	register_widget('ozun_recent_post');
  register_widget('ozun_offer_widget');
  register_widget('ozun_instagram');

 }




//for offers

class ozun_offer_widget extends WP_Widget{

  public function __construct(){

    parent:: __construct('ozun_offer_id','Ozun Offer Widgt', array(

          'Description'=>'This is of ozun offer widget',

      )

    );
  }

  public function widget($offer_wid,$post_number){ ?>

             <?php echo $offer_wid['before_widget']?>
                  <?php echo $offer_wid['before_title']?>what we offers<?php echo $offer_wid['after_title']?>
                  
                  <div class="widget-content">
                    <ul class="widget-list list list-mark-4">

                      <?php 

                        $offer_post = new WP_Query(array(

                            'post_type'=>'ozun-portfolio',
                            'posts_per_page'=>$post_number['post_number']


                          ));

                      ?>
                      
                      <?php while( $offer_post->have_posts()): $offer_post->the_post();?>
                      <li class="widget-list__item"><a class="widget-list__link" href="<?php the_permalink();?>"><?php the_title();?></a></li>

                    <?php endwhile?>
                      
                    </ul>
                  </div>
             <?php echo $offer_wid['after_widget']?>

   <?php
  }

   public function form($valuedao){ ?>

        <p><label for="<?php echo $this->get_field_id('title')?>">Title:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $valuedao['title']?>" type="text"></p>


        <p><label for="<?php echo $this->get_field_id('post_number')?>">Number of posts to show:</label>
        <input class="tiny-text" id="<?php echo $this->get_field_id('post_number')?>" name="<?php echo $this->get_field_name('post_number')?>"  min="1" value="<?php echo $valuedao['post_number']?>" size="3" type="number"></p>


        <p><input class="checkbox" id="<?php echo $this->get_field_id('post_date')?>" name="<?php echo $this->get_field_name('post_date')?>" <?php if(!empty($valuedao['post_date']) ){echo "checked='checked'";} ?> type="checkbox">
         <label for="<?php echo $this->get_field_id('post_date')?>">Display post date?</label></p>

  <?php

}

}


//instagram

class ozun_instagram extends WP_Widget{

  public function __construct(){

    parent::__construct('instagram_wid','Ozun Instagram Widget',array(

          'Description'=>'This is for ozun instagram widget',

      ));
  }

  public function widget($instagram_wid){ ?>


          <?php echo $instagram_wid['before_widget']?>
                  <?php echo $instagram_wid['before_title']?> instagram <?php echo $instagram_wid['after_title']?>
                  
                  <div class="widget-content widget-gallery">
                    <div class="js-zoom-gallery">
                       <?php
                          $instagram_img = new WP_Query(array(
                              'post_type'=>'ozun-portfolio',
                              'posts_per_page'=>4
                            ));
                          while($instagram_img->have_posts()):$instagram_img->the_post();
                       ?>
                       <div class="widget-gallery__img"><a class="widget-gallery__link js-zoom-gallery__item" href="<?php the_permalink();?>"><?php the_post_thumbnail('instagram-img');?></a></div>
                      
                     <?php endwhile;?>
                      
                      
                    </div>
                  </div>
                <?php echo $instagram_wid['after_widget']?>
      
                 

  <?php
  }

   public function form($valuedao){ ?>

        <p><label for="<?php echo $this->get_field_id('title')?>">Title:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $valuedao['title']?>" type="text"></p>


        <p><label for="<?php echo $this->get_field_id('post_number')?>">Number of posts to show:</label>
        <input class="tiny-text" id="<?php echo $this->get_field_id('post_number')?>" name="<?php echo $this->get_field_name('post_number')?>"  min="1" value="<?php echo $valuedao['post_number']?>" size="3" type="number"></p>


        <p><input class="checkbox" id="<?php echo $this->get_field_id('post_date')?>" name="<?php echo $this->get_field_name('post_date')?>" <?php if(!empty($valuedao['post_date']) ){echo "checked='checked'";} ?> type="checkbox">
         <label for="<?php echo $this->get_field_id('post_date')?>">Display post date?</label></p>

  <?php

}


}

