<?php
$data = get_section_data( 'section_reviews_', get_the_ID() );
$review_posts = $data['reviews'];


$filtered_posts = array();

foreach ( $review_posts as $index => $post ) {
  $filtered_posts[$index % 3][] = $post;
}

if ( $data ) : ?>

<section class="section-reviews section">
  <div class="section-reviews__content cols-6">
    <?php if ( $review_posts ) : ?>
      <ul class="section-reviews__reviews">
        <pre>
          <?php print_r($filtered_posts[0]); ?> 
        </pre>
        <li class="section-reviews__review-column-0">
          <?php 
            foreach ($filtered_posts[0] as $post) {
              setup_postdata( $post );

              get_template_part( 'template-parts/parts/review' );

              wp_reset_postdata( );
            };
          ?>
        </li>
        
      </ul>
    <?php wp_reset_postdata();
      endif; ?>
  <div>
</section>

<?php endif;