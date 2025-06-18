<?php

add_action( 'template_redirect', function() {
  if ( is_page( 'indstillinger' ) || is_page( 'options' ) ) {
    wp_redirect( home_url() );
    exit();
  }
} );