<?php
$data = get_section_data( 'section_services_', get_the_ID() );

if ( $data && !empty( $data['services'] ) ) :

$service_posts = $data['services'];
$show_numbers = get_field( 'show_numbers' ); ?>

<section class="section-services section">
  <div class="section-services__content cols-10">
    <div class="section-services__aside">
      <?php if ( $data['title'] ) : ?>
        <h2 class="h1"><?= $data['title']; ?></h2>
      <?php endif; ?>

      <?php if ( $data['description'] ) : ?>
        <p class="p-large"><?= $data['description']; ?></p>
      <?php endif; ?>
    </div>

    <?php if ( $service_posts ) : ?>
      <ul class="section-services__posts">
        <?php 
          foreach ($service_posts as $key => $post) :
            setup_postdata( $post ); ?>
            <li class="section-services__post">
              <?php if ( $show_numbers ) : ?>
                <p class="label">0<?= $key + 1; ?></p>
              <?php endif; ?>

              <?php if ( get_field( 'title' ) ) : ?>
                <h3 class="h2"><?php the_field( 'title' ); ?></h3>
              <?php endif; ?>

              <?php if ( get_field( 'short_description' ) ) : ?>
                <p class="p"><?php the_field( 'short_description' ); ?></p>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
      </ul>
    <?php wp_reset_postdata();
      endif; ?>
  <div>
</section>

<?php endif;