<?php
$data = get_section_data( 'section_contact_form_', get_the_ID() );
$plugin_is_active = false;

if ( in_array( 'contact-form-7/wp-contact-form-7.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
  $plugin_is_active = true;
}

if ( $data && $plugin_is_active ) : ?>

<section class="section-contact-form section">
<?php
  get_template_part( 'template-parts/parts/section-header', null, array( 'data' => $data, 'heading_class' => 'h2' ) );

  if ( $data['show_form'] ) : ?>
    <div class="cols-6">
      <?= apply_shortcodes( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
    </div>
  <?php endif; ?>
</section>

<?php endif;
