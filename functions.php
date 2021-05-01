<?php

    // Enable featured image on posts, for no especifical reason
    add_theme_support('post-thumbnails');


    //adding all the files related to the BS4
    function my_scripts() {
        wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
        wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
        wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
        wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
    

    //adding the main styles and scripts(own code)
    function theme_scripts() {

        // adding css
        wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/main.css', '1.0', 'all' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', '1.0', 'all' );
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',array(), null );

        // adding js
        // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', 1.1, true);
    }   
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );


    //adding scripts again but at the beginning of the code
    add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );
    function my_custom_script_load(){
        wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/js/main.js', [], null, true  );
        wp_enqueue_script( 'header-script', get_stylesheet_directory_uri() . '/js/header.js', [], null, true  );
        wp_enqueue_script( 'tools-script', get_stylesheet_directory_uri() . '/js/tools.js', [], null, true  );
        wp_enqueue_script( 'owl-script', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', [], null, true  );
        wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/167731d55a.js');
    }

    //adding the menus
    function register_my_menus(){
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'extra-menu' => __('Extra Menu')
            )
        );
    }

    add_action('init', 'register_my_menus' );

    //adding attributes to navigations items
    function add_menu_link_class( $atts, $item, $args ) {
        if($args->link_class) {
            $atts['class'] = $args->link_class;
        }
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

    function add_menu_list_item_class($classes, $item, $args) {
        if($args->list_item_class) {
            $classes[] = $args->list_item_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

    add_theme_support( 'title-tag' ); 
    add_theme_support( 'custom-logo',[
        'header-text' => [ 'site-title', 'site-description' ],
        'height' => 71,
        'width' => 268,
        'flex-width' => true,
        'flex-height' => true,
    ]);


  


/* CUSTOM POST TYPES */

function staff_post_type(){

    $args = array(
        'labels' => array(
            'name' => 'Staff',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),

    );

    register_post_type('staff', $args);
} 

add_action('init', 'staff_post_type');