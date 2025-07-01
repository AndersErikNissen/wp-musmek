<?php
$data = get_section_data( 'section_reviews_', get_the_ID() );
$review_posts = $data['reviews'];


$filtered_posts = array();

foreach ( $review_posts as $index => $post ) {
  $filtered_posts[$index % 3][] = $post;
}

if ( $data ) : ?>

<section class="section-reviews section">
  <div class="section-reviews__content cols-10">
    <?php if ( $review_posts ) : ?>
      <ul class="section-reviews__reviews">
        <?php for ( $i = 0; $i < 3; $i++ ) : ?>
          <li class="section-reviews__column-<?= $i; ?>">
            <?php foreach ( $filtered_posts[$i] as $post ) {
              setup_postdata( $post );
              get_template_part( 'template-parts/parts/review' );
            }; ?>
          </li>
        <?php endfor; ?>
      </ul>
    <?php wp_reset_postdata();
      endif; ?>
  <div>
</section>

<?php endif;