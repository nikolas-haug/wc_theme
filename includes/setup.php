<?php

function watercress_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-background', array(
        'defaut' => '#fff', // add default bg color here
        'wp-head-callback'       => 'starter_theme_custom_background_cb' // adjust custom callback in 'custom' folder
    ));

    register_nav_menu( 'primary', __('Primary', 'watercress') );
}