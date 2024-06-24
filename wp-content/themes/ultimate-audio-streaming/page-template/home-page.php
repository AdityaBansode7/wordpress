<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); 

?>

<main role="main" id="skip_content">

  <?php do_action( 'ultimate_audio_streaming_above_slider' ); ?>

  <?php if( get_theme_mod('ultimate_audio_streaming_slider_hide', false) != '' || get_theme_mod( 'ultimate_audio_streaming_display_slider',true) != ''){ ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
        <?php $ultimate_audio_streaming_slider_page = array();
          for ( $ultimate_audio_streaming_count = 1; $ultimate_audio_streaming_count <= 4; $ultimate_audio_streaming_count++ ) {
            $ultimate_audio_streaming_mod = intval( get_theme_mod( 'ultimate_audio_streaming_slider' . $ultimate_audio_streaming_count ));
            if ( 'page-none-selected' != $ultimate_audio_streaming_mod ) {
              $ultimate_audio_streaming_slider_page[] = $ultimate_audio_streaming_mod;
            }
          }
          if( !empty($ultimate_audio_streaming_slider_page) ) :
          $ultimate_audio_streaming_args = array(
            'post_type' => 'page',
            'post__in' => $ultimate_audio_streaming_slider_page,
            'orderby' => 'post__in'
          );
          $ultimate_audio_streaming_query = new WP_Query( $ultimate_audio_streaming_args );
          if ( $ultimate_audio_streaming_query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $ultimate_audio_streaming_query->have_posts() ) : $ultimate_audio_streaming_query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <div class="slider-bg">
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider-img.png" alt="" /> 
                <?php } ?>
              </div>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <div class="carousel-content">
                    <?php if( get_theme_mod('ultimate_audio_streaming_slider_small_heading') != '' ){ ?>
                      <p class="headingsmall-text"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_slider_small_heading',''));?></p>
                    <?php }?>
                    <?php if( get_theme_mod('ultimate_audio_streaming_slider_heading',true) != ''){ ?>
                      <h1><?php the_title(); ?></h1>
                    <?php } ?>
                    <?php if( get_theme_mod('ultimate_audio_streaming_slider_text',true) != ''){ ?>
                      <p class="my-3"><?php $ultimate_audio_streaming_excerpt = get_the_excerpt(); echo esc_html( ultimate_audio_streaming_string_limit_words( $ultimate_audio_streaming_excerpt, esc_attr(get_theme_mod('ultimate_audio_streaming_slider_excerpt_number','20')))); ?></p>
                    <?php } ?>
                    <?php if (get_theme_mod( 'ultimate_audio_streaming_show_slider_button',true) != ''){ ?>
                      <?php if( get_theme_mod('ultimate_audio_streaming_slider_button_text','Now More') != '' || get_theme_mod('ultimate_audio_streaming_slider_button_link') != ''){ ?>
                        <div class="more-btn mt-0 mt-lg-3 mt-md-3">
                          <a href="<?php echo esc_url(get_theme_mod('ultimate_audio_streaming_slider_button_link')!= '') ? esc_url(get_theme_mod('ultimate_audio_streaming_slider_button_link')) : esc_url(get_permalink()); ?>"><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_slider_button_text',__('Now More','ultimate-audio-streaming'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_slider_button_text',__('Now More','ultimate-audio-streaming'))); ?></span></a>
                        </div>
                      <?php }?>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_slider_previous_icon','fas fa-long-arrow-alt-left')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','ultimate-audio-streaming' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_slider_next_icon','fas fa-long-arrow-alt-right')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','ultimate-audio-streaming' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>
  
  <?php do_action( 'ultimate_audio_streaming_below_slider' ); ?>

<!-- Track Player Section -->
  <?php if( get_theme_mod('ultimate_audio_streaming_advance_track_player_shortcode') != '' ){ ?>
    <section id="track-player-sec" class="wow zoomIn delay-1000" data-wow-duration="2s">    
      <div class="tracks-list">  
        <div class="container">    
          <?php echo do_shortcode(get_theme_mod('ultimate_audio_streaming_advance_track_player_shortcode')); ?>
        </div>
      </div>
    </section> 
  <?php }?>

<!-- player Sectiom -->
  <?php if( get_theme_mod('ultimate_audio_streaming_advance_music_album_shortcode') != '' ){ ?>
    <section id="player-section" class="wow zoomIn delay-1000 py-lg-5" data-wow-duration="2s">    
      <div class="player-list">  
        <div class="container"> 
          <div class="tunes-button">
           <?php if( get_theme_mod('ultimate_audio_streaming_music_album_btn_link') != '' || get_theme_mod('ultimate_audio_streaming_music_album_btn_text') != '' ){ ?>
              <a href="<?php echo esc_url(get_theme_mod('ultimate_audio_streaming_music_album_btn_link'));?>"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_music_album_btn_text'));?></a>
            <?php }?>
          </div> 
          <?php echo do_shortcode(get_theme_mod('ultimate_audio_streaming_advance_music_album_shortcode')); ?>
        </div>
      </div>
    </section>
  <?php }?>
  
  <div class="container front-page-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>