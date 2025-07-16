<?php 
if ( have_posts() ) : 
$has_pagination = function_exists( 'get_next_posts_link' ) === true || function_exists( 'get_prev_posts_link' ) === true; ?>
  <section class="section-posts section">
    <ul class="section-posts__posts cols-10">
    <?php while ( have_posts() ) : the_post(); $data = get_section_data( '', get_the_ID() ); ?>
      <li class="section-posts__post">
        <div class="ratio-container ratio--square">
          <?php if ( !empty( $data['image'] ) ) {
            echo wp_get_attachment_image( $data['image'], 'larger', false, array(
              'sizes' => '(min-width: 1920px) 960px, (min-width: 768px) 50vw, 100vw',
            ) );
          }; ?>
          <a class="cover" href="<?php the_permalink(); ?>"></a>
        </div>

        <div class="section-posts__post-content">
          <?php if ( !empty( $data['title'] ) ) : ?>
            <h2 class="h3"><?= $data['title']; ?></h2>
          <?php endif; ?>

          <?php if ( !empty( $data['short_description'] ) ) : ?>
            <p class="p"><?= $data['short_description']; ?></p>
          <?php endif; ?>

          <a class="btn--link" href="<?php the_permalink(); ?>">Læs mere</a>
        </div>
      </li>
    <?php endwhile; ?>
    </ul>
    
    <?php if ( $has_pagination ) : ?>
      <div class="cols-6">
        <div class="section-posts__pagination">
          <?= paginate_links( array(
            'prev_text' => 'Forrige',
            'next_text' => 'Næste',
          ) ); ?>
        </div>
      </div>
    <?php endif; ?>
  </section>
<?php endif;