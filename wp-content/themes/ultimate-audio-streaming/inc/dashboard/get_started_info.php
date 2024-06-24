<?php

add_action( 'admin_menu', 'ultimate_audio_streaming_gettingstarted' );
function ultimate_audio_streaming_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'ultimate-audio-streaming'), esc_html__('About Theme', 'ultimate-audio-streaming'), 'edit_theme_options', 'ultimate-audio-streaming-guide-page', 'ultimate_audio_streaming_guide');   
}

function ultimate_audio_streaming_admin_theme_style() {
   wp_enqueue_style('ultimate-audio-streaming-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'ultimate_audio_streaming_admin_theme_style');

function ultimate_audio_streaming_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Ultimate Audio Streaming, you rock!', 'ultimate-audio-streaming' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional audio streaming website. Please Click on the link below to know the theme setup information.', 'ultimate-audio-streaming' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=ultimate-audio-streaming-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'ultimate-audio-streaming' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'ultimate_audio_streaming_notice');

/**
 * Theme Info Page
 */
function ultimate_audio_streaming_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'ultimate-audio-streaming' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Ultimate Audio Streaming', 'ultimate-audio-streaming' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'ultimate-audio-streaming' ); ?>	
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'ultimate-audio-streaming' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'ultimate-audio-streaming'); ?></a>
						<a href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'ultimate-audio-streaming'); ?></a>
						<a href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'ultimate-audio-streaming'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Ultimate Audio Streaming Theme', 'ultimate-audio-streaming' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
	                    <p><?php esc_html_e( 'Ultimate Audio Streaming is a cutting-edge digital platform designed for audiophiles, musicians, podcasters, and radio enthusiasts seeking an immersive online experience. Crafted with a focus on delivering high-quality audio content, this theme caters to a diverse audience looking to share and enjoy audio in a visually engaging and user-friendly environment. This theme is a visual symphony, boasting a sleek and modern design that captivates visitors from the moment they land on the site. Its aesthetic appeal complements the diverse audio content it hosts, creating an inviting space for users to explore music, podcasts, radio shows, and more. Whether youre a budding musician wanting to showcase your latest tracks, a podcast creator sharing thought-provoking content, or a radio station aiming to reach a broader audience, the Ultimate Audio Streaming WordPress Theme is a versatile tool. Its user-friendly design ensures accessibility for both content creators and listeners, fostering a seamless experience for everyone involved. The themes intuitive layout allows for easy navigation, enabling users to discover and engage with audio content effortlessly. With a focus on aesthetics and functionality, this theme transforms the digital audio streaming experience into a visually captivating journey, making it an ideal choice for anyone passionate about sharing or consuming high-quality audio content online.', 'ultimate-audio-streaming' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','ultimate-audio-streaming'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','ultimate-audio-streaming'); ?></a> <?php esc_html_e( 'your website.','ultimate-audio-streaming'); ?> </li>
							<li><?php esc_html_e( 'Ultimate Audio Streaming','ultimate-audio-streaming'); ?> <a target="_blank" href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','ultimate-audio-streaming'); ?></a> </li>
						</ol>
                    </div>
              	</div>
				<div class="col-md-5">
					<div class="pad-box">
              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
              		 </div> 
              	</div>
            </div>
			<div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','ultimate-audio-streaming'); ?></h2>
					<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','ultimate-audio-streaming'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'Distinguished as the epitome of excellence, our premium Audio Streaming WordPress Theme takes center stage as the unrivaled solution for musicians, podcasters, and audio enthusiasts seeking a superior online experience. Meticulously crafted, this premium theme represents our commitment to eliminating issues and perfecting every detail, ensuring you receive the best product possible. Standing out as a multifaceted masterpiece, the Audio Streaming WordPress Theme boasts an expansive slider featuring a banner with a compelling Call to Action Button (CTA), designed to captivate and engage visitors seamlessly. Compatibility with WooCommerce enhances its functionality, offering exquisite layouts for products, posts, and pages. Built with secure and clean codes, including hooks, shortcodes, and customizable options, this premium theme empowers you to personalize your website effortlessly, eliminating the need for coding expertise. Developed on the Bootstrap 4 framework, the theme simplifies the development process, ensuring a seamless and efficient platform.', 'ultimate-audio-streaming' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">								
								<h3><?php esc_html_e( 'Pro Theme Features','ultimate-audio-streaming'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Theme options using customizer API','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Responsive design','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Site Icon and Logo option','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Header Images option','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Pagination option','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Demo Importer','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Main Slider','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Woocommerce Compatible','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Unlimited Slides','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Section to show categories','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Product Listing based on category','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Top Categories Section','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Best Seller Tab','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Testimonial with custom post type','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Promotional Banners','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Shortcodes for Testimonials','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Newsletter with the help of contact form 7.','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Well-sanitized as per WordPress standards.','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Typography for the complete website','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Global Color pallete','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Section specific Color pallete','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with Font Awesome Icon','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Instagram Section','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Allow setting site title, tagline, logo','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Contact Page Template','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Blog Full width and right and left sidebar','ultimate-audio-streaming'); ?></li>
										<li><?php esc_html_e( 'Recent post widget with images, Related post','ultimate-audio-streaming'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','ultimate-audio-streaming'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','ultimate-audio-streaming'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','ultimate-audio-streaming'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','ultimate-audio-streaming'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','ultimate-audio-streaming'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','ultimate-audio-streaming'); ?></a> <?php esc_html_e( 'your website.','ultimate-audio-streaming'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','ultimate-audio-streaming'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','ultimate-audio-streaming'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','ultimate-audio-streaming'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','ultimate-audio-streaming'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( ULTIMATE_AUDIO_STREAMING_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'ultimate-audio-streaming'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>