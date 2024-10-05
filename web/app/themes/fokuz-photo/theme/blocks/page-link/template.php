<?php
/**
 * Page Link Block template.
 *
 * @param array $block The block settings and attributes.
 */

$label       = get_field( 'label' );
$page        = get_field( 'page' );

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'page-link';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

// Build a valid style attribute for background and text colors.
$style = '';

?>

<?php if ( $label && $page ) : ?>
	<p>
		<a href="<?php echo esc_url( $page ); ?>" class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
			<?php echo esc_html( $label ); ?>
		</a>
	</p>
<?php endif; ?>
