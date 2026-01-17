<?php
$data = get_section_data( 'section_cards_', get_the_ID() );

if ( $data ) : 
  $cards = array_filter( $data['cards'], function( $value ) {
    return !empty( $value['title'] );
  } ); 

  $card_columns = count( $cards );
  $layout_columns = 10;

  if ( $card_columns < 3 ) {
    $layout_columns = 8;
  } else if ( $card_columns > 3 ) {
    $card_columns = 2;
  };

  if ( count( $cards ) > 0 ) : ?>

  <section class="section-cards section">
    <div class="cols-<?= $layout_columns; ?>">
      <?php if ( !empty( $data['title'] ) ) : ?>
        <h2 class="h2 text-center"><?= $data['title']; ?></h2>
      <?php endif; ?>

      <ul class="section-cards__cards" style="--columns:<?= $card_columns; ?>">
        <?php foreach ( $cards as $card ) : 
          $large_sub_title = ( $card['sub_title']['large_text_field'] ?: false );
          $small_sub_title = ( $card['sub_title']['small_text_field'] ?: false );
          ?>
          <li class="section-cards__card card-<?= $data['color_theme']; ?> <?php if ( $card['highlight'] ) echo 'highlight'; ?>">
            <h3 class="h3"><?= $card['title']; ?></h3>
    
            <?php if ( !empty( $card['description'] ) ) : ?>
              <div class="p rte"><?= $card['description']; ?></div>
            <?php endif; ?>

            <?php if ( $large_sub_title || $small_sub_title ) : ?>
              <span class="section-cards__card-sub-title">
                <?php if ( $large_sub_title ) : ?>
                  <span class="section-cards__card-large-sub-title"><?= $large_sub_title; ?></span>
                <?php endif; ?>

                <?php if ( $small_sub_title ) : ?>
                  <span class="section-cards__card-small-sub-title"><?= $small_sub_title; ?></span>
                <?php endif; ?>
              </span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?> 
      </ul>
    </div>
  </section>

<?php endif; endif;