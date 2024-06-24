<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function ultimate_audio_streaming_register_recommended_plugins() {
	$plugins = array(
				array(
			'name'             => __( 'AudioIgniter', 'ultimate-audio-streaming' ),
			'slug'             => 'audioigniter',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'ultimate_audio_streaming_register_recommended_plugins' );