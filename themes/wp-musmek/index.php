<?php
get_header();

if ( is_home() ) : // is_home() = Posts page
  $page_id = get_option( 'page_for_posts' );
  
  $page_query = new WP_Query( array(
    'p'         => $page_id,
    'post_type' => 'page',
  ) );

  if ( $page_query->have_posts() ) {
    while ( $page_query->have_posts() ) {
      $page_query->the_post();

      get_template_part( 'template-parts/sections/text' );
      get_template_part( 'template-parts/sections/image' );
    }

    wp_reset_postdata();
  }

  get_template_part( 'template-parts/sections/posts' );
endif;

get_footer();
