<?php
/**
 * FSE Photography functions and definitions
 *
 * @package fse_photography
 * @since 1.0
 */

if ( ! function_exists( 'fse_photography_support' ) ) :
	function fse_photography_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'fse_photography_support' );

if ( ! function_exists( 'fse_photography_styles' ) ) :
	function fse_photography_styles() {
		// Register theme stylesheet.
		$fse_photography_theme_version = wp_get_theme()->get( 'Version' );

		$fse_photography_version_string = is_string( $fse_photography_theme_version ) ? $fse_photography_theme_version : false;
		wp_enqueue_style(
			'fse-photography-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_photography_version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_photography_styles' );

/* Theme Credit link */
define('FSE_PHOTOGRAPHY_BUY_NOW',__('https://www.cretathemes.com/products/photographer-wordpress-theme/','fse-photography'));
define('FSE_PHOTOGRAPHY_PRO_DEMO',__('https://pattern.cretathemes.com/fse-photography/','fse-photography'));
define('FSE_PHOTOGRAPHY_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-photography/','fse-photography'));
define('FSE_PHOTOGRAPHY_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-photography/','fse-photography'));
define('FSE_PHOTOGRAPHY_SUPPORT',__('https://wordpress.org/support/theme/fse-photography','fse-photography'));
define('FSE_PHOTOGRAPHY_REVIEW',__('https://wordpress.org/support/theme/fse-photography/reviews/#new-post','fse-photography'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function fse_photography_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'fse_photography_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_fse-photography-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing FSE Photography Theme!', 'fse-photography'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=fse-photography-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'fse-photography'); ?></a> <a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'fse-photography'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?fse_photography_admin_notice=1"><?php esc_html_e( 'Dismiss', 'fse-photography' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'fse_photography_admin_notice' );

if( ! function_exists( 'fse_photography_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function fse_photography_update_admin_notice(){
    if ( isset( $_GET['fse_photography_admin_notice'] ) && $_GET['fse_photography_admin_notice'] = '1' ) {
        update_option( 'fse_photography_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'fse_photography_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'fse_photography_getstart_setup_options');
function fse_photography_getstart_setup_options () {
    update_option('fse_photography_admin_notice', FALSE );
}