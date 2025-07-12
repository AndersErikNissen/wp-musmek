<?php

/**
 * Plugin Name: Muskelmekanikeren - Custom post types
 * Description: Dette plugin står for at oprette de nødvendige Custom Post Types til Muskelmekanikeren temaet.
 * Version: 1.0
 */

add_action( 'init', function() {
  register_post_type('anmeldelse', 
    array(
      'labels' => array(
        'name'          => __('Anmeldelser', 'textdomain'),
        'singular_name' => __('Anmeldelse', 'textdomain'),
      ),
      'public'       => true,
      'has_archive'  => false,
      'show_in_rest' => false,
      'menu_icon'    => 'dashicons-format-quote',
      'rest_base'    => 'cases',
      'supports'     => array ( 'title', 'thumbnail', 'custom-fields' ),
      'taxonomies'   => array ( 'category', 'post_tag' ),
    )   
  );

  register_post_type('ydelse', 
    array(
      'labels' => array(
        'name'          => __('Ydelser', 'textdomain'),
        'singular_name' => __('Ydelse', 'textdomain'),
      ),
      'public'       => true,
      'has_archive'  => false,
      'show_in_rest' => false,
      'menu_icon'    => 'dashicons-open-folder',
      'rest_base'    => 'ydelser',
      'supports'     => array ( 'title', 'thumbnail', 'custom-fields' ),
      'taxonomies'   => array ( 'category', 'post_tag' ),
    )   
  );
} );