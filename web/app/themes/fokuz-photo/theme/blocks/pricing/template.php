<?php
/**
 * About Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$label   = get_field( 'heading_label' );
$page    = get_field( 'heading_link' );
$pricing = get_field( 'pricing' );
$background_color  = get_field( 'background_color' ); // ACF's color picker.
$text_color        = get_field( 'text_color' ); // ACF's color picker.

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'pricing';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
if ( $background_color || $text_color ) {
	$class_name .= ' has-custom-acf-color';
}

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" >
	<div class="overlay">
		<div class="inner">
			<div class="flex gap-8">
				<?php if ( ! empty( $pricing ) ) : ?>
					<?php foreach ( $pricing as $item ) : ?>
						<div class="card">
							<?php if ( $item['image'] ) : ?>
								<figure>
									<?php echo wp_get_attachment_image( $item['image']['ID'], 'full' ); ?>
								</figure>
							<?php endif; ?>

							<?php if ( $item['title'] ) : ?>
								<?php echo esc_html( $item['title'] ); ?>
							<?php endif; ?>

							<?php if ( $item['text'] ) : ?>
								<?php echo wp_kses_post( $item['text'] ); ?>
							<?php endif; ?>

							<?php if ( $item['price'] ) : ?>
								<span>ab</span>&nbsp;<span class="price-number"><?php echo esc_html( $item['price'] ); ?></span>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>


</div>
