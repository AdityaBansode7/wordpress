<?php
/**
 * The template for displaying search forms in Ultimate Audio Streaming
 * @package Ultimate Audio Streaming
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'ultimate-audio-streaming' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('ultimate_audio_streaming_search_placeholder', __('Search', 'ultimate-audio-streaming')) ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','ultimate-audio-streaming' ); ?>">
</form>