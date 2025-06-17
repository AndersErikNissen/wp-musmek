<?php

/**
 * Plugin Name: Muskelmekanikeren - Custom post types
 * Description: Dette plugin står for at oprette de nødvendige Custom Post Types til Muskelmekanikeren temaet.
 * Version: 1.0
 */

function generate_custom_post_types() {
  register_post_type('case', 
    array(
      'labels' => array(
        'name'          => __('Anmeldelser', 'textdomain'),
        'singular_name' => __('Anmeldelse', 'textdomain'),
      ),
      'public'       => true,
      'has_archive'  => true,
      'show_in_rest' => true,
      'menu_icon'    => 'dashicons-format-quote',
      'rest_base'    => 'cases',
      'supports'     => array ( 'title', 'thumbnail', 'custom-fields' ),
      'taxonomies'   => array ( 'category', 'post_tag' ),
    )   
  );
}

add_action('init','generate_custom_post_types');