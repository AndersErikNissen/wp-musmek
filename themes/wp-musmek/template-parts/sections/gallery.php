<?php
$data = get_section_data( 'section_gallery_', get_the_ID() );

if ( $data ) : ?>

<section class="section-gallery section">
  <div class="section-gallery__wrapper">
    <ul class="section-gallery__images">
      <?php foreach ($data as $id) : if ( $id ) : ?>
        <li class="section-gallery__image-container">
          <?= wp_get_attachment_image( $id, 'medium-large', false, array(
            'sizes' => '(min-width: 960px) 33.33vw, 66.66vw',
          ) ); ?>
        </li>
      <?php endif; endforeach; ?>
    </ul>
  </div>
</section>

<?php endif;