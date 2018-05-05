<!DOCTYPE html>
<html <?php language_attributes();?>>



<head>
    
    <?php wp_head();?>


    
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
    
</head>

<body <?php body_class();?>>
    <!-- Loader -->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>  
    <!-- Loader end-->
    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
        <!-- ==========================-->
        <!-- SEARCH MODAL-->
        <!-- ==========================-->
        <div class="header-search open-search">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form class="search-global" action="<?php home_url();?>" method="get">
                               

                                <input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value="">

                                
                                 <button class="search-global__btn"><i class="icon stroke icon-Search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button class="search-close close" type="button"><i class="fa fa-times"></i></button>
        </div>
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        
        <!-- ==========================-->
        <!-- FULL SCREEN MENU-->
        <!-- ==========================-->
        <div class="wrap-fixed-menu" id="fixedMenu">
            <nav class="fullscreen-center-menu">

                <div class="menu-main-menu-container">

                   

                        <?php

                        wp_nav_menu(array(

                                'theme_location'=>'full-menu',
                                'menu_class'    =>'nav navbar-nav',
                                'menu_id'       =>'fixedMenu',

                       ));


                    ?>

                   
                   
                </div>
            </nav>
            <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
        </div>

        <header class="header header-topbar-hidden header-boxed-width navbar-fixed-top header-background-trans header-color-white header-logo-white header-navibox-1-left header-navibox-2-left header-navibox-3-right header-navibox-4-right">
            <div class="container container-boxed-width">
                <div class="top-bar">
                    <div class="container">
                        <div class="header-topbarbox-1">
                            <ul>
                                <li>WE HELPING YOU: INFO@YOURSITE.COM</li>
                            </ul>
                        </div>
                        <div class="header-topbarbox-2">
                            <ul class="social-links">
                                <li><a href="http://html.templines.com/" target="_blank"><i class="social_icons fa fa-facebook-square"></i></a></li>
                                <li><a href="http://html.templines.com/" target="_blank"><i class="social_icons fa fa-youtube-square"></i></a></li>
                                <li><a href="http://html.templines.com/" target="_blank"><i class="social_icons fa fa-vimeo-square"></i></a></li>
                                <li><a href="http://html.templines.com/" target="_blank"><i class="social_icons fa fa-twitter-square"></i></a></li>
                                <li class="li-last"><a href="http://html.templines.com/" target="_blank"><i class="social_icons fa fa-tumblr-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar" id="nav">
                    <div class="container">
                        <div class="header-navibox-1">
                            <!-- Mobile Trigger Start-->
                            <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                            <!-- Mobile Trigger End-->
                            <a class="navbar-brand scroll" href="<?php echo home_url();?>"><img class="normal-logo" src="<?php global $ozun; echo $ozun['logo-white']['url'] ?>" alt="logo"><img class="scroll-logo hidden-xs" src="<?php global $ozun; echo $ozun['logo-black']['url'] ?>" alt="logo"></a>
                        </div>
                        <div class="header-navibox-2">
                           
                                
                                <?php 

                                    wp_nav_menu(array(

                                            'theme_location'=>'main-menu',
                                            'menu_class'=>'yamm main-menu nav navbar-nav',
                                            

                                     ));
                                ?>
                           
                              
                             
                            
                        </div>
                        <div class="header-navibox-3">
                            <ul class="nav navbar-nav hidden-xs clearfix vcenter">
                                <li><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></li>
                                <li>
                                    <button class="js-toggle-screen toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="header-navibox-4">
                            <div class="header-cart"><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a><span class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count();?></span></div>
                            <div class="header-language-nav dropdown">
                                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">English<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">arabic</a></li>
                                    <li><a href="#">Italy</a></li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>