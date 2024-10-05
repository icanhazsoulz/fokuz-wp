<?php if ( isset( $attributes['link-label'] ) ) : ?>
<div>
  <a href="<?php echo esc_url( $attributes['link-url'] ); ?>" class="page-link">
      <?php echo esc_html( $attributes['link-label'] ); ?>
  </a>
</div>
<?php endif; ?>
