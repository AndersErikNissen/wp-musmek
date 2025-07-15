<?php $data = get_section_data( '', get_the_ID() ); ?>

<section class="section-post section">
  <div class="cols-6">
    <?php if ( !empty( $data['title'] ) ) : ?>
      <h1 class="h1"><?= $data['title']; ?></h1>
    <?php endif; ?>

    <?php if ( !empty( $data['full_description'] ) ) : ?>
      <div class="p rte"><?= $data['full_description']; ?></div>
    <?php endif; ?>
  </div>
</section>