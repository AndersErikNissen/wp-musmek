<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <?php wp_head(); ?>
    
    <?php if ( is_page( 'booking' ) ) : ?>
      <meta property="og:title" content="Booking hos Muskelmekanikeren" />
      <meta property="og:description" content="Book en tid til fysioterapi, akupunktur eller personlig/hold træning." />
      <meta property="og:image" content="<?= get_template_directory_uri() . '/assets/media/og_image.jpg'; ?>" />
      <meta http-equiv="refresh" content="0;url=https://application.complimentawork.dk/CamClientPortal/CamClientPortal.html?clinic=00000A00CA09000007DC81010000018AF9223B242ADFD552">
    <?php endif; ?>
  </head>
  
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="Page">
      <header id="Header" class="p-the-header">
        <nav class="p-the-header__content cols-full">
          <div class="p-the-header__logo-wrapper">
            <div class="p-the-header__logo">
              <svg width="115" height="31" viewBox="0 0 115 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.24965 27.1821H6.38636L9.59047 19.3637H12.6246V31.0004H10.2389V23.4262H10.1422L7.1305 30.9428H5.5055L2.49476 23.3979H2.39808V31.0004H0.011364V19.3637H3.04554L6.24965 27.1821Z" fill="currentColor"/>
                <path d="M22.4928 21.392H17.1119V24.1645H22.0895V26.1928H17.1119V28.9711H22.5153V31.0004H14.652V19.3637H22.4928V21.392Z" fill="currentColor"/>
                <path d="M26.9088 24.4946H27.0621L31.2496 19.3637H34.1989L29.8805 24.5737L34.2496 31.0004H31.3073L28.1198 26.2163L26.9088 27.6928V31.0004H24.4489V19.3637H26.9088V24.4946Z" fill="currentColor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M46.0485 31.0004H43.4118L42.5494 28.3461H38.3493L37.486 31.0004H34.8493L38.8668 19.3637H42.0368L46.0485 31.0004ZM38.9733 26.4262H41.9264L40.4967 22.0229H40.4059L38.9733 26.4262Z" fill="currentColor"/>
                <path d="M54.6305 26.6821H54.733V19.3637H57.1823V31.0004H55.0573L49.9948 23.6762H49.9088V31.0004H47.4489V19.3637H49.608L54.6305 26.6821Z" fill="currentColor"/>
                <path d="M61.6744 31.0004H59.2145V19.3637H61.6744V31.0004Z" fill="currentColor"/>
                <path d="M66.1588 24.4946H66.3121L70.4996 19.3637H73.4489L69.1305 24.5737L73.4996 31.0004H70.5573L67.3698 26.2163L66.1588 27.6928V31.0004H63.6989V19.3637H66.1588V24.4946Z" fill="currentColor"/>
                <path d="M82.5709 21.392H77.1901V24.1645H82.1676V26.1928H77.1901V28.9711H82.5934V31.0004H74.7301V19.3637H82.5709V21.392Z" fill="currentColor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M89.1178 19.3637C89.9966 19.3637 90.7466 19.521 91.3678 19.8354C91.9926 20.1459 92.4678 20.5869 92.7936 21.1586C93.1231 21.7268 93.2887 22.3957 93.2887 23.1645C93.2887 23.937 93.1218 24.6019 92.7887 25.1586C92.4554 25.7117 91.9721 26.1366 91.3395 26.4321C91.3048 26.4484 91.2685 26.4616 91.233 26.477L93.7028 31.0004H90.9869L88.7838 26.8754H86.9869V31.0004H84.527V19.3637H89.1178ZM86.9869 24.8979H88.6578C89.1273 24.8979 89.5173 24.8332 89.8278 24.7045C90.1382 24.5758 90.3696 24.3828 90.5211 24.1254C90.6764 23.8679 90.7545 23.5471 90.7545 23.1645C90.7545 22.7784 90.6763 22.453 90.5211 22.1879C90.3697 21.9229 90.1371 21.7218 89.8229 21.5854C89.5123 21.4453 89.1196 21.3754 88.6461 21.3754H86.9869V24.8979Z" fill="currentColor"/>
                <path d="M102.868 21.392H97.4869V24.1645H102.464V26.1928H97.4869V28.9711H102.89V31.0004H95.027V19.3637H102.868V21.392Z" fill="currentColor"/>
                <path d="M112.006 26.6821H112.108V19.3637H114.557V31.0004H112.432L107.37 23.6762H107.284V31.0004H104.824V19.3637H106.983L112.006 26.6821Z" fill="currentColor"/>
                <path d="M17.1119 7.7104C17.112 8.15351 17.2088 8.54739 17.402 8.89204C17.5989 9.23663 17.8752 9.50759 18.2311 9.70454C18.5872 9.90151 19.0027 10.0004 19.4762 10.0004C19.9533 10.0004 20.3682 9.90146 20.7203 9.70454C21.0763 9.50762 21.3504 9.23661 21.5436 8.89204C21.7405 8.54739 21.8395 8.15351 21.8395 7.7104V0.363724H24.2994V7.92036C24.2994 8.76885 24.0973 9.51154 23.692 10.1479C23.2906 10.7842 22.7279 11.2801 22.0045 11.6362C21.2811 11.9884 20.4382 12.1645 19.4762 12.1645C18.5104 12.1645 17.6655 11.9884 16.942 11.6362C16.2186 11.2802 15.656 10.7841 15.2545 10.1479C14.853 9.51154 14.652 8.76885 14.652 7.92036V0.363724H17.1119V7.7104Z" fill="currentColor"/>
                <path d="M30.6647 0.204544C31.5283 0.204544 32.2825 0.352449 32.9264 0.647903C33.5738 0.943272 34.0774 1.35408 34.4371 1.88033C34.797 2.40684 34.9834 3.01722 34.9948 3.7104H32.6364C32.5909 3.25215 32.396 2.89582 32.0514 2.64204C31.7068 2.38831 31.2388 2.26124 30.6481 2.26118C30.2466 2.26118 29.907 2.31845 29.6305 2.43208C29.3542 2.54189 29.1424 2.69524 28.9948 2.89204C28.8508 3.08901 28.778 3.31294 28.778 3.56294C28.7705 3.771 28.8143 3.95272 28.9088 4.10786C29.0072 4.26307 29.1418 4.39759 29.3121 4.51118C29.4825 4.62097 29.6796 4.71792 29.903 4.80122C30.1265 4.88077 30.366 4.94851 30.6198 5.00533L31.6647 5.25533C32.1722 5.36894 32.638 5.52106 33.0621 5.7104C33.4863 5.89974 33.8541 6.13224 34.1647 6.40865C34.4752 6.68512 34.7159 7.01125 34.8864 7.38618C35.0606 7.76118 35.1492 8.19138 35.153 8.67622C35.1492 9.38831 34.9679 10.0061 34.608 10.5288C34.252 11.0476 33.7363 11.4509 33.0621 11.7387C32.3918 12.0227 31.5832 12.1645 30.6364 12.1645C29.6971 12.1645 28.8792 12.0206 28.1823 11.7329C27.4892 11.445 26.9474 11.0188 26.5573 10.4545C26.1709 9.88636 25.9678 9.18327 25.9489 8.34615H28.3297C28.3562 8.73622 28.4678 9.06235 28.6647 9.32368C28.8653 9.58112 29.1324 9.77607 29.4655 9.90865C29.8026 10.0374 30.1838 10.102 30.608 10.102C31.0246 10.102 31.3862 10.0415 31.693 9.92036C32.0036 9.79915 32.2442 9.63041 32.4147 9.41451C32.5851 9.19862 32.6705 8.95061 32.6705 8.67036C32.6705 8.40904 32.5924 8.18919 32.4371 8.01118C32.2857 7.83332 32.0624 7.682 31.7672 7.55708C31.4756 7.43208 31.1172 7.31854 30.693 7.21626L29.4264 6.8979C28.4454 6.65928 27.6704 6.28628 27.1022 5.77876C26.534 5.27119 26.2517 4.58685 26.2555 3.72701C26.2518 3.02257 26.4393 2.40677 26.818 1.88033C27.2006 1.35388 27.7256 0.94333 28.3922 0.647903C29.0588 0.352483 29.8163 0.204554 30.6647 0.204544Z" fill="currentColor"/>
                <path d="M6.24965 8.18208H6.38636L9.59047 0.363724H12.6246V12.0004H10.2389V4.42622H10.1422L7.1305 11.9428H5.5055L2.49476 4.3979H2.39808V12.0004H0.011364V0.363724H3.04554L6.24965 8.18208Z" fill="currentColor"/>
                <path d="M39.2682 5.49458H39.4215L43.609 0.363724H46.5582L42.2399 5.57368L46.609 12.0004H43.6666L40.4791 7.21626L39.2682 8.69283V12.0004H36.8082V0.363724H39.2682V5.49458Z" fill="currentColor"/>
                <path d="M55.6803 2.39204H50.2994V5.16451H55.277V7.19283H50.2994V9.97115H55.7028V12.0004H47.8395V0.363724H55.6803V2.39204Z" fill="currentColor"/>
                <path d="M60.0963 9.97115H65.0856V12.0004H57.6364V0.363724H60.0963V9.97115Z" fill="currentColor"/>
              </svg>

              <a class="cover" href="/"></a>
            </div>
          </div>

          <?php wp_nav_menu( array (
            'menu_class' => 'p-the-header__menu menu hidden-tablet',
            'container'  => 'ul'
          ) ); ?>

          <div class="p-the-header__btns">
            <a class="btn--cta hidden-mobile" href="https://application.complimentawork.dk/CamClientPortal/CamClientPortal.html?clinic=00000A00CA09000007DC81010000018AF9223B242ADFD552" target="_blank">
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
            <li class="mobile-menu__contact-item">
              <a href="tel:+4529825852">Telefon</a>
            </li>

            <li class="mobile-menu__contact-item">
              <a href="mailto:kontakt@muskelmekanikeren.dk">Email</a>
            </li>

            <li class="mobile-menu__contact-item">
              <a href="https://www.instagram.com/muskelmekanikeren/" target="_blank">Instagram</a>
            </li>

            <li class="mobile-menu__contact-item">
              <a href="https://www.facebook.com/profile.php?id=100057581943834" target="_blank">Facebook</a>
            </li>
          </ul>
        </div>
      </div>

      <main id="Content">




