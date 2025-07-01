<?php
$data = get_section_data( 'section_text_', get_the_ID() );
$has_content = !empty( $data['title'] ) || !empty( $data['description'] ) || !empty( $data['button'] );

if ( $data && $has_content ) : ?>

<section class="section-text section">
  <?php get_template_part( 'template-parts/parts/section-header', null, array( 'data' => $data, 'heading_tag' => 'h1' ) ); ?>
</section>

<?php endif;