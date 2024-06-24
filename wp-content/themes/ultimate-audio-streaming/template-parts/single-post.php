<?php
/**
 * The template part for displaying single-post
 *
 * @package Ultimate Audio Streaming 
 * @subpackage ultimate_audio_streaming
 * @since 1.0
 */
?>
<?php 
  $ultimate_audio_streaming_archive_year  = get_the_time('Y'); 
  $ultimate_audio_streaming_archive_month = get_the_time('m'); 
  $ultimate_audio_streaming_archive_day   = get_the_time('d'); 
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	<h1><?php the_title(); ?></h1>
	<?php if( get_theme_mod( 'ultimate_audio_streaming_single_post_date',true) != '' || get_theme_mod( 'ultimate_audio_streaming_single_post_author',true) != '' || get_theme_mod( 'ultimate_audio_streaming_single_post_comment',true) != '') { ?>
		<div class="metabox p-2 mb-3">
    	<?php if( get_theme_mod( 'ultimate_audio_streaming_single_post_date',true) != '') { ?>
      	<span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_single_post_date_icon','far fa-calendar-alt')); ?> me-2"></i><a href="<?php echo esc_url( get_day_link( $ultimate_audio_streaming_archive_year, $ultimate_audio_streaming_archive_month, $ultimate_audio_streaming_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_single_post_meta_seperator','|') ); ?>
    	<?php }?>
    	<?php if( get_theme_mod( 'ultimate_audio_streaming_single_post_author',true) != '') { ?>
      	<span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_single_post_author_icon','fas fa-user')); ?> mx-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_single_post_meta_seperator','|') ); ?>
    	<?php }?>
    	<?php if( get_theme_mod( 'ultimate_audio_streaming_single_post_comment',true) != '') { ?>
      	<span class="entry-comments"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_single_post_comment_icon','fas fa-comments')); ?> mx-2"></i> <?php comments_number( __('0 Comment', 'ultimate-audio-streaming'), __('0 Comments', 'ultimate-audio-streaming'), __('% Comments', 'ultimate-audio-streaming') ); ?><span class="ms-2"><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_single_post_meta_seperator','|') ); ?></span></span>
    	<?php }?>
    	<?php if( get_theme_mod( 'ultimate_audio_streaming_single_post_time',true) != '' ) { ?>
      		<span class="entry-time me-2"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_single_post_time_icon','fas fa-clock')); ?> mx-2"></i> <?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
      <?php echo esc_html (ultimate_audio_streaming_edit_link()); ?>
    </div>
	<?php }?>
	<?php if( get_theme_mod( 'ultimate_audio_streaming_single_post_featured_image',true) != '') { ?>
    <div class="feature-box">
      <?php the_post_thumbnail(); ?>
    </div>
    <hr>
    <?php } ?>
    <?php if( get_theme_mod('ultimate_audio_streaming_show_hide_single_post_categories',true) != ''){ ?>
    	<div class="category mb-2">
		 		<span>Categories :</span><?php the_category(); ?>
	   	</div>
	  <?php } ?>
    <?php if( get_theme_mod( 'ultimate_audio_streaming_single_post_tags',true) != '') { ?>
		<div class="tags"><?php the_tags(); ?></div>
		<?php }?>
    <div class="new-text">
      <?php the_content();?>
    </div>  
    <?php if( get_theme_mod( 'ultimate_audio_streaming_enable_single_post_pagination',true) != '') { ?>
	    <?php
				
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'ultimate-audio-streaming' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('ultimate_audio_streaming_next_text', __( 'Next page', 'ultimate-audio-streaming' ))) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'ultimate-audio-streaming' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('ultimate_audio_streaming_prev_text', __( 'Previous page', 'ultimate-audio-streaming' ))) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'ultimate-audio-streaming' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			echo '<div class="clearfix"></div>';?>

	<?php } ?>
	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	} ?>

	<?php get_template_part('template-parts/related-posts'); ?>
</article>