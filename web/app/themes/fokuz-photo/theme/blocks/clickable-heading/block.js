const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, ColorPalette, URLInputButton } = wp.blockEditor;
const { PanelBody } = wp.components;
const { Fragment } = wp.element;

// Register the block
registerBlockType('custom/clickable-heading', {
	title: 'Clickable Heading',
	icon: 'admin-links',
	category: 'common',
	attributes: {
		text: {
			type: 'string',
			source: 'html',
			selector: 'a',
		},
		url: {
			type: 'string',
			default: '#',
		},
		textColor: {
			type: 'string',
			default: '#000000',
		},
	},

	edit: (props) => {
		const { attributes: { text, url, textColor }, setAttributes } = props;

		return (
			<Fragment>
				<InspectorControls>
					<PanelBody title="Heading Settings">
						<p><strong>Select Text Color:</strong></p>
						<ColorPalette
							value={textColor}
							onChange={(color) => setAttributes({ textColor: color })}
						/>
						<p><strong>Set URL:</strong></p>
						<URLInputButton
							url={url}
							onChange={(newURL) => setAttributes({ url: newURL })}
						/>
					</PanelBody>
				</InspectorControls>

				<div className="clickable-heading-block">
					<RichText
						tagName="a"
						placeholder="Enter your heading text..."
						value={text}
						onChange={(newText) => setAttributes({ text: newText })}
						style={{ color: textColor }}
					/>
				</div>
			</Fragment>
		);
	},

	save: (props) => {
		const { attributes: { text, url, textColor } } = props;

		return (
			<a href={url} style={{ color: textColor }}>
				{text}
			</a>
		);
	},
});
