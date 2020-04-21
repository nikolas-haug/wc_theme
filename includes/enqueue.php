<?php

function watercress_enqueue() {
    $uri = get_theme_file_uri( );
    
    // or: only get the version number associated with the main theme stylesheet (better for browser cacheing essential assets)
    $theme = wp_get_theme();
    define('THEME_VERSION', $theme->Version); // gets version written in your style.css
    
    // append query string to asset files depending on dev or production mode
    $ver = WATERCRESS_DEV_MODE ? time() : THEME_VERSION;

    // STYLES
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato&family=Zilla+Slab:ital,wght@0,400;0,500;1,300;1,400;1,600&display=swap', [], $ver );
    wp_register_style( 'main-style', get_stylesheet_uri(  ), [], $ver );

    wp_enqueue_style( 'google-fonts' );
    wp_enqueue_style( 'main-style' );

    // SCRIPTS
    wp_register_script( 'navigation_js', $uri . '/js/slider-nav.js', [], $ver, true );
    wp_register_script( 'scroll_js', $uri . '/js/scroll.js', [], $ver, true );
    wp_register_script( 'main_js', $uri . '/js/main.js', [], $ver, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'navigation_js' );
    wp_enqueue_script( 'scroll_js' );
    wp_enqueue_script( 'main_js' );
}