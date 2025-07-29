<?php
$data = get_section_data( 'section_page_', get_the_ID() );
$has_content = !empty( $data['content'] );

if ( $data && $has_content ) : ?>

<section class="section-page section">
  <div class="cols-6">
    <?php if ( !empty( $data['title'] ) ) : ?>
      <h1 class="h1"><?= $data['title'] ?></h1>
    <?php endif; ?>

    <div class="section-page__content p rte">
      <?= $data['content']; ?>
    </div>
  </div>
</section>

<?php endif;