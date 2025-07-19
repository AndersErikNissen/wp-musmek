<?php 
$data = get_section_data( '', get_the_ID() ); 
$random_posts = new WP_Query( array(
  'post_type' => 'post',
  'posts_per_page' => 2,
  'orderby' => 'rand',
  'post__not_in' => array( get_the_ID() ),
) ); ?>

<section class="section-post section">
  <?php if ( !empty( $data['title'] ) ) : ?>
    <h1 class="h1 text-center cols-8"><?= $data['title']; ?></h1>
  <?php endif; ?>

  <?php if ( !empty( $data['image'] ) ) : ?>
    <div class="section-post__image cols-8">
      <div class="ratio-container ratio--banner">
        <?= wp_get_attachment_image( $data['image'], 'larger', false, array(
          'sizes' => '(min-width: 1920px) 1920px, 100vw',
        ) ); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ( !empty( $data['full_description'] ) ) : ?>
    <div class="p rte cols-6"><?= $data['full_description']; ?></div>
  <?php endif; ?>

  <div class="section-post__random-posts cols-8">
    <h2 class="h2">Se også</h2>
    <ul class="section-post__random-posts-content">
      <?php foreach ( $random_posts->posts as $random_post ) : 
        setup_postdata( $random_post ); 
        $post_data = get_section_data( '', $random_post->ID ); 
        $description = $post_data['short_description']; 
        $has_description = !empty( $description );
        if ( $has_description && strlen( $description ) >  90 ) $description = substr( $description, 0, 90 ) . '...'; ?>

        <li class="section-post__random-post">
          <div class="ratio-container ratio--square">
            <?php if ( !empty( $post_data['image'] ) ) {
              echo wp_get_attachment_image( $post_data['image'], 'larger', false, array(
                'sizes' => '(min-width: 1920px) 720px, (min-width: 768px) 33.33vw, 100vw',
              ) );
            }; ?>
            <a class="cover" href="<?= get_permalink($random_post->ID); ?>"></a>
          </div>

          <?php if ( !empty( $post_data['title'] ) ) : ?>
            <h3 class="h3"><?= $post_data['title']; ?></h3>
          <?php endif; ?>

          <?php if ( $has_description ) : ?>
            <p class="p"><?= $description; ?></p>
          <?php endif; ?>

          <a class="btn--link" href="<?= get_permalink($random_post->ID); ?>">Læs mere</a>
        </li>
      <?php endforeach; 
      wp_reset_postdata(); ?>
    </ul>
  </div>
</section>

