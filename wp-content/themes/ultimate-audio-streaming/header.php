<?php
/**
 * The Header for our theme.
 * @package Ultimate Audio Streaming
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open(); 
  } else { 
    do_action( 'wp_body_open' ); 
  } ?>
  <?php if(get_theme_mod('ultimate_audio_streaming_preloader',false) != '' || get_theme_mod( 'ultimate_audio_streaming_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <header role="banner" class="header-box">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'ultimate-audio-streaming' ); ?></a>
    <div id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 align-self-center">
            <div class="logo text-md-start text-center">
              <div class="row">
                <div class="<?php if( get_theme_mod( 'ultimate_audio_streaming_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                </div>
                <div class="<?php if( get_theme_mod('ultimate_audio_streaming_site_logo_inline') != ''){ ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('ultimate_audio_streaming_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $ultimate_audio_streaming_description = get_bloginfo( 'description', 'display' );
                  if ( $ultimate_audio_streaming_description || is_customize_preview() ) : ?>
                    <?php if( get_theme_mod('ultimate_audio_streaming_site_tagline_enable',false) != ''){ ?>
                      <p class="site-description"><?php echo esc_html($ultimate_audio_streaming_description); ?></p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>         
          <div class="col-lg-10 col-md-10 ps-md-0">
            <?php if( get_theme_mod('ultimate_audio_streaming_show_topbar',false) != ''){ ?>
              <div class="topbar">
                <div class="row py-lg-2 py-md-4 py-0">
                  <div class="col-lg-4 col-md-4 align-self-center text-md-start text-center">
                    <?php if ( get_theme_mod('ultimate_audio_streaming_phone_number') != '' ) {?>
                      <a class="ms-4" href="tel:<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_phone_number')); ?>"><i class="fas fa-phone me-2"></i><?php echo esc_html('Phone:', 'ultimate-audio-streaming'); ?> <?php echo esc_html(get_theme_mod('ultimate_audio_streaming_phone_number')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_phone_number')); ?></span></a>
                    <?php }?>
                  </div>
                  <div class="col-lg-4 col-md-4 align-self-center ps-md-0 text-md-center text-center">
                    <?php if ( get_theme_mod('ultimate_audio_streaming_email_address') != '' ) {?>
                      <a href="mailto:<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_email_address')); ?>"><i class="fas fa-envelope me-2"></i><?php echo esc_html('Email:', 'ultimate-audio-streaming'); ?> <?php echo esc_html(get_theme_mod('ultimate_audio_streaming_email_address')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ultimate_audio_streaming_email_address')); ?></span></a>
                    <?php }?>
                  </div>
                  <div class="col-lg-4 col-md-4 align-self-center px-lg-3 text-md-end text-center">
                    <?php if ( get_theme_mod('ultimate_audio_streaming_topbar_location') != '' ) {?>
                      <span><i class="fas fa-map-marker-alt me-2"></i><?php echo esc_html('Location:', 'ultimate-audio-streaming'); ?> <?php echo esc_html(get_theme_mod('ultimate_audio_streaming_topbar_location')); ?></span>
                    <?php }?>
                  </div>
                </div>
              </div>
            <?php } ?>
            <div class="bottom-header">
              <div class="row">
                <div class="col-lg-9 col-md-6 col-12 align-self-center">
                    <div class="toggle-menu responsive-menu">
                      <button role="tab" onclick="ultimate_audio_streaming_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_responsive_menu_open_icon','fas fa-bars')); ?>"></i><p><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_open_menu_label')); ?></p><span class="screen-reader-text"><?php esc_html_e('Open Menu','ultimate-audio-streaming'); ?></span>
                      </button>
                    </div>
                    <div id="navbar-header" class="menu-brand primary-nav">
                        <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'ultimate-audio-streaming' ); ?>">
                          <?php
                            wp_nav_menu( array(
                              'theme_location' => 'primary',
                              'container_class' => 'main-menu-navigation clearfix' ,
                              'menu_class' => 'main-menu-navigation clearfix',
                              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0">%3$s</ul>',
                              'fallback_cb' => 'wp_page_menu',
                            ) );
                          ?>
                        </nav>
                        <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="ultimate_audio_streaming_menu_close()"><?php echo esc_html( get_theme_mod('ultimate_audio_streaming_close_menu_label')); ?><i class="<?php echo esc_attr(get_theme_mod('ultimate_audio_streaming_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','ultimate-audio-streaming'); ?></span>
                        </a>
                        
                    </div>
                </div>
                <?php if( get_theme_mod( 'ultimate_audio_streaming_display_search', true) == true ) { ?>
                  <div class="col-lg-1 col-md-2 col-4 align-self-center ps-md-0 pt-md-0 pt-2 text-md-start text-end">
                    <div class="main-search d-inline-block">
                      <span><a href="#"><i class="fas fa-search"></i></a></span>
                    </div>
                    <div class="searchform_page w-100 h-100">
                      <div class="close w-100 text-end me-lg-4 me-3"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
                      <div class="search_input">
                        <?php get_search_form(); ?>
                      </div>
                    </div>
                  </div>
                <?php }?>
                <div class="col-lg-2 col-md-4 col-8 align-self-center px-lg-0 pt-md-0 pt-2 text-start">
                  <?php if( get_theme_mod('ultimate_audio_streaming_social_links',true) != ''){ ?>
                    <div class="social-icon ">
                      <?php if(get_theme_mod('ultimate_audio_streaming_facebook_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('ultimate_audio_streaming_facebook_url')); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'ultimate-audio-streaming'); ?></span></a>
                      <?php }?>
                       <?php if(get_theme_mod('ultimate_audio_streaming_youtube_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('ultimate_audio_streaming_youtube_url')); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php echo esc_html('Youtube', 'ultimate-audio-streaming'); ?></span></a>
                      <?php }?>
                       <?php if(get_theme_mod('ultimate_audio_streaming_pinterest_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('ultimate_audio_streaming_pinterest_url')); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'ultimate-audio-streaming'); ?></span></a>
                      <?php }?>
                      <?php if(get_theme_mod('ultimate_audio_streaming_twitter_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('ultimate_audio_streaming_twitter_url')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'ultimate-audio-streaming'); ?></span></a>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>