<?php 
$the_review = get_field( 'the_review' );
$truncated_review = false;

if ( $the_review ) {
  if ( mb_strlen( $the_review ) > 200 ) {
    $truncated_review = substr( $the_review, 0, 200 ) . '<span class="btn--read-more js-toggle-read-more"> ...Læs mere</span>';
    $the_review = $the_review . '<span class="btn--read-more js-toggle-read-more"> ...Læs mindre</span>';
  }
}
?>

<div class="p-review">
  <div class="p-review__icon">
    <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.8741 2.4581L7.35928 9.21788C9.3364 9.6648 11.0389 11.6201 11.0389 14.2458C11.0389 17.3743 8.67736 20 5.54692 20C2.52633 20 0 17.486 0 14.2458C0 12.9609 0.384438 11.3408 1.81236 8.60335L6.42563 0L10.8741 2.4581ZM23.8901 2.4581L20.3204 9.21788C22.2975 9.6648 24 11.6201 24 14.2458C24 17.3743 21.6384 20 18.508 20C15.5423 20 12.9611 17.486 12.9611 14.2458C12.9611 12.9609 13.3455 11.3408 14.8284 8.60335L19.3867 0L23.8901 2.4581Z" fill="currentColor"/>
    </svg>
  </div>
  
  <?php if ( $the_review ) : ?>
    <div class="p-review__main <?= $truncated_review ? 'js-truncated' : ''; ?>">
      <p class="p-review__text--full p text-center"><?= $the_review; ?></p>
      <?php if ( $truncated_review ) : ?>
        <p class="p-review__text--truncated p text-center"><?= $truncated_review; ?></p>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  
  <?php if ( get_field( 'name' ) ) : ?>
    <div class="p-review__name-wrapper">
      <p class="label text-center"><?php the_field( 'name' ); ?></p>
    </div>
  <?php endif; ?>
</div>