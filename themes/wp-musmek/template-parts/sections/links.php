<?php
$data = get_section_data( 'section_links_', get_the_ID() );

if ( $data ) : 

$links = array_filter( $data, function( $value ) {
  return !empty( $value[ 'title' ] ) && !empty( $value[ 'url' ] );
} ); 

if ( count( $links ) > 0 ) : ?>

<section class="section-links section">
  <div class="cols-6">
    <?php if ( !empty( $data['title'] ) ) : ?>
      <h2 class="h3"><?= $data['title']; ?></h2>
    <?php endif; ?>

    <ul class="section-links__links">
      <?php 
        $index = 0;
        foreach ( $links as $link ) : ?>
        <li class="section-links__link">
          <a class="<?= $index === 0 ? 'btn--cta' : 'btn' ?>" href="<?= $link[ 'url' ]; ?>" target="<?= !empty( $link[ 'target' ] ) ? $link[ 'target' ] : '_self'; ?>">
            <?= $link[ 'title' ]; ?>
          </a>
        </li>
      <?php $index++; endforeach; ?> 
    </ul>
  </div>
</section>

<?php endif; endif;