<?php
$data = get_section_data( 'section_reviews_', get_the_ID() );

if ( $data && !empty( $data['reviews'] ) ) : 
$review_posts = $data['reviews']; ?>

<section class="section-reviews section">
  <?php get_template_part( 'template-parts/parts/section-header', null, array( 'data' => $data, 'heading_class' => 'h2' ) ); ?>
  
  <div class="section-reviews__content cols-10">
    <div class="section-reviews__reviews">
      <?php foreach ( $review_posts as $post ) {
        setup_postdata( $post );
        get_template_part( 'template-parts/parts/review' );
      }; ?>
    </div>
  <div>
</section>

<?php 
wp_reset_postdata();
endif; 