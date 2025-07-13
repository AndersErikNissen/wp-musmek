<?php 
  $options = get_option_fields();

  $logo = $options['header_logo']; ?>

<header class="p-the-header">
  <nav class="p-the-header__content cols-full">
    <?php if ( $logo ) : ?>
      <div class="p-the-header__logo-wrapper">
        <div class="p-the-header__logo">
          <?php echo $logo; ?>
          <a class="cover" href="/"></a>
        </div>
      </div>
    <?php endif; ?>

    <?php wp_nav_menu( array (
      'menu_class' => 'p-the-header__menu menu hidden-tablet',
      'container'  => 'ul'
    ) ); ?>

    <div class="p-the-header__btns">
      <a class="btn--cta hidden-mobile" href="<?php $options['booking_link']; ?>" target="_blank">
        Bestil tid
      </a>
    </div>

    <button class="menu-btn hidden-desktop js-menu-btn">
      <span class="menu-btn__label-wrapper">
        <span class="menu-btn__label">
          <span>Luk</span>
          <span>Menu</span>
        </span>
      </span>
      <div class="menu-btn-icon">
        <div class="top"></div>
        <div class="center-1"></div>
        <div class="center-2"></div>
        <div class="bottom"></div>
      </div>
    </button>
  </nav>
</header>

<div class="mobile-menu">
  <div class="mobile-menu__content">
    <?php wp_nav_menu( array (
      'menu_class' => 'mobile-menu__menu',
      'container'  => 'ul'
    ) ); ?>

    <ul class="mobile-menu__contact">
      <?php if ( $options['contact']['tlf'] ) : ?>
        <li class="mobile-menu__contact-item">
          <a href="tel:<?php echo $options['contact']['tlf']; ?>">Telefon</a>
        </li>
      <?php endif; ?>

      <?php if ( $options['contact']['email'] ) : ?>
        <li class="mobile-menu__contact-item">
          <a href="mailto:<?php echo $options['contact']['email']; ?>">Email</a>
        </li>
      <?php endif; ?>

      <?php if ( $options['contact']['instagram'] ) : ?>
        <li class="mobile-menu__contact-item">
          <a href="<?php echo $options['contact']['instagram']; ?>" target="_blank">Instagram</a>
        </li>
      <?php endif; ?>

      <?php if ( $options['contact']['facebook'] ) : ?>
        <li class="mobile-menu__contact-item">
          <a href="<?php echo $options['contact']['facebook']; ?>" target="_blank">Facebook</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</div>