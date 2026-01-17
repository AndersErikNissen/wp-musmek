<?php
/* Hide ADMIN-BAR */
add_filter( 'show_admin_bar', '__return_false' );

include get_theme_file_path( '/assets/php/redirects.php' );
include get_theme_file_path( '/assets/php/acf.php' );
include get_theme_file_path( '/assets/php/features.php' );
include get_theme_file_path( '/assets/php/globals.php' );

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'reset', get_theme_file_uri( 'assets/css/reset.css' ) );
  wp_enqueue_style( 'main', get_theme_file_uri( 'assets/css/main.css' ) );
  wp_enqueue_style( 'typography', get_theme_file_uri( 'assets/css/typography.css' ) );
  wp_enqueue_style( 'header', get_theme_file_uri( 'assets/css/header.css' ) );
  wp_enqueue_style( 'sections', get_theme_file_uri( 'assets/css/sections.css' ) );
  wp_enqueue_style( 'parts', get_theme_file_uri( 'assets/css/parts.css' ) );
  wp_enqueue_style( 'footer', get_theme_file_uri( 'assets/css/footer.css' ) );
  wp_enqueue_style( 'top-priority', get_theme_file_uri( 'assets/css/top-priority.css' ) );
} );

add_action( 'get_footer', function() {
  wp_enqueue_script( 'main', get_theme_file_uri( 'assets/js/main.js' ), array(), "1.0", TRUE );
} );
