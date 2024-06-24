<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Ultimate Audio Streaming
 */
get_header(); ?>

<main role="main" id="skip_content" class="content_box">
    <div class="container">
        <div class="page-content text-center">
            <h1><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_page_not_found_heading',__('404 Not Found','ultimate-audio-streaming')));?></h1>
            <p class="text-404"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_page_not_found_text',__('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','ultimate-audio-streaming')));?></p>
            <?php if( get_theme_mod('ultimate_audio_streaming_page_not_found_button','Back to Home Page') != ''){ ?>
                <div class="read-moresec mt-3 mb-4 mx-0">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="button py-2 px-3"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_page_not_found_button',__('Back to Home Page','ultimate-audio-streaming')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_page_not_found_button',__('Back to Home Page','ultimate-audio-streaming')));?></span></a>
                </div>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
</main>

<?php get_footer(); ?>