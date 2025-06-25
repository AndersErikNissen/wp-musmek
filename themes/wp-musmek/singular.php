<?php
  get_header();

  if ( have_posts() ) :

    while ( have_posts() ) :
      the_post();
      if ( is_front_page() ) :
        get_template_part( 'template-parts/sections/text' );
        get_template_part( 'template-parts/sections/gallery' );
      endif;

    endwhile;

  endif;

  get_footer();
