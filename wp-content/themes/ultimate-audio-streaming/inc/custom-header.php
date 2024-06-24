<?php
/**
 * @package Ultimate Audio Streaming
 * @subpackage ultimate-audio-streaming
 * @since ultimate-audio-streaming 1.0
 * Setup the WordPress core custom header feature.
 * @uses ultimate_audio_streaming_header_style()
*/

function ultimate_audio_streaming_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'ultimate_audio_streaming_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 70,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'ultimate_audio_streaming_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'ultimate_audio_streaming_custom_header_setup' );

if ( ! function_exists( 'ultimate_audio_streaming_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'ultimate_audio_streaming_header_style' );
function ultimate_audio_streaming_header_style() {
	if ( get_header_image() ) :
	$ultimate_audio_streaming_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size:cover;
		}";
	   	wp_add_inline_style( 'ultimate-audio-streaming-basic-style', $ultimate_audio_streaming_custom_css );
	endif;
}
endif;