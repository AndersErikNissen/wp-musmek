<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page">
      <header class="snippet-the-header">
        <nav>
          <div>
            <!-- Brand logo goes here... -->
            <a class="" href="/"></a>
          </div>
          <?php wp_nav_menu( array (
            'menu_class' => '',
            'container'  => false
          ) ); ?>
        </nav>
      </header>
      
      <main id="content">




