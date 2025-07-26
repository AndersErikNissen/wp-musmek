<?php
$data = get_section_data( 'section_services_overview_', get_the_ID() );

if ( $data && !empty( $data['services'] ) ) :

$service_posts = $data['services'];
$show_numbers = get_field( 'show_numbers' ); ?>

<section class="section-services-overview section">
  <div class="section-services-overview__content cols-10">
    <?php if ( !empty( $data['title'] ) || !empty( $data['description'] ) ) : ?>
      <div class="section-services-overview__aside">
        <?php if ( !empty( $data['title'] ) ) : ?>
          <h2 class="h1"><?= $data['title'] ?></h2>
        <?php endif; ?>

        <?php if ( !empty( $data['description'] ) ) : ?>
          <p class="p-large"><?= $data['description'] ?></p>
        <?php endif; ?>

        <?php if ( !empty( $data['button'] ) ) : ?>
          <div class="section-services-overview__btn">
            <a class="btn" href="<?php echo $data['button']['url']; ?>" target="<?php echo $data['button']['target'] ?? '_self'; ?>">
              <?php echo $data['button']['title']; ?>
            </a>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ( $service_posts ) : ?>
      <ul class="section-services-overview__posts">
        <?php foreach ($service_posts as $key => $post) :
          setup_postdata( $post ); ?>
          <li class="section-services-overview__post">
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
        <?php endforeach; ?>
      </ul>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</section>

<?php endif;