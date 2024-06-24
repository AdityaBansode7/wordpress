<?php
/**
 * Block Styles
 *
 * @package fse_photography
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_photography_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-photography-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-photography' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-photography-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-photography' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-photography-button',
				'label'        => esc_html__( 'Plain', 'fse-photography' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-photography-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-photography' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-photography-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-photography' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-photography-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-photography' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-photography-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-photography' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-photography-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-photography' ),
			)
		);
	}
	add_action( 'init', 'fse_photography_register_block_styles' );
}
