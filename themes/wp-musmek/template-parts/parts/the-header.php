<?php 
  $options = get_option_fields();

  
?>
<pre><?php print_r($options); ?></pre>
<header class="snippet-the-header">
  <nav>
    <div>
      <!-- <?php get_template_part( 'template-parts/parts/logo', null, array ( 'logo' => $options['header_logo'] )); ?> -->
      <a class="" href="/"></a>
    </div>

    <?php wp_nav_menu( array (
      'menu_class' => '',
      'container'  => false
    ) ); ?>
  </nav>
</header>