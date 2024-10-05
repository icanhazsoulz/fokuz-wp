<?php
/**
 * About Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$image             = get_field( 'image' );
$label             = get_field( 'label' );
$page              = get_field( 'page' );
$text              = get_field( 'text' );
$background_color  = get_field( 'background_color' ); // ACF's color picker.
$text_color        = get_field( 'text_color' ); // ACF's color picker.

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'about-brief';
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
		<div class="inner" style="<?php echo esc_attr( $style ); ?>">
			<div class="columns-2 gap-8 flex">
				<?php if ( $image ) : ?>
					<div class="md:mx-auto shrink-0">
						<figure class="testimonial__image">
							<?php echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'testimonial__img' ) ); ?>
						</figure>
					</div>
				<?php endif; ?>
				<div>
					<?php if ( $page && $label ) : ?>
						<a
							href="<?php echo esc_url( $page ); ?>"
							class="heading-link heading-condensed"
						><?php echo esc_html( $label ); ?></a>
					<?php endif; ?>

					<?php if ( $text ) : ?>
						<?php echo wp_kses_post( $text ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="columns-1">
				<?php if ( $page ) : ?>
					<a href="<?php esc_url( $page ); ?>" class="page-link basis-full">Mehr sehen</a>
				<?php endif; ?>
			</div>
		</div>
	</div>


</div>
