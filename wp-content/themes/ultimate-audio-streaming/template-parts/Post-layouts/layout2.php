<?php
/**
 * The template part for displaying content
 * @package Ultimate Audio Streaming
 * @subpackage ultimate_audio_streaming
 * @since 1.0
 */

$ultimate_audio_streaming_archive_year  = get_the_time('Y'); 
$ultimate_audio_streaming_archive_month = get_the_time('m'); 
$ultimate_audio_streaming_archive_day   = get_the_time('d'); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="layout2">
    <?php $ultimate_audio_streaming_postimg_lay = get_theme_mod( 'ultimate_audio_streaming_post_featured_image','Image');
    if($ultimate_audio_streaming_postimg_lay == 'Image'){ ?>
      <div class="box-image">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php }
    if($ultimate_audio_streaming_postimg_lay == 'Color'){ ?>
      <div class="post-color text-center">
      </div>
    <?php }?>
    <div class="mainbox p-4">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod('ultimate_audio_streaming_metafields_date', true) != '' || get_theme_mod('ultimate_audio_streaming_metafields_author', true) != '' || get_theme_mod('ultimate_audio_streaming_metafields_comment', true) != '' || get_theme_mod('ultimate_audio_streaming_metafields_time', true) != '' ||  get_theme_mod('ultimate_audio_streaming_display_post_date', true) != '' || get_theme_mod('ultimate_audio_streaming_display_post_author', true) != '' || get_theme_mod('ultimate_audio_streaming_display_post_comment', true) != '' || get_theme_mod('ultimate_audio_streaming_display_post_time', true) != ''){ ?>
        <div class="metabox mb-3">
          <?php if( get_theme_mod( 'ultimate_audio_streaming_metafields_date',true) != '' || get_theme_mod( 'ultimate_audio_streaming_display_post_date',true) != '') { ?>
            <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_post_date_icon','far fa-calendar-alt')); ?> me-1"></i> <a href="<?php echo esc_url( get_day_link( $ultimate_audio_streaming_archive_year, $ultimate_audio_streaming_archive_month, $ultimate_audio_streaming_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_blog_post_meta_seperator','|') ); ?></span></span>
          <?php }?>
          <?php if( get_theme_mod( 'ultimate_audio_streaming_metafields_author',true) != '' || get_theme_mod( 'ultimate_audio_streaming_display_post_author',true) != '') { ?>
            <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_post_author_icon','fas fa-user')); ?> me-1"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_blog_post_meta_seperator','|') ); ?></span></span>
          <?php }?>
          <?php if( get_theme_mod( 'ultimate_audio_streaming_metafields_comment',true) != '' || get_theme_mod( 'ultimate_audio_streaming_display_post_comment',true) != '') { ?>
            <span class="entry-comments mx-1"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_post_comment_icon','fas fa-comments')); ?> me-1"></i> <?php comments_number( __('0 Comment', 'ultimate-audio-streaming'), __('0 Comments', 'ultimate-audio-streaming'), __('% Comments', 'ultimate-audio-streaming') ); ?><span class="ms-2"><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_blog_post_meta_seperator','|') ); ?></span></span>
          <?php }?>
          <?php if( get_theme_mod( 'ultimate_audio_streaming_metafields_time',true) != '' || get_theme_mod( 'ultimate_audio_streaming_display_post_time',true) != '') { ?>
            <span class="entry-time mx-1"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_post_time_icon','fas fa-clock')); ?> me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
          <?php echo esc_html (ultimate_audio_streaming_edit_link()); ?>
        </div>
      <?php }?>
      <div class="new-text">
        <p>
          <?php $ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_content_settings','Excerpt');
          if($ultimate_audio_streaming_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($ultimate_audio_streaming_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <?php $ultimate_audio_streaming_excerpt = get_the_excerpt(); echo esc_html( ultimate_audio_streaming_string_limit_words( $ultimate_audio_streaming_excerpt, esc_attr(get_theme_mod('ultimate_audio_streaming_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('ultimate_audio_streaming_post_discription_suffix','[...]') ); ?>
            <?php }?>
          <?php }?>
        </p>
      </div>
      <?php if( get_theme_mod('ultimate_audio_streaming_button_text','Read More') != ''){ ?>
        <div class="postbtn mt-4 text-start">
          <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_button_text','Read More'));?></span></a>
        </div>
      <?php }?>
    </div>
  </div>
</article>