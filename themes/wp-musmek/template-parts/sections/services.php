<?php
$data = get_section_data( 'section_services_', get_the_ID() );
$service_posts = $data['services'];

if ( $data ) : ?>

<section class="section-services section">
  <div class="section-services__content">
    <div class="section-services__aside">
      <?php if ( $data['title'] ) : ?>
        <h2><?= $data['title']; ?></h2>
      <?php endif; ?>

      <?php if ( $data['description'] ) : ?>
        <p><?= $data['description']; ?></p>
      <?php endif; ?>
    </div>

    <?php if ( $service_posts ) : ?>
      <ul class="section-services__posts">
        <?php 
          foreach ($service_posts as $post) :
            setup_postdata( $post ); ?>
            <li>

            </li>
          <?php endforeach; ?>
      </ul>
    <?php wp_reset_postdata();
      endif; ?>
        
    <?php print_r($data['services']); ?>
  <div>
</section>

<?php endif;