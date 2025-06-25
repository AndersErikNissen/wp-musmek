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

    <?php if ( $data['button'] ) : ?>
      <div class="section-text__btn">
        <a class="btn" href="<?php echo $data['button']['url']; ?>" target="<?php echo $data['button']['target'] ?? '_self'; ?>">
          <?php echo $data['button']['title']; ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php endif;