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

function get_option_fields() {
  $fields = get_fields( get_page_by_path( 'indstillinger' )->ID );

  $data = array();

  // Pick and format each logo
  foreach ( $fields as $key => $value ) {
    if ( str_contains( $key, '_logo' ) ) {
      $logo = $fields[$key]['vector'];

      if ( !$logo ) {
        $logo_img = $fields[$key]['image'];

        if ( $logo_img ) {
          $logo = wp_get_attachment_image( $logo_img, 'thumbnail', false, array(
            'loading' => 'eager',
          ) );
        }
      }

      if ( !$logo ) {
        $logo = false;
      }

      $data[$key] = $logo;
    } else {
      $data[$key] = $value;
    }
  }

  return $data;
}
