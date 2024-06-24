<?php
/**
 * The template part for displaying grid layout
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
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="box-image">
      <?php if( get_theme_mod( 'ultimate_audio_streaming_post_featured_image',true) != '') { ?>
        <div class="box-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php }?>
    </div>
    <div class="mainbox p-4">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'ultimate_audio_streaming_grid_post_date',true) != '' || get_theme_mod( 'ultimate_audio_streaming_grid_post_author',true) != '' || get_theme_mod( 'ultimate_audio_streaming_grid_post_comment',true) != '') { ?>
        <div class="metabox py-2 mb-1">
          <?php if( get_theme_mod( 'ultimate_audio_streaming_grid_post_date',true) != '') { ?>
            <span class="entry-date me-2"><i class="far fa-calendar-alt me-2"></i><a href="<?php echo esc_url( get_day_link( $ultimate_audio_streaming_archive_year, $ultimate_audio_streaming_archive_month, $ultimate_audio_streaming_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
          <?php }?>
          <?php if( get_theme_mod( 'ultimate_audio_streaming_grid_post_author',true) != '') { ?>
            <span class="entry-author me-2"><i class="fas fa-user mx-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span>
          <?php }?>
          <?php if( get_theme_mod( 'ultimate_audio_streaming_grid_post_comment',true) != '') { ?>
            <span class="entry-comments"><i class="fas fa-comments mx-2"></i> <?php comments_number( __('0 Comment', 'ultimate-audio-streaming'), __('0 Comments', 'ultimate-audio-streaming'), __('% Comments', 'ultimate-audio-streaming') ); ?><span class="ms-2"></span></span>
          <?php }?>
          <?php if( get_theme_mod( 'ultimate_audio_streaming_grid_post_time',true) != '' ) { ?>
              <span class="entry-time me-2"><i class="fas fa-clock mx-2"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
        </div>
      <?php }?>
      <div class="new-text">
      <?php $ultimate_audio_streaming_excerpt = get_the_excerpt(); echo esc_html( ultimate_audio_streaming_string_limit_words( $ultimate_audio_streaming_excerpt, esc_attr(get_theme_mod('ultimate_audio_streaming_post_excerpt_number','30')))); ?>  <?php echo esc_html( get_theme_mod('ultimate_audio_streaming_post_discription_suffix','[...]') ); ?>
      </div> 
      <?php if( get_theme_mod('ultimate_audio_streaming_button_text','View More') != ''){ ?>
        <div class="postbtn mt-4 text-start">
          <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_button_text','View More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_button_text','View More'));?></span></a>
        </div>
      <?php }?>
    </div>
  </article>
</div>