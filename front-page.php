
<?php 


get_header(); ?>

<div class="wrap-content">
   <div class="banner">
      <div class="tagline-container">
         <div class="container">
            <div class="row">
               <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                  <h1 class="tagline"><?php echo get_option('blogdescription'); ?></h1>
               </div>
            </div>
         </div>
      </div>
      <!-- <a class="scroll-link local-scroll d-none d-md-flex" href="#info-contact" title="Scroll Down">
      <img alt="Scroll Down" src="img/mouse.png">
      </a> -->
   </div>

   <section class="about-section">
      <div class="container">
            <div class="row">
               <div class="col-12 col-md-6">
                  <h2 class="tagline-about">
                        <span>We bring the right</span>
                        <span>people together</span>
                  </h2>
                  <p>
                        As you may already know, there are an infinite number of things you can test on your site to help you increase sales. From layout to copy to design, there are limitless combinations of changes that may improve your visitor-to-sale conversion rate.
                  </p>
                  <a href="#" class="btn-about" title="Contact Us">Contact Us</a>
               </div>
               <div class="col-12 col-md-6">
                  <div class="img-container">
                        <div class="image-stack__item image-stack__item--top">
                           <img src="<?php echo get_template_directory_uri() . '/assets/img/about-one.png'; ?>" class="img-responsive" alt="Casumi">
                        </div>
                        <div class="image-stack__item image-stack__item--bottom">
                           <img src="<?php echo get_template_directory_uri() . '/assets/img/about-two.png'; ?>" class="img-responsive" alt="Casumi">
                           
                        </div>
                  </div>
               </div>
            </div>
      </div>
   </section>

   <section class="story-section">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
               <h2>Behind the Story</h2>
               <p>
                  By help millions of business learn more abouth their customer, we like to think we know a thing or two about customer satisfaction.
               </p>
            </div>
         </div>
         <div class="row">
            <div class="col-12 col-md-3">
               <div class="story-numbers">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/incon-1.png'; ?>" class="img-fluid" alt="Cases">
                  <h3>499+</h3>
                  <p>Successfully Completed Cases</p>
                  <div class="divider"></div>
               </div>
            </div>
            <div class="col-12 col-md-3">
               <div class="story-numbers">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-2.png'; ?>" class="img-fluid" alt="Customer">
                  <h3>100% </h3>
                  <p>Satisfaction of our customers</p>
                  <div class="divider"></div>
               </div>
            </div> 
            <div class="col-12 col-md-3">
               <div class="story-numbers">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-3.png'; ?>" class="img-fluid" alt="Consultants">
                  <h3>550</h3>
                  <p>Highly specialised consultants</p>
                  <div class="divider"></div>
               </div>
            </div>
            <div class="col-12 col-md-3">
               <div class="story-numbers">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-4.png'; ?>" class="img-fluid" alt="Profits">
                  <h3>3X</h3>
                  <p>Increased Profits</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="testimonials" id="testimonials-section">
      <div class="overlay"></div>
      <div class="container">
         <div class="row heading-text">
            <div class="col-12 col-md-4 col-lg-5">
               <h2>
                  World class teams
               </h2>
            </div>
            <div class="col-12 col-md-8 col-lg-7">
               <p>The combination of exceptional and exciting people creates a competitive but informal environment - and a great platform for you to develop.</p>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
            <?php
               $homepageStaff = new WP_Query(array(
                  'posts_per_page' => 6,
                  'post_type' => 'staff',
                  'orderby' => 'date',
                  'order' => 'ASC',
               )); ?>
               

            <div class="owl-carousel" id="testimonials">
               <?php while($homepageStaff->have_posts()){
                  $homepageStaff->the_post(); ?>
                  <div class="item">
                     <div class="testimonial-content">
                        <?php if(has_post_thumbnail()):?>
                           <img src="<?php the_post_thumbnail_url('blob-large');?>" alt="<?php the_title(); ?>" class="img-fluid">
                        <?php endif;?>
                        <p class="position"> <?php echo get_post_meta($post->ID, 'position', true); ?>  </p>
                        <p class="name"><?php the_title(); ?></p>
                        <p class="quote">
                           <?php echo wp_trim_words(get_the_content(), 50) ?>
                        </p>
                        <ul class="social-icons">
                           <li><?php echo get_post_meta($post->ID, 'facebook', true); ?> </li>
                           <li><?php echo get_post_meta($post->ID, 'twitter', true); ?> </li>
                           <li><?php echo get_post_meta($post->ID, 'instagram', true); ?> </li>
                        </ul>
                     </div>
                  </div>
              <?php } ?>
            </div>

            </div>
         </div>
      </div>
   </section>
</div>


<?php get_footer(); ?>