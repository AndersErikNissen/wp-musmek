<?php 
  $options = get_option_fields();

  $logo = $options['footer_logo'];
?>

<footer class="p-the-footer">
  <div class="p-the-footer__main cols-full">
    <div class="p-the-footer__content">
      <?php if ( $logo ) : ?>
        <div class="p-the-footer__logo">
          <?php echo $logo; ?>
        </div>
      <?php endif; ?>

      <?php if ( $options['footer_description'] ) : ?>
        <p class="p-the-footer__description"><?php echo $options['footer_description']; ?></p>
      <?php endif; ?>

      <a class="btn--cta" href="<?php $options['booking_link']; ?>" target="_blank">
        Bestil tid
      </a>

    </div>

    <?php wp_nav_menu( array (
      'menu_class' => 'footer-menu',
      'container'  => false
    ) ); ?>

  </div>
  <div class="p-the-footer__bottom">
    <p>Copyright © <?php echo date( "Y" ); ?> Muskelmekanikeren</p>
  </div>
</footer>