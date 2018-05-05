    <footer class="footer">
          
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <ul class="footer-social-nets">
                  <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="<?php the_permalink();?>"><?php global $ozun;echo $ozun['facebook-links']?></a></li>
                  <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="<?php the_permalink();?>"><?php global $ozun;echo $ozun['twitter-links']?></a></li>
                  <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="<?php the_permalink();?>"><?php global $ozun;echo $ozun['google-links']?></a></li>
                  <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="<?php the_permalink();?>"><?php global $ozun;echo $ozun['pinterest-links']?></a></li>
                  <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="<?php the_permalink();?>"><?php global $ozun;echo $ozun['dribble-links']?></a></li>
                  <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="<?php the_permalink();?>"><?php global $ozun;echo $ozun['behance-links']?></a></li>
                  <li class="footer-social-nets__item"><a class="footer-social-nets__link" href="<?php the_permalink();?>"><?php global $ozun;echo $ozun['instagram-links']?></a></li>
                </ul>
              </div>
            </div>
          </div>


          <div class="footer__main">
            <div class="container">
              <div class="row">
                <?php if(!dynamic_sidebar('footer-sidebar')):?>
                <div class="col-sm-4">
                  <div class="footer-section"><a class="footer__logo" href="home.html"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets//media/general/logo-lg.png" alt="Logo"></a></div>
                </div>
                <div class="col-sm-4">
                  <section class="footer-section footer-section_links">
                    <h3 class="footer-section__title">useful links</h3>
                    <ul class="footer-list list-unstyled">
                      <li class="footer-list__item"><a class="footer-list__link" href="about.html">About Us</a></li>
                      <li class="footer-list__item"><a class="footer-list__link" href="contact.html">Contact Us</a></li>
                      <li class="footer-list__item"><a class="footer-list__link" href="about.html">What We Do</a></li>
                      <li class="footer-list__item"><a class="footer-list__link" href="home.html">We Are Hiring</a></li>
                      <li class="footer-list__item"><a class="footer-list__link" href="portfolio-1.html">Our Works</a></li>
                      <li class="footer-list__item"><a class="footer-list__link" href="blog-1.html">The News</a></li>
                      <li class="footer-list__item"><a class="footer-list__link" href="home.html">FAQ’s</a></li>
                    </ul>
                  </section>
                </div>
                <div class="col-sm-4">
                  <section class="footer-section">
                    <h3 class="footer-section__title">contact info</h3>
                    <p>Address:  121 King Street, Melbourne, Victoria 3000, AUS</p>
                    <p>Phone:  (123) 456 74700   /   (123) 456 78700</p>
                    <p>Email:  ozun.creative@domain.com</p><a class="footer__link" href="home.html">get directions</a>
                  </section>
                </div>
                <?php endif;?>
              </div>
            </div>
          </div>


          <div class="copyright">
            <div class="row">
              <div class="col-xs-12"><a class="copyright__link" href="<?php echo home_url(); ?>"></a> <?php global $ozun; echo $ozun['copyright-text']?></div>
            </div>
          </div>
        </footer>
        <!-- .footer-->
    </div>
    <!-- end layout-theme-->
    
    
 
    
   

    <?php wp_footer();?>

</body>



</html>