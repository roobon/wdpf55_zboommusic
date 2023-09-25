<?php 
    function zboomMusic_setup(){
        add_theme_support("post-thumbnails");
        add_theme_support( 'menus' );
        add_theme_support( 'custom-background' );
        
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true, 
        );
        
        add_theme_support( 'custom-logo', $defaults );

        register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'zboommusic' ),
	    	'mini_menu'  => __( 'Mini Mobile Menu', 'zboommusic' ),
		) );

    }
    add_action('after_setup_theme', 'zboomMusic_setup');

// For Widgets
   
    function zboommusic_register_widgets() {
        register_sidebar( array(
            'name' => __( 'Sidebar Widgets', 'zboommusic'),
            'id' => 'right-sidebar-widget',
            'description' => __( 'A widget area located to the right hand side', 'zboommusic' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
        }       
add_action( 'widgets_init', 'zboommusic_register_widgets');



function create_custom_post_type() {

    register_post_type( 'sliders',
    
        array(
        'labels' => array(
        'name' => __( 'Sliders' ),
        'singular_name' => __( 'Slider' )
        ),
        'public' => true,
        'supports' => array( 'title', 'thumbnail')
        )
        );
    }
    
    add_action( 'init', 'create_custom_post_type' );




?>