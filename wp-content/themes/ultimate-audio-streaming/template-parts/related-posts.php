<?php
$ultimate_audio_streaming_archive_year  = get_the_time('Y'); 
$ultimate_audio_streaming_archive_month = get_the_time('m'); 
$ultimate_audio_streaming_archive_day   = get_the_time('d');
?>
<?php $related_posts = ultimate_audio_streaming_related_posts();
if(get_theme_mod('ultimate_audio_streaming_related_enable_disable',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <h3 class="mb-3"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_related_title',__('Related Post','ultimate-audio-streaming')));?></h3>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-inner-box mb-3 p-3">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="mb-2"><?php the_title(); ?></h4>
                        <div class="metabox my-3">
                            <span class="entry-date me-3"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_post_date_icon','far fa-calendar-alt')); ?> me-1"></i> <a href="<?php echo esc_url( get_day_link( $ultimate_audio_streaming_archive_year, $ultimate_audio_streaming_archive_month, $ultimate_audio_streaming_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                            <span class="entry-author me-3"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_post_author_icon','fas fa-user')); ?> me-1"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
                        </div>
                        <p class="related-para">
                            <?php $ultimate_audio_streaming_excerpt = get_the_excerpt(); echo esc_html( ultimate_audio_streaming_string_limit_words( $ultimate_audio_streaming_excerpt, esc_attr(get_theme_mod('ultimate_audio_streaming_related_post_excerpt_number','15')))); ?> <?php echo esc_html( get_theme_mod('ultimate_audio_streaming_post_discription_suffix','[...]') ); ?>
                            <?php if( get_theme_mod('ultimate_audio_streaming_button_text','View More') != ''){ ?>
                        </p>
                            <div class="postbtn mt-2 text-start">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_button_text','View More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_button_text','View More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>