<?php
// Reference: https://www.advancedcustomfields.com/resources/local-json/

function custom_acf_json_filename( $filename, $post, $load_path ) {
  $filename = str_replace(
      array(
          ' ',
          '_',
      ),
      array(
          '-',
          '-'
      ),
      $post['title']
  );

  $filename = strtolower( $filename ) . '.json';

  return $filename;
}
add_filter( 'acf/json/save_file_name', 'custom_acf_json_filename', 10, 3 );

function custom_acf_json_save_paths( $paths, $post ) {
  if ( preg_match( '/(sektion|section)/i', $post['title'] ) ) {
    $paths = array( get_stylesheet_directory() . '/acf-json/sections' );
  }
  
  if ( preg_match( '/(indstilling[er]*|option[s]*)/i', $post['title'] ) ) {
    $paths = array( get_stylesheet_directory() . '/acf-json/options' );
  }

  return $paths;
}
add_filter( 'acf/json/save_paths', 'custom_acf_json_save_paths', 10, 2 );