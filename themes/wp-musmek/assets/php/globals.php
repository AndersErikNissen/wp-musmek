<?php 

function get_section_data( $path, $post_id ) {
  $fields = get_fields( $post_id );

  if ( !$fields ) return false;

  $data = array();

  foreach ( $fields as $key => $value ) {
    if ( str_contains( $key, $path ) ) {
      $name = str_replace( $path, '', $key );
      $data[ $name ] = $value;
    }
  }

  return $data;
}

function settings() {
  $fields = get_fields( get_page_by_path( 'indstillinger' )->ID );
  
  foreach ( $fields as $key => $value ) {
    if ( str_contains( $key, 'logo' ) ) {

    }
  }

  return $fields;
}
