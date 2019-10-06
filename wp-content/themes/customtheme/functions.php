<?php

// function custom_theme_assets() {
//     wp_enqueue_style( 'style', get_stylesheet_uri() );
// }
//     add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
    
function your_theme_enqueue_scripts() {
    // all styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/menu.css');
    // all scripts
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
    wp_enqueue_script( 'bootstrap-swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/menu.js', array('jquery'), true );
}
    add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );