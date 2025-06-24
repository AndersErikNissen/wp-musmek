<?php 
  $options = get_option_fields();

  $logo = $options['footer_logo'];
?>

<footer class="p-the-footer">
  <div class="p-the-footer__main cols-10">
    <div class="p-the-footer__content">
      <?php if ( $logo ) : ?>
        <div class="p-the-footer__logo">
          <?php echo $logo; ?>
        </div>
      <?php endif; ?>

      <?php if ( $options['footer_description'] ) : ?>
        <p class="p-the-footer__description p"><?php echo $options['footer_description']; ?></p>
      <?php endif; ?>

      <a class="btn--cta" href="<?php $options['booking_link']; ?>" target="_blank">
        Bestil tid
      </a>

    </div>

    <div class="p-the-footer__lists">
      <?php if ( $options['addresses']["1"] ) : ?>
        <div class="p-the-footer__list-item">
          <p class="p-the-footer__list-label">Adresse<?php if ( $options['addresses']["2"]["street_and_nr"] ) echo "r"; ?></p>

          <?php 
            foreach ( $options["addresses"] as $address ) { 
              if ( $address["street_and_nr"] ) {
                echo '<ul class="p-the-footer__list">';
                  echo "<li>" . $address["street_and_nr"] . "</li>";
                  if ( $address["citycode_and_city"] ) {
                    echo "<li>" . $address["citycode_and_city"] . "</li>";
                  }
                echo "</ul>";
              }
            }
          ?>
        </div>
      <?php endif; ?>
      
      <div class="p-the-footer__list-item">
        <p class="p-the-footer__list-label">Navigation</p>

        <?php wp_nav_menu( array (
          'menu_class' => 'p-the-footer__list',
          'container'  => false
        ) ); ?>
      </div>

      <div class="p-the-footer__list-item">
        <p class="p-the-footer__list-label">Kontakt</p>

        <ul class="p-the-footer__list">
          <?php if ( $options['contact']['tlf'] ) : ?>
            <li>
              <a href="tel:<?php echo $options['contact']['tlf']; ?>">Telefon</a>
            </li>
          <?php endif; ?>

          <?php if ( $options['contact']['email'] ) : ?>
            <li>
              <a href="mailto:<?php echo $options['contact']['email']; ?>">Email</a>
            </li>
          <?php endif; ?>

          <?php if ( $options['contact']['instagram'] ) : ?>
            <li>
              <a href="<?php echo $options['contact']['instagram']; ?>" target="_blank">Instagram</a>
            </li>
          <?php endif; ?>

          <?php if ( $options['contact']['facebook'] ) : ?>
            <li>
              <a href="<?php echo $options['contact']['facebook']; ?>" target="_blank">Facebook</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>

    </div>

  </div>
  <div class="p-the-footer__bottom cols-10">
    <p>Copyright © <?php echo date( "Y" ); ?> Muskelmekanikeren</p>
  </div>
</footer>