<?php

// Setup
define('WATERCRESS_DEV_MODE', true); // defines dev or production mode

// Includes
include( get_theme_file_path( '/includes/enqueue.php' ));
include( get_theme_file_path( '/includes/setup.php' ));
include( get_theme_file_path( '/includes/widgets.php' ));
include( get_theme_file_path( '/includes/custom-posts.php' ));
include( get_theme_file_path( '/includes/theme-customizer.php' ));

// Hooks - Plugin API
add_action( 'wp_enqueue_scripts', 'watercress_enqueue' );
add_action( 'after_setup_theme', 'watercress_setup_theme' );
add_action( 'widgets_init', 'watercress_widgets' );
add_action( 'customize_register', 'watercress_cusotomize_register' );
add_action( 'init', 'watercress_custom_post_types' );

// Shortcodes

// Custom
include( get_theme_file_path( '/custom/custom-bg-callback.php' ));