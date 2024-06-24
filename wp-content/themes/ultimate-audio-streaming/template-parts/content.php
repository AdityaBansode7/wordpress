<?php
/**
 * The template part for displaying content
 * @package Ultimate Audio Streaming
 * @subpackage ultimate_audio_streaming
 * @since 1.0
 */
?>

<?php $ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_post_layouts','Layout 2');
if($ultimate_audio_streaming_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($ultimate_audio_streaming_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($ultimate_audio_streaming_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}