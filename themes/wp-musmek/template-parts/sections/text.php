<?php
$data = get_section_data( 'section_text_', get_the_ID() );

if ( $data ) : ?>

<section class="section-text section">
  <div class="cols-6">
    <?php if ( $data['title'] ) : ?>
      <h1 class="h1 text-center">
        <?php echo $data['title']; ?>
      </h1>
    <?php endif; ?>

    <?php if ( $data['description'] ) : ?>
      <p class="p-large text-center">
        <?php echo $data['description']; ?>
      </p>
    <?php endif; ?>
  </div>
</section>

<?php endif;