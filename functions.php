<?php 

    function zboomMusic_setup(){
        add_theme_support("post-thumbnails");
        add_theme_support( 'menus' );

        register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'zboommusic' ),
	    	'mini_menu'  => __( 'Mini Mobile Menu', 'zboommusic' ),
		) );

    }


    add_action('after_setup_theme', 'zboomMusic_setup');



?>