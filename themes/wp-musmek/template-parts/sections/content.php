<?php
$data = get_section_data( 'section_content_', get_the_ID() );
$has_content = !empty( $data['content'] );

if ( $data && $has_content ) : ?>

<section class="section-content section">
  <div class="cols-6">
    <div class="p rte">
      <?= $data['content']; ?>
    </div>
  </div>
</section>

<?php endif;