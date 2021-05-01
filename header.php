<!DOCTYPE html>
<html lang="en">
   <head>
   <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
      <!-- Required meta tags -->
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- adding the codes -->
      <?php wp_head(); ?> 
   </head>
   <body>
      <header id="back-top">
         <div class="container-fluid custom-container header-container">
            <nav class="navbar navbar-expand-md">
               <!-- Logo -->
               <?php
                if( function_exists('the_custom_logo') ){
                the_custom_logo();
                }
                ?>
               <!-- END OF Logo -->
               <!-- Hamburguer -->
               <button aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed" data-target="#navbarContent" data-toggle="collapse" type="button">
               <span class="sr-only">Menu</span>
               <span class="icon-bar top"></span>
               <span class="icon-bar middle"></span>
               <span class="icon-bar bottom"></span>
               </button>
               <!-- END OF Hamburguer -->
               <!-- Navbar Content -->
               <div class="collapse navbar-collapse" id="navbarContent">
                     <?php wp_nav_menu(array(
                    // 'menu' => 'main-menu',
                    // 'container' => false,
                    // 'list_item_class' => "nav-item",
                    // 'link_class' => "nav-link",
                    'theme_location' => 'header-menu',
                    'list_item_class' => "nav-item",
                    'link_class' => "nav-link",
                    'container' => false,
                    'menu_class'=> 'navbar-nav ml-auto'
                    )); ?>
               </div>
               <!-- END OF Navbar Content -->
            </nav>
         </div>
      </header>