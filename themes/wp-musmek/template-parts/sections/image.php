<?php
$data = get_section_data( 'section_image_', get_the_ID() );

if ( $data && !empty( $data['image'] ) ) : 

$image = $data['image'];
$id = $image['id'];
$image_format = $data['image_format'];
$style = '';

if ( $image_format === 'natural' ) $style = 'style="--ratio:' . ( $image['height'] / $image['width'] * 100 ) . '%"';

switch ( $data['image_width'] ) {
  case 'narrow':
    $width_class = 'cols-6';
    $image_sizes = '(min-width: 768px) 50vw, ';
    break;
    
  case 'normal':
    $width_class = 'cols-8';
    $image_sizes = '(min-width: 768px) 66.66vw, ';
    break;
    
  default:
    $width_class = 'cols-full';
    $image_sizes = '';
}; ?>

<section class="section-image section">
  <div class="<?= $width_class; ?>">
    <div class="ratio-container ratio--<?= $image_format; ?>" <?= $style; ?>>
      <?= wp_get_attachment_image( $id, 'medium-large', false, array(
        'sizes' => '(min-width: 1920px) 1920px, ' . $image_sizes . '100vw',
      ) ); ?>
    </div>
  </div>
</section>

<?php endif;