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

// function custom_acf_json_save_paths( $paths, $post ) {
//   $has_found_path = false;

//   if ( str_starts_with( $post['title'], 'Section' ) || str_starts_with( $post['title'], 'Sektion' ) ) {
//     $has_found_path = true;
//     $paths[] = array ( get_stylesheet_directory() . '/acf/sections' );
//   }
  
//   if ( !$has_found_path ) {
//     $paths[] = array ( get_stylesheet_directory() . '/acf' );
//   }

//   return $paths;
// }
// add_filter( 'acf/json/save_paths', 'custom_acf_json_save_paths', 10, 2 );

// function my_acf_json_load_point( $paths ) {
//     // Remove the original path (optional).
//     unset($paths[0]);

//     // Append the new path and return it.
//     $paths[] = get_stylesheet_directory() . '/acf';

//     return $paths;
// }
// add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );
