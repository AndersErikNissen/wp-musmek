<?php
$data = get_section_data( 'section_cards_', get_the_ID() );

if ( $data ) : 

$cards = array_filter( $data['cards'], function( $value ) {
  return !empty( $value['title'] );
} ); 

$card_columns = count( $cards );
$layout_columns = 10;
if ( $card_columns < 3 ) $layout_columns = 8;
if ( $card_columns > 3 ) $card_columns = 2;

if ( count( $cards ) > 0 ) : ?>

<section class="section-cards section">
  <div class="cols-<?= $layout_columns; ?>">
    <?php if ( !empty( $data['title'] ) ) : ?>
      <h2 class="h2 text-center"><?= $data['title']; ?></h2>
    <?php endif; ?>

    <ul class="section-cards__cards" style="--columns:<?= $card_columns; ?>">
      <?php foreach ( $cards as $card ) : ?>
        <li class="section-cards__card">
          <h3 class="h3"><?= $card['title']; ?></h3>
  
          <?php if ( !empty( $card['description'] ) ) : ?>
            <div class="p rte"><?= $card['description']; ?></div>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php endif; endif;