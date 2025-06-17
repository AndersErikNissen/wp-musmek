<?php
add_action( 'after_setup_theme', function() {
  add_theme_support (
    'html5',
    array (
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
      'navigation-widgets',
    )
  );

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' ); 
} );

add_action( 'init', function() {
  add_post_type_support( 'page', 'excerpt' );
  add_post_type_support( 'post', 'excerpt' );
} );