<?php 
  $options = get_option_fields();

  $logo = $options['header_logo'];
?>
<header class="p-the-header">
  <nav>
    <?php if ( $logo ) : ?>
    <div class="p-the-header__logo">
      <?php echo $logo; ?>
      <a class="cover" href="/"></a>
    </div>
    <?php endif; ?>

    <?php wp_nav_menu( array (
      'menu_class' => 'p-the-header__menu',
      'container'  => false
    ) ); ?>
  </nav>
</header>