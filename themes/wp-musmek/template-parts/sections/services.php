<?php
$data = get_section_data( 'section_services_', get_the_ID() );

if ( $data && !empty( $data['services'] ) ) :

$service_posts = $data['services'];
$show_numbers = get_field( 'show_numbers' ); 

if ( $service_posts ) : ?>

<section class="section-services section">
  <div class="section-services__content cols-10">
    <ul class="section-services__posts">
      <?php foreach ($service_posts as $key => $post) :
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

          <?php if ( get_field( 'read_more_link' ) ) : ?>
            <a class="btn--link" href="<?php the_field( 'read_more_link' ); ?>">Læs mere</a>
          <?php endif; ?>
        </li>
      <?php endforeach; wp_reset_postdata(); ?>
    </ul>
  </div>
</section>

<?php endif; endif;