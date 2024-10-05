<?php
/**
 * Heading Link Block template.
 *
 * @param array $block The block settings and attributes.
 */

$label_color = get_field( 'label_color' ); // ACF's color picker.
$label       = get_field( 'label' );
$page        = get_field( 'page' );

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'heading-link';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
if ( $label_color ) {
	$class_name .= ' has-custom-acf-color';
}

// Build a valid style attribute for background and text colors.
$styles = array( 'color: ' . $label_color );
$style  = implode( '; ', $styles );
?>

<?php if ( $label && $page ) : ?>
	<p>
		<a href="<?php echo esc_url( $page ); ?>" class="heading-condensed <?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
			<?php echo esc_html( $label ); ?>
		</a>
	</p>
<?php endif; ?>
