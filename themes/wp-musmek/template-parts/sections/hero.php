<?php
$data = get_section_data( 'section_hero_', get_the_ID() );

if ( $data ) : ?>

<section class="section-text">
  <?php if ( $data['title'] ) : ?>
    <h1>
      <?php echo $data['title']; ?>
    </h1>
    <!-- LAV EN SNIPPET TIL DETTE .... -->
    <!-- LAV EN SNIPPET TIL DETTE .... -->
    <!-- LAV EN SNIPPET TIL DETTE .... -->
    <!-- LAV EN SNIPPET TIL DETTE .... -->
    <!-- LAV EN SNIPPET TIL DETTE .... -->
  <?php endif; ?>

</section>

<?php endif;