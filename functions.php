<?php

	// Add RSS links to <head> section
	automatic_feed_links();

	// Load jQuery
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script( 'jqueryJS', get_template_directory_uri() . '/js/jquery-2.1.3.min.js',array('jquery') );
        wp_enqueue_script('jqueryJS');
    }


	// BEGIN - Load the Main Theme CSS
	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	function theme_styles() {
	    wp_enqueue_style( 'wordpress_core_style', get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
	    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/application.min.css' );
	}

	// END - Load the Main Theme CSS


	// BEGIN - Load the Main Theme JS
	add_action( 'wp_enqueue_scripts', 'theme_js' );

	function theme_js() {
	    wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js',array('jquery') );
	    wp_register_script( 'scripts', get_template_directory_uri() . '/js/application.min.js',array('jquery') );

    	wp_enqueue_script( 'foundation' );
    	wp_enqueue_script( 'scripts' );
	}
	// END - Load the Main Theme JS


	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

	// BEGIN - Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }


    add_filter( 'wp_feed_cache_transient_lifetime', create_function( '$a', 'return 1800;' ) );

	// END - Declare sidebar widget zone

	register_nav_menus(
		array(
		'main-nav' => 'Main Navigation Menu'
		)
	)

?>
