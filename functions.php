<?php

add_action( 'wp_enqueue_scripts', 'computaid_styles' );
add_action( 'wp_enqueue_scripts', 'computaid_js' );

function computaid_styles() {
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/assets/css/uikit.min.css' );
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array('uikit') );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array('uikit','bootstrap-grid') );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
}

function computaid_js() {
    wp_enqueue_script('jquery');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script( 'uikit', get_template_directory_uri() . '/assets/js/uikit.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'uikit-icons', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array('jquery'), null, true);
}

add_theme_support( 'custom-logo');
add_theme_support( 'widgets' );
add_filter('widget_text', 'do_shortcode');

// Register menu
register_nav_menus( array(
    'primary'  => __( 'Header menu', 'fe_starter' ),
) );

// Adding standart menu function
function courage_default_menu() {
    echo '<ul id="mainnav-menu" class="menu">'. wp_list_pages('title_li=&echo=0') .'</ul>';
}