<?php
  get_header();

  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      // Render content...
    }
  } else {
    // Render content...
  }

  get_footer();
