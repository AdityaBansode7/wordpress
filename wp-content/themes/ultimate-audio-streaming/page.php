<?php
/**
 * The template for displaying all pages.
 * @package Ultimate Audio Streaming
 */

get_header(); ?>

<?php do_action( 'ultimate_audio_streaming_page_top' ); ?>

<main role="main" id="skip_content" class="content_box">
    <div class="container background-img-skin">
        <div class="main-wrapper py-4 px-0">  
            <?php if(get_theme_mod('ultimate_audio_streaming_single_page_breadcrumb',false) == 1){ ?>
                <div class="breadcrumbs">
                    <?php ultimate_audio_streaming_the_breadcrumb(); ?> 
                </div>
            <?php }?>    
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php if(has_post_thumbnail()) { ?>
                    <div class="feature-box">   
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } ?>
                <div class="new-text"><?php the_content(); ?></div>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || '0' != get_comments_number() ) {
                        comments_template();
                    }
                ?>
            <?php endwhile; // end of the loop. ?>                    
            <div class="clear"></div>    
            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ultimate-audio-streaming' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'ultimate-audio-streaming' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
        </div>
    </div>
</main>

<?php do_action( 'ultimate_audio_streaming_page_bottom' ); ?>

<?php get_footer(); ?>