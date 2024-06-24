<?php
/**
 * Block Patterns
 *
 * @package fse_photography
 * @since 1.0
 */

function fse_photography_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-photography' => array( 'label' => esc_html__( 'FSE Photography', 'fse-photography' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-photography' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_photography_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_photography_register_block_patterns', 9 );