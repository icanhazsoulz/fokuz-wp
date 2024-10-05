<?php if ( isset( $attributes['link-label'] ) ) : ?>
<div>
  <a href="<?php echo esc_url( $attributes['link-url'] ); ?>">
      <h2 class="heading-link"><?php echo esc_html( $attributes['link-label'] ); ?></h2>
  </a>
</div>
<?php endif; ?>
