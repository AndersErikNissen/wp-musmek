<?php
$data = get_section_data( 'section_services_', get_the_ID() );

if ( $data && !empty( $data['services'] ) ) :

$service_posts = $data['services'];

if ( $service_posts ) : ?>

<section class="section-services section">
  <div class="section-services__content cols-10">
    <ul class="section-services__posts">
      <?php foreach ($service_posts as $key => $post) :
        setup_postdata( $post ); ?>
        <li class="section-services__post">
          <?php if ( get_field( 'title' ) ) : ?>
            <h3 class="h2"><?php the_field( 'title' ); ?></h3>
          <?php endif; ?>

          <?php if ( get_field( 'full_description' ) ) : ?>
            <div class="p-large rte"><?php the_field( 'full_description' ); ?></div>
          <?php endif; ?>
        </li>
      <?php endforeach; wp_reset_postdata(); ?>
    </ul>
  </div>
</section>

<?php endif; endif;