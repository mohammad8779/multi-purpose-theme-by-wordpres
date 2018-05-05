<?php

//add files

if(file_exists(dirname(__FILE__).'/metabox/init.php')){
  require_once(dirname(__FILE__).'/metabox/init.php');
}

if(file_exists(dirname(__FILE__).'/metabox/custom-metabox.php')){
  require_once(dirname(__FILE__).'/metabox/custom-metabox.php');
}

//custom widget
if(file_exists(dirname(__FILE__).'/custom-widget.php')){

  require_once(dirname(__FILE__).'/custom-widget.php');
}

//ozun shortcodes
if(file_exists(dirname(__FILE__).'/ozun-shortcodes.php')){

  require_once(dirname(__FILE__).'/ozun-shortcodes.php');
}

//ozun theme option 1st file
if(file_exists(dirname(__FILE__).'/theme-option/ReduxCore/framework.php')){

  require_once(dirname(__FILE__).'/theme-option/ReduxCore/framework.php');
}

//ozun theme option
if(file_exists(dirname(__FILE__).'/theme-option/sample/ozun-config.php')){

  require_once(dirname(__FILE__).'/theme-option/sample/ozun-config.php');
}

//ozun theme default posts
if(file_exists(dirname(__FILE__).'/post-formats-js/ozun-post.php')){

  require_once(dirname(__FILE__).'/post-formats-js/ozun-post.php');
}

//for tgm plugins
if(file_exists(dirname(__FILE__).'/tgm/example.php')){

  require_once(dirname(__FILE__).'/tgm/example.php');
}

//for fshortcode of visual composer
if(file_exists(dirname(__FILE__).'/vc/vc-code.php')){

  require_once(dirname(__FILE__).'/vc/vc-code.php');
}





//for woocommerce  mini-cart 

add_filter('woocommerce_add_to_cart_fragments','my_final_fragments');

function my_final_fragments($def){

  ob_start(); ?>

  <div class="header-cart"><a href="<?php the_permalink();
  ?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a><span class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count();?></span></div>


  <?php $def['div.header-cart'] = ob_get_clean();

   return $def;

}


//for comment section
if ( ! function_exists( 'ozun_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Shape 1.0
 */

function ozun_comment( $comment, $args, $depth ) {
    $ava_arg = array(
      'class' => 'comment-face',
      );
      
      $GLOBALS['locus']=$ozun;
       ?>

       

        <ul class="comments-list list-unstyled">
                    <li>
                      <article class="comment clearfix">
                        <div class="comment-face"> <?php echo get_avatar($ozun,70, '', '', $ava_arg); ?></div>
                        <div class="comment-inner">
                          <header class="comment-header">
                            <cite class="comment-author"><?php echo ucfirst(get_comment_author()); ?></cite>
                            <time class="comment-datetime" datetime="2012-10-27"><?php echo get_comment_date(); ?></time>
                          </header>
                          <div class="comment-body">
                            <p><?php comment_text(); ?></p>
                          </div>
                          <footer class="comment-footer"><a class="comment-btn" href="blog-post.html"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></a></footer>
                        </div>
                      </article>
                     
                    </li>
                    
         </ul>


      <?php
            
  }
endif; 


//adding custom avatar

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );

  function wpb_new_gravatar ($avatar_defaults) {

  $myavatar = 'http://localhost/ozun/wp-content/uploads/2017/03/mylast.png';

  $avatar_defaults[$myavatar] = "Default Gravatar";

  return $avatar_defaults;

  }


//adding author box 
/*  
function wpb_author_info_box( $content ) {

global $post;

// Detect if it is a single post with a post author
if ( is_single() && isset( $post->post_author ) ) {

// Get author's display name 
$display_name = get_the_author_meta( 'display_name', $post->post_author );

// If display name is not available then use nickname as display name
if ( empty( $display_name ) )
$display_name = get_the_author_meta( 'nickname', $post->post_author );

// Get author's biographical information or description
$user_description = get_the_author_meta( 'user_description', $post->post_author );

// Get author's website URL 
$user_website = get_the_author_meta('url', $post->post_author);

// Get link to the author archive page
$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
 
if ( ! empty( $display_name ) )

$author_details = '<p class="author_name">About ' . $display_name . '</p>';

if ( ! empty( $user_description ) )
// Author avatar and bio

$author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';

$author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';  

// Check if author has a website in their profile
if ( ! empty( $user_website ) ) {

// Display author website link
$author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';

} else { 
// if there is no author website then just close the paragraph
$author_details .= '</p>';
}

// Pass all this info to post content  
$content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
}
return $content;
}

// Add our function to the post content filter 
add_action( 'the_content', 'wpb_author_info_box' );

// Allow HTML in author bio section 
remove_filter('pre_user_description', 'wp_filter_kses');


*/




//default
add_action('after_setup_theme','ozun_default_function');

function ozun_default_function(){

	add_theme_support('title-tag');

  add_theme_support('post-formats',array('video','audio','gallery','quote','aside'));

  add_theme_support('post-thumbnails');

  add_theme_support('woocommerce');

  add_image_size('post-image',750,450,true);

  add_image_size('widget_post_img',110,75,true);

  add_image_size('home-portfolio',200,100,true);

  add_image_size('instagram-img',105,80,true);



  load_theme_textdomain('ozun', get_template_directory().'/lang');


  register_nav_menu('main-menu', __('Main Menu','ozun'));

  register_nav_menu('full-menu', __('Full Screen Menu','ozun'));


//ozun portfolio
  register_post_type('ozun-portfolio', array(

        'labels'=>array(
          

            'name'=>'Ozun-Portfolios',
            'add_new'=>'Add New Portfolio',
            'add_new_item'=>'Add New Portfolio',

          ),

        'public'=>true,
        'menu_icon'=>'dashicons-groups',
        'supports'=> array('title','editor','thumbnail'),



    ));

   register_taxonomy('ozun-portfolio-type','ozun-portfolio', array(

        'labels'=>array(

            'name'=>'Types',
            'add_new'=>'Add New Type',
            'add_new_item'=>'Add New Type',

          ),

        'public'=>true,
        'hierarchical'=>true,



    ));


//ozun slider
  register_post_type('ozun-slider', array(

        'labels'=>array(

            'name'=>'Ozun-Sliders',
            'add_new'=>'Add New slider',
            'add_new_item'=>'Add New slider',

          ),

        'public'=>true,
       
        'supports'=> array('title','editor','thumbnail'),



    ));

   register_taxonomy('ozun-slider-type','ozun-slider', array(

        'labels'=>array(

            'name'=>'Types',
            'add_new'=>'Add New Type',
            'add_new_item'=>'Add New Type',

          ),

        'public'=>true,
        'hierarchical'=>true,



    ));

//welcome setion for ozun

  register_post_type('ozun-welcome-sec', array(

        'labels'=>array(

            'name'=>'Ozun-Welcome',
            'add_new'=>'Add New Welcome',
            'add_new_item'=>'Add New Welcome',

          ),

        'public'=>true,
       
        'supports'=> array('title','editor'),



    ));

   register_taxonomy('ozun-welcome-type','ozun-welcome-sec', array(

        'labels'=>array(

            'name'=>'Catagory',
            'add_new'=>'Add New Catagory',
            'add_new_item'=>'Add New Catagory',

          ),

        'public'=>true,
        'hierarchical'=>true,



    ));

//ozun tabs
register_post_type('ozun-tab-sec', array(

        'labels'=>array(

            'name'=>'Ozun-Tabs',
            'add_new'=>'Add New Tab',
            'add_new_item'=>'Add New Tab',

          ),

        'public'=>true,
       
        'supports'=> array('title','editor'),



    ));

   register_taxonomy('ozun-tab-category','ozun-tab-sec', array(

        'labels'=>array(

            'name'=>'Catagory',
            'add_new'=>'Add New Catagory',
            'add_new_item'=>'Add New Catagory',

          ),

        'public'=>true,
        'hierarchical'=>true,



    ));


//ozun offer
register_post_type('ozun-offer-sec', array(

        'labels'=>array(

            'name'=>'Ozun-Offers',
            'add_new'=>'Add New Offer',
            'add_new_item'=>'Add New Offer',

          ),

        'public'=>true,
       
        'supports'=> array('title','editor'),



    ));

   register_taxonomy('ozun-offer-category','ozun-offer-sec', array(

        'labels'=>array(

            'name'=>'Catagory',
            'add_new'=>'Add New Catagory',
            'add_new_item'=>'Add New Catagory',

          ),

        'public'=>true,
        'hierarchical'=>true,



    ));



}

//widget

add_action('widgets_init','ozun_sidebar');

function ozun_sidebar(){

  register_sidebar(array(

      'id'=>'right-sidebar',
      'name'=>'Right Sidebar',
      'before_widget'=>'<section class="widget section-sidebar">',
      'after_widget'=>'</section>',
      'before_title'=>'<h3 class="widget-title ui-title-block-4">',
      'after_title'=>'</h3> <div class="ui-decor-3"></div>'


    ));

  register_sidebar(array(

      'id'=>'footer-sidebar',
      'name'=>'Footer Sidebar',
      'before_widget'=>'<div class="col-sm-4">
                  <section class="footer-section footer-section_links">',
      'after_widget'=>'</div></section>',
      'before_title'=>'<h3 class="footer-section__title">',
      'after_title'=>'</h3>'


    ));
}

//css for fonts of admin
add_action('admin_enqueue_scripts','ozun_admin_css');
function ozun_admin_css(){
//font-awesome
wp_enqueue_style('font-awesome',get_template_directory_uri() .'/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css');
//flaticon
wp_enqueue_style('flat',get_template_directory_uri() .'/assets/fonts/flaticon/flaticon.css');
//stroke
wp_enqueue_style('stroke',get_template_directory_uri() .'/assets/fonts/stroke/style.css');

//pe-icon-7-stroke
wp_enqueue_style('pe-icon-7',get_template_directory_uri() .'/assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css');
//elegant
wp_enqueue_style('elegant',get_template_directory_uri() .'/assets/fonts/elegant/style.css');


}

//css for fonts of fontend
add_action('wp_enqueue_scripts','ozun_admin_css');
function ozun_fonts_css(){
//font-awesome
wp_enqueue_style('font-awesome',get_template_directory_uri() .'/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css');
//flaticon
wp_enqueue_style('flat',get_template_directory_uri() .'/assets/fonts/flaticon/flaticon.css');
//stroke
wp_enqueue_style('stroke',get_template_directory_uri() .'/assets/fonts/stroke/style.css');

//pe-icon-7-stroke
wp_enqueue_style('pe-icon-7',get_template_directory_uri() .'/assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css');
//elegant
wp_enqueue_style('elegant',get_template_directory_uri() .'/assets/fonts/elegant/style.css');


}




add_action('wp_enqueue_scripts','ozun_css');

function ozun_css(){
  //theme
  wp_enqueue_style('theme',get_template_directory_uri() .'/assets/css/theme.css');

   //header
  wp_enqueue_style('header',get_template_directory_uri() .'/assets/plugins/headers/header.css');

  //theme
  wp_enqueue_style('theme',get_template_directory_uri() .'/assets/css/color.css');
 //master css
  wp_enqueue_style('css',get_template_directory_uri() .'/assets/css/master.css');

  
  wp_enqueue_style('stylesheet', get_stylesheet_uri());
}


//IE conditional scripts

add_action('wp_enqueue_scrpts','conditional_scripts');

function conditional_scripts(){

  wp_enqueue_script('separate-js', get_template_directory_uri().'/assets/js/separate-js/html5shiv-3.7.2.min.js',array(),'3.7.2',false);

  wp_script_add_data('separate-js','conditional','lt IE 9');
}








//js
add_action('wp_enqueue_scripts','ozun_js');

function ozun_js(){

  
	   
   wp_enqueue_script('bootstrap-js',get_template_directory_uri() .'/assets/libs/bootstrap/bootstrap.min.js',array('jquery'),'3.3.5',true);

     wp_enqueue_script('bootstrap-select-js',get_template_directory_uri() .'/assets/plugins/bootstrap-select/js/bootstrap-select.js',array('jquery'),'1.11.2',true);

      

     wp_enqueue_script('owl-carousel',get_template_directory_uri() .'/assets/plugins/owl-carousel/owl.carousel.min.js',array('jquery'),'',true);

      wp_enqueue_script('magnific-popup',get_template_directory_uri() .'/assets/plugins/magnific-popup/jquery.magnific-popup.min.js',array('jquery'),'',true);

     wp_enqueue_script('slidebar',get_template_directory_uri() .'/assets/plugins/headers/slidebar.js',array('jquery'),'',true);

       wp_enqueue_script('header',get_template_directory_uri() .'/assets/plugins/headers/header.js',array('jquery'),'',true);

     wp_enqueue_script('jqBootstrapValidation',get_template_directory_uri() .'/assets/plugins/jqBootstrapValidation.js',array('jquery'),'',true);
    

      wp_enqueue_script('contact_me',get_template_directory_uri() .'/assets/plugins/contact_me.js',array('jquery'),'',true);

     
      wp_enqueue_script('flowplayer',get_template_directory_uri() .'/assets/plugins/flowplayer/flowplayer.min.js',array('jquery'),'',true);


      wp_enqueue_script('isotope',get_template_directory_uri() .'/assets/plugins/isotope/isotope.pkgd.min.js',array('jquery'),'',true);

      wp_enqueue_script('imagesLoaded',get_template_directory_uri() .'/assets/plugins/isotope/imagesLoaded.js',array('jquery'),'',true);

      wp_enqueue_script('rendro-easy-pie-chart',get_template_directory_uri() .'/assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js',array('jquery'),'',true);

      wp_enqueue_script('waypoints',get_template_directory_uri() .'/assets/plugins/rendro-easy-pie-chart/waypoints.min.js',array('jquery'),'',true);

      wp_enqueue_script('scrollreveal',get_template_directory_uri() .'/assets/plugins/scrollreveal/scrollreveal.min.js',array('jq'),'',true);

       wp_enqueue_script('anime',get_template_directory_uri() .'/assets/plugins/revealer/js/anime.min.js',array('jquery'),'',true);

      wp_enqueue_script('revealer',get_template_directory_uri() .'/assets/plugins/revealer/js/scrollMonitor.js',array('jquery'),'',true);

      wp_enqueue_script('main',get_template_directory_uri() .'/assets/plugins/revealer/js/main.js',array('jquery'),'',true);

      wp_enqueue_script('wow',get_template_directory_uri() .'/assets/plugins/animate/wow.min.js',array('jquery'),'1.1.3',true);

      wp_enqueue_script('shuffleLetters',get_template_directory_uri() .'/assets/plugins/animate/jquery.shuffleLetters.js',array('jquery'),'',true);

      wp_enqueue_script('scrollme',get_template_directory_uri() .'/assets/plugins/animate/jquery.scrollme.min.js',array('jquery'),'',true);

     //Main-slider JS

     wp_enqueue_script('main-slider',get_template_directory_uri() .'/assets/plugins/slider-pro/jquery.sliderPro.min.js',array('jquery'),'',true);   


     //CUSTOM JS

     wp_enqueue_script('custom',get_template_directory_uri() .'/assets/js/custom.js',array('jquery'),'',true);
}