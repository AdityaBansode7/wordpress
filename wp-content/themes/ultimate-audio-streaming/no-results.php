<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Ultimate Audio Streaming
 */
?>

<header role="banner">
	<?php if( get_theme_mod('ultimate_audio_streaming_no_search_result_heading','Nothing Found') != ''){ ?>
		<h2 class="entry-title"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_no_search_result_heading',__('Nothing Found','ultimate-audio-streaming')));?></h2>
	<?php } ?>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.','ultimate-audio-streaming'), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_no_search_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','ultimate-audio-streaming')));?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry it happens to the best of us.', 'ultimate-audio-streaming' ); ?></p><br />
	<div class="read-moresec my-5 mx-0">
		<a href="<?php echo esc_url( home_url() ); ?>" class="button mt-3 mx-0 mb-0 py-2 px-3"><?php esc_html_e( 'Back to Home Page', 'ultimate-audio-streaming' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'ultimate-audio-streaming' ); ?></span></a>
	</div>
<?php endif; ?>