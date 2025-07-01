<?php 
$data = $args['data'];

if ( $data ) :
$heading_tag = "h2";
$heading_class = "h1";

if ( isset( $args['heading_tag'] ) ) {
  $heading_tag = $args['heading_tag'];
}

if ( isset( $args['heading_class'] ) ) {
  $heading_class = $args['heading_class'];
}

  if ( $data['title'] || $data['description'] ) : ?>
    <div class="cols-6">
      <?php if ( $data['title'] ) {
        echo '<' . $heading_tag . ' class="p-section-header__title text-center ' . $heading_class . '">';
        echo $data['title'];
        echo '</' . $heading_tag . '>';
      }; ?>

      <?php if ( $data['description'] ) : ?>
        <p class="p-large text-center">
          <?php echo $data['description']; ?>
        </p>
      <?php endif; ?>

      <?php if ( $data['button'] ) : ?>
        <div class="p-section-header__btn">
        <a class="btn" href="<?php echo $data['button']['url']; ?>" target="<?php echo $data['button']['target'] ?? '_self'; ?>">
          <?php echo $data['button']['title']; ?>
        </a>
        </div>
      <?php endif; ?>
    </div>
<?php endif;
endif;