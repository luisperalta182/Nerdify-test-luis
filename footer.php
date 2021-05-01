<footer>
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6">
                     <p class="link-container">
                        <a class="logo-container" href="/" title="Company Name">
                        <img alt="Company Name Logo" class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/logo-footer.png'; ?>">
                        </a>
                     </p>
                     <ul class="social-icons">
                        <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-12 col-md-3">
                     <div class="sitemap">
                        <p class="title">Solutions</p>
                        <ul class="items-sitemap">
                           <li><a href="">Finance Strategy</a></li>
                           <li><a href="">Advertising</a></li>
                           <li><a href="">SMM</a></li>
                           <li><a href="">SEO</a></li>
                           <li><a href="">Google AdWords</a></li>
                        </ul>
                     </div>
                  </div>  
                  <div class="col-12 col-md-3">
                     <div class="sitemap">
                        <p class="title">Company</p>
                        <ul class="items-sitemap">
                           <li>8910 University Center Lane Suite 620</li>
                           <li>Sand Diego, CA 92102</li>
                           <li><a href="tel:18001554561" title="+1(800)155 4561">+1(800)155 4561</a></li>
                           <li><a href="mailto:info@example.com" title="info@example.com">info@example.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-lg-6 ml-auto">
                     <div class="navigation">
                        <!-- <ul class="footer-nav">
                           <li>
                              <a class="nav-link" href="/" title="About">About</a>
                           </li>
                           <li>
                              <a class="nav-link" href="" title="Sservices">Services</a>
                           </li>
                           <li>
                              <a class="nav-link" href="" title="Pricing">Pricing</a>
                           </li>
                           <li>
                              <a class="nav-link" href="" title="Blog">Blog</a>
                           </li>
                           <li>
                              <a class="nav-link" href="" title="Contact">Contact</a>
                           </li>
                        </ul> -->
                        <?php wp_nav_menu(array(
                        // 'menu' => 'main-menu',
                        // 'container' => false,
                        // 'list_item_class' => "nav-item",
                        // 'link_class' => "nav-link",
                        'theme_location' => 'extra-menu',
                        'list_item_class' => "",
                        'link_class' => "nav-link",
                        'container' => false,
                        'menu_class'=> 'footer-nav'
                        )); ?>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 mr-auto">
                     <div class="privacy">
                        <p>© 2021 Casumi, Made by DeoThemes</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <?php wp_footer(); ?>
   </body>
</html>