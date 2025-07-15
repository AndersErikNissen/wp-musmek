<?php
  get_header();

  if ( have_posts() ) :

    while ( have_posts() ) :
      the_post();
      
      if ( is_page( 'indstillinger' ) || is_page( 'options' ) ) {
        // Do nothing!
        // Since it is being redirected, so it's just to be sure no content is rendered...
      } elseif ( is_single() ) {
        get_template_part( 'template-parts/sections/post' );
      } elseif ( is_front_page() ) {
        get_template_part( 'template-parts/sections/text' );
        get_template_part( 'template-parts/sections/gallery' );
        get_template_part( 'template-parts/sections/services-overview' );
        get_template_part( 'template-parts/sections/reviews' );
        get_template_part( 'template-parts/sections/contact-form' );
        
      } elseif ( is_page() && !is_404() ) {
        get_template_part( 'template-parts/sections/text' );
        get_template_part( 'template-parts/sections/image' );
        get_template_part( 'template-parts/sections/services' );
        get_template_part( 'template-parts/sections/faq' );
      }
    endwhile;

  endif;

  get_footer();
