<?php

	$ultimate_audio_streaming_custom_css ='';

	/*----------- Global First Color -----------*/
	$ultimate_audio_streaming_first_color = get_theme_mod('ultimate_audio_streaming_first_color');

	$ultimate_audio_streaming_second_color = get_theme_mod('ultimate_audio_streaming_second_color');

	$ultimate_audio_streaming_custom_css .='input[type="submit"], input[type="submit"]:hover, .topbar, .topbar:after, a.book-btn, .primary-navigation ul ul a, #our-classes-section .owl-nav button, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce span.onsale, .woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .metabox i:before, #comments input[type="submit"].submit, #comments a.comment-reply-link, #sidebar input[type="submit"], #sidebar ul li:before, #sidebar .tagcloud a:hover, #sidebar button:hover, .widget_calendar tbody a, #sidebar .custom_read_more a, .page-content .read-moresec a.button, .frame, #scrollbutton, .copyright-wrapper, .footer-wp h3:after, .footer-wp input[type="submit"], .footer-wp button, #sidebar button, #sidebar button:hover, .footer-wp button:hover, .pagination .current, .page-links .post-page-numbers.current span, .tags a:hover, .toggle-menu i{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_first_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='a, a:hover, a.button.wc-forward:hover, .page-links a:hover , .pagination a:hover, #comments a time, .bradcrumbs span, .bradcrumbs a, .tags, .pagination .current, #sidebar .textwidget p a, #sidebar .textwidget a:hover,.footer-wp .woocommerce a.button:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, #sidebar h3.widget-title a.rsswidget, .page-content .read-moresec a.button, a.button, .widget_calendar tbody a, #sidebar ul li a:hover, .widget_calendar caption, #comments a.comment-reply-link:hover, .new-text p a,.comment p a, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, a.r_button, input[type="submit"], td.product-name a, .social-icon i:hover, #slider .more-btn a:hover, .postbtn a:hover, .tunes-button a:hover, .featured-album-text, #our-classes-section .events-head h2, #our-classes-section .box-icon i, .nav-next a:hover, .nav-previous a:hover, .yith-wcwl-add-to-wishlist a i, .woocommerce .quantity .qty, .woocommerce-message::before, .metabox span i, p.logged-in-as a, #sidebar ul li a:hover, .footer-wp h3{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_first_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='#our-classes-section .owl-nav button:hover{';
		$ultimate_audio_streaming_custom_css .='box-shadow: 0px 1px 5px '.esc_attr($ultimate_audio_streaming_first_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wc-block-components-order-summary-item__quantity, .wc-block-grid__product-onsale{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_first_color).'!important;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='.headingsmall-text, .postbtn:hover i, .postbtn:hover a, #comments input[type="submit"].submit:hover, .woocommerce #respond input#submit:hover, .woocommerce .product a.button:hover, .woocommerce .product button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .entry-date:hover i, .entry-date:hover a, .entry-author:hover i, .entry-author:hover a{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_first_color).'!important;';
	$ultimate_audio_streaming_custom_css .='}';

	if($ultimate_audio_streaming_second_color != false || $ultimate_audio_streaming_first_color != false){
		$ultimate_audio_streaming_custom_css .='#slider .carousel-control-prev-icon i:hover, #slider .carousel-control-next-icon i:hover, #slider .more-btn a, .postbtn a, .tunes-button a, #track-player-sec .ai-wrap .ai-track-progress, .tunes-button a, .woocommerce #respond input#submit,  nav.woocommerce-MyAccount-navigation ul li, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], a.added_to_cart.wc-forward, nav.woocommerce-MyAccount-navigation ul li, #player-section .ai-track-progress, #player-section .ai-track-progress:after{
		background: transparent linear-gradient(270deg, '.esc_attr($ultimate_audio_streaming_second_color).' 0%, '.esc_attr($ultimate_audio_streaming_first_color).' 100%);
		}';
	}

	$ultimate_audio_streaming_custom_css .='.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
		$ultimate_audio_streaming_custom_css .='border-left: 4px solid '.esc_attr($ultimate_audio_streaming_first_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .yith-wcwl-add-to-wishlist a i, a.button{';
		$ultimate_audio_streaming_custom_css .='border: solid 1px '.esc_attr($ultimate_audio_streaming_first_color).'!important;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='.footer-wp .custom-contact-us div.wpcf7-validation-errors, .footer-wp .custom-contact-us div.wpcf7-acceptance-missing, .page-content .read-moresec a.button{';
		$ultimate_audio_streaming_custom_css .='border: 2px solid '.esc_attr($ultimate_audio_streaming_first_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product:hover, .woocommerce ul.products li.product:hover img{';
		$ultimate_audio_streaming_custom_css .='border-color: '.esc_attr($ultimate_audio_streaming_first_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='.woocommerce-message{';
		$ultimate_audio_streaming_custom_css .='border-top-color: '.esc_attr($ultimate_audio_streaming_first_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	// media
	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:1000px) {';
	$ultimate_audio_streaming_custom_css .='.main-menu-navigation a:focus, a.closebtn:focus{';
		$ultimate_audio_streaming_custom_css .='outline: 1px solid '.esc_attr($ultimate_audio_streaming_first_color).'!important;';
		$ultimate_audio_streaming_custom_css .='border-bottom: 1px solid '.esc_attr($ultimate_audio_streaming_first_color).'!important;
		}';
	$ultimate_audio_streaming_custom_css .='}';

	/*----------- Global Second Color -----------*/
	$ultimate_audio_streaming_custom_css .='#track-player-sec .ai-wrap .ai-btn.ai-btn-active, #track-player-sec .ai-wrap .ai-track:hover, #track-player-sec .ai-wrap .ai-track.ai-track-active, #track-player-sec .ai-wrap .ai-volume-bar.ai-volume-bar-active::before, #track-player-sec .ai-wrap .ai-audio-control, #track-player-sec .ai-wrap .ai-audio-control:hover, #track-player-sec .ai-wrap .ai-audio-control:focus{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_second_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_custom_css .='#player-section .ai-wrap .ai-scroll-wrap>div:last-child div, #player-section .ai-wrap .ai-audio-control{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_second_color).'!important;';
	$ultimate_audio_streaming_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_width_layout_options','Default');
    if($ultimate_audio_streaming_theme_lay == 'Default'){
		$ultimate_audio_streaming_custom_css .='body{';
			$ultimate_audio_streaming_custom_css .='max-width: 100%;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Container Layout'){
		$ultimate_audio_streaming_custom_css .='body{';
			$ultimate_audio_streaming_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='.page-template-home-page #header{';
			$ultimate_audio_streaming_custom_css .='position: static; background-color: #020723;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Box Layout'){
		$ultimate_audio_streaming_custom_css .='body{';
			$ultimate_audio_streaming_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='.page-template-home-page #header{';
			$ultimate_audio_streaming_custom_css .='position: static; background-color: #020723;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$ultimate_audio_streaming_footer_text_align = get_theme_mod('ultimate_audio_streaming_footer_text_align');
	$ultimate_audio_streaming_custom_css .='.copyright-wrapper{';
		$ultimate_audio_streaming_custom_css .='text-align: '.esc_attr($ultimate_audio_streaming_footer_text_align).';';
	$ultimate_audio_streaming_custom_css .='}';
	$ultimate_audio_streaming_custom_css .='
	@media screen and (max-width:575px) {
		.copyright-wrapper{';
			$ultimate_audio_streaming_custom_css .='text-align: center;'.esc_attr($ultimate_audio_streaming_footer_text_align).'';
	$ultimate_audio_streaming_custom_css .='} }';

	$ultimate_audio_streaming_footer_text_padding = get_theme_mod('ultimate_audio_streaming_footer_text_padding');
	$ultimate_audio_streaming_custom_css .='.copyright-wrapper{';
		$ultimate_audio_streaming_custom_css .='padding-top: '.esc_attr($ultimate_audio_streaming_footer_text_padding).'px !important; padding-bottom: '.esc_attr($ultimate_audio_streaming_footer_text_padding).'px !important;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_footer_bg_color = get_theme_mod('ultimate_audio_streaming_footer_bg_color');
	$ultimate_audio_streaming_custom_css .='.footer-wp{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_footer_bg_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_footer_bg_image = get_theme_mod('ultimate_audio_streaming_footer_bg_image');
	if($ultimate_audio_streaming_footer_bg_image != false){
		$ultimate_audio_streaming_custom_css .='.footer-wp{';
			$ultimate_audio_streaming_custom_css .='background: url('.esc_attr($ultimate_audio_streaming_footer_bg_image).'); background-size: cover;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_footer_heading_font_size = get_theme_mod('ultimate_audio_streaming_footer_heading_font_size');
	$ultimate_audio_streaming_custom_css .='.footer-wp h3{';
		$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_footer_heading_font_size).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_footer_heading_text_tranform','Capitalize');
    if($ultimate_audio_streaming_theme_lay == 'Uppercase'){
		$ultimate_audio_streaming_custom_css .='.footer-wp h3, .footer-wp .wp-block-heading{';
			$ultimate_audio_streaming_custom_css .='text-transform: uppercase;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Lowercase'){
		$ultimate_audio_streaming_custom_css .='.footer-wp h3, .footer-wp .wp-block-heading{';
			$ultimate_audio_streaming_custom_css .='text-transform: lowercase;';
		$ultimate_audio_streaming_custom_css .='}';
	}
	else if($ultimate_audio_streaming_theme_lay == 'Capitalize'){
		$ultimate_audio_streaming_custom_css .='.footer-wp h3, .footer-wp .wp-block-heading{';
			$ultimate_audio_streaming_custom_css .='text-transform: capitalize;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_footer_heading_font_weight = get_theme_mod( 'ultimate_audio_streaming_footer_heading_font_weight','500');
	if($ultimate_audio_streaming_footer_heading_font_weight != ''){
		$ultimate_audio_streaming_custom_css .='.footer-wp h3, .footer-wp .wp-block-heading{';
			$ultimate_audio_streaming_custom_css .='font-weight: '.esc_attr($ultimate_audio_streaming_footer_heading_font_weight).';';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// footer padding
	$ultimate_audio_streaming_footer_padding = get_theme_mod('ultimate_audio_streaming_footer_padding');
	$ultimate_audio_streaming_custom_css .='.footer-wp{';
		$ultimate_audio_streaming_custom_css .='padding: '.esc_attr($ultimate_audio_streaming_footer_padding).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	// Footer Attatchment
	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_footer_attatchment','scroll');
	if($ultimate_audio_streaming_theme_lay == 'fixed'){
		$ultimate_audio_streaming_custom_css .='.footer-wp{';
			$ultimate_audio_streaming_custom_css .='background-attachment: fixed;';
		$ultimate_audio_streaming_custom_css .='}';
	}elseif ($ultimate_audio_streaming_theme_lay == 'scroll'){
		$ultimate_audio_streaming_custom_css .='.footer-wp{';
			$ultimate_audio_streaming_custom_css .='background-attachment: scroll;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_copyright_text_font_size = get_theme_mod('ultimate_audio_streaming_copyright_text_font_size', 15);
	$ultimate_audio_streaming_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_copyright_text_font_size).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_footer_heading = get_theme_mod( 'ultimate_audio_streaming_footer_heading','Left');
    if($ultimate_audio_streaming_footer_heading == 'Left'){
		$ultimate_audio_streaming_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
		$ultimate_audio_streaming_custom_css .='text-align: left;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_footer_heading == 'Center'){
		$ultimate_audio_streaming_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$ultimate_audio_streaming_custom_css .='text-align: center;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$ultimate_audio_streaming_custom_css .='margin: 7px auto;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$ultimate_audio_streaming_custom_css .='text-align: left;';
				$ultimate_audio_streaming_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$ultimate_audio_streaming_custom_css .='margin: 7px 0 0;';
				$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_footer_heading == 'Right'){
		$ultimate_audio_streaming_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$ultimate_audio_streaming_custom_css .='text-align: right; padding-bottom: 25px;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='.footer-wp .widget, .footer-wp aside{';
			$ultimate_audio_streaming_custom_css .='position: relative;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$ultimate_audio_streaming_custom_css .='position: absolute; right: 0;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$ultimate_audio_streaming_custom_css .='text-align: left;';
				$ultimate_audio_streaming_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$ultimate_audio_streaming_custom_css .='left: 0;';
				$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_footer_content = get_theme_mod( 'ultimate_audio_streaming_footer_content','Left');
    if($ultimate_audio_streaming_footer_content == 'Left'){
		$ultimate_audio_streaming_custom_css .='.footer-wp .widget{';
		$ultimate_audio_streaming_custom_css .='text-align: left;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_footer_content == 'Center'){
		$ultimate_audio_streaming_custom_css .='.footer-wp .widget{';
			$ultimate_audio_streaming_custom_css .='text-align: center;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$ultimate_audio_streaming_custom_css .='text-align: left;';
				$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_footer_content == 'Right'){
		$ultimate_audio_streaming_custom_css .='.footer-wp .widget{';
			$ultimate_audio_streaming_custom_css .='text-align: right;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$ultimate_audio_streaming_custom_css .='text-align: left;';
				$ultimate_audio_streaming_custom_css .='} }';
	}

	/*------------- Back to Top  -------------------*/
	$ultimate_audio_streaming_back_to_top_border_radius = get_theme_mod('ultimate_audio_streaming_back_to_top_border_radius');
	$ultimate_audio_streaming_custom_css .='#scrollbutton {';
		$ultimate_audio_streaming_custom_css .='border-radius: '.esc_attr($ultimate_audio_streaming_back_to_top_border_radius).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_scroll_icon_font_size = get_theme_mod('ultimate_audio_streaming_scroll_icon_font_size', 22);
	$ultimate_audio_streaming_custom_css .='#scrollbutton {';
		$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_scroll_icon_font_size).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_top_bottom_scroll_padding = get_theme_mod('ultimate_audio_streaming_top_bottom_scroll_padding', 7);
	$ultimate_audio_streaming_custom_css .='#scrollbutton {';
		$ultimate_audio_streaming_custom_css .='padding-top: '.esc_attr($ultimate_audio_streaming_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($ultimate_audio_streaming_top_bottom_scroll_padding).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_left_right_scroll_padding = get_theme_mod('ultimate_audio_streaming_left_right_scroll_padding', 17);
	$ultimate_audio_streaming_custom_css .='#scrollbutton {';
		$ultimate_audio_streaming_custom_css .='padding-left: '.esc_attr($ultimate_audio_streaming_left_right_scroll_padding).'px; padding-right: '.esc_attr($ultimate_audio_streaming_left_right_scroll_padding).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	//First Cap
	$ultimate_audio_streaming_show_first_caps = get_theme_mod('ultimate_audio_streaming_show_first_caps', 'false');
	if($ultimate_audio_streaming_show_first_caps == 'true' ){
	$ultimate_audio_streaming_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter{';
	$ultimate_audio_streaming_custom_css .=' font-size: 55px; font-weight: 600;';
	$ultimate_audio_streaming_custom_css .=' margin-right: 6px;';
	$ultimate_audio_streaming_custom_css .=' line-height: 1;';
	$ultimate_audio_streaming_custom_css .='}';
	}elseif($ultimate_audio_streaming_show_first_caps == 'false' ){
	$ultimate_audio_streaming_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter {';
	$ultimate_audio_streaming_custom_css .='display: none;';
	$ultimate_audio_streaming_custom_css .='}';
	}

	/*-------------- Post Button  -------------------*/

	$ultimate_audio_streaming_btn_font_size_option = get_theme_mod('ultimate_audio_streaming_btn_font_size_option');
	$ultimate_audio_streaming_custom_css .='.postbtn a{';
		$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_btn_font_size_option).'px !important;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_tranform_button_text','Capitalize');
    if($ultimate_audio_streaming_theme_lay == 'Uppercase'){
		$ultimate_audio_streaming_custom_css .='.postbtn a{';
			$ultimate_audio_streaming_custom_css .='text-transform: Uppercase;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Lowercase'){
		$ultimate_audio_streaming_custom_css .='.postbtn a{';
			$ultimate_audio_streaming_custom_css .='text-transform: Lowercase;';
		$ultimate_audio_streaming_custom_css .='}';
	}
	else if($ultimate_audio_streaming_theme_lay == 'Capitalize'){
		$ultimate_audio_streaming_custom_css .='.postbtn a{';
			$ultimate_audio_streaming_custom_css .='text-transform: Capitalize;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// button font weight
	$ultimate_audio_streaming_button_font_weight = get_theme_mod( 'ultimate_audio_streaming_button_font_weight','500');
	if($ultimate_audio_streaming_button_font_weight != ''){
		$ultimate_audio_streaming_custom_css .='.postbtn a{';
			$ultimate_audio_streaming_custom_css .='font-weight: '.esc_attr($ultimate_audio_streaming_button_font_weight).';';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_post_button_padding_top = get_theme_mod('ultimate_audio_streaming_post_button_padding_top');
	$ultimate_audio_streaming_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$ultimate_audio_streaming_custom_css .='padding-top: '.esc_attr($ultimate_audio_streaming_post_button_padding_top).'px; padding-bottom: '.esc_attr($ultimate_audio_streaming_post_button_padding_top).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_post_button_padding_right = get_theme_mod('ultimate_audio_streaming_post_button_padding_right');
	$ultimate_audio_streaming_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$ultimate_audio_streaming_custom_css .='padding-left: '.esc_attr($ultimate_audio_streaming_post_button_padding_right).'px; padding-right: '.esc_attr($ultimate_audio_streaming_post_button_padding_right).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_post_button_border_radius = get_theme_mod('ultimate_audio_streaming_post_button_border_radius');
	$ultimate_audio_streaming_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$ultimate_audio_streaming_custom_css .='border-radius: '.esc_attr($ultimate_audio_streaming_post_button_border_radius).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_post_comment_enable = get_theme_mod('ultimate_audio_streaming_post_comment_enable',true);
	if($ultimate_audio_streaming_post_comment_enable == false){
		$ultimate_audio_streaming_custom_css .='#comments{';
			$ultimate_audio_streaming_custom_css .='display: none;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// preloader background image
	$ultimate_audio_streaming_preloader_bg_image = get_theme_mod('ultimate_audio_streaming_preloader_bg_image');
	if($ultimate_audio_streaming_preloader_bg_image != false){
		$ultimate_audio_streaming_custom_css .='.frame{';
			$ultimate_audio_streaming_custom_css .='background: url('.esc_attr($ultimate_audio_streaming_preloader_bg_image).'); background-size: cover;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$ultimate_audio_streaming_preloader_bg_color_option = get_theme_mod('ultimate_audio_streaming_preloader_bg_color_option');
	$ultimate_audio_streaming_preloader_icon_color_option = get_theme_mod('ultimate_audio_streaming_preloader_icon_color_option');
	$ultimate_audio_streaming_custom_css .='.frame{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_preloader_bg_color_option).';';
	$ultimate_audio_streaming_custom_css .='}';
	$ultimate_audio_streaming_custom_css .='.dot-1,.dot-2,.dot-3{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_preloader_icon_color_option).';';
	$ultimate_audio_streaming_custom_css .='}';

	// preloader type
	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_preloader_type','First Preloader Type');
    if($ultimate_audio_streaming_theme_lay == 'First Preloader Type'){
		$ultimate_audio_streaming_custom_css .='.dot-1, .dot-2, .dot-3{';
			$ultimate_audio_streaming_custom_css .='';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Second Preloader Type'){
		$ultimate_audio_streaming_custom_css .='.dot-1, .dot-2, .dot-3{';
			$ultimate_audio_streaming_custom_css .='border-radius:0;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	/*------------------ Skin Option  -------------------*/
	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_background_skin','Without Background');
    if($ultimate_audio_streaming_theme_lay == 'With Background'){
		$ultimate_audio_streaming_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$ultimate_audio_streaming_custom_css .='background-color: #fff; padding:20px;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='.login-box a{';
			$ultimate_audio_streaming_custom_css .='background-color: #fff;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Without Background'){
		$ultimate_audio_streaming_custom_css .='{';
			$ultimate_audio_streaming_custom_css .='background-color: transparent;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$ultimate_audio_streaming_woocommerce_button_padding_top = get_theme_mod('ultimate_audio_streaming_woocommerce_button_padding_top',12);
	$ultimate_audio_streaming_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$ultimate_audio_streaming_custom_css .='padding-top: '.esc_attr($ultimate_audio_streaming_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($ultimate_audio_streaming_woocommerce_button_padding_top).'px;';
	$ultimate_audio_streaming_custom_css .='}';
	

	$ultimate_audio_streaming_woocommerce_button_padding_right = get_theme_mod('ultimate_audio_streaming_woocommerce_button_padding_right',15);
	$ultimate_audio_streaming_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$ultimate_audio_streaming_custom_css .='padding-left: '.esc_attr($ultimate_audio_streaming_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($ultimate_audio_streaming_woocommerce_button_padding_right).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_woocommerce_button_border_radius = get_theme_mod('ultimate_audio_streaming_woocommerce_button_border_radius',0);
	$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart{';
		$ultimate_audio_streaming_custom_css .='border-radius: '.esc_attr($ultimate_audio_streaming_woocommerce_button_border_radius).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_related_product_enable = get_theme_mod('ultimate_audio_streaming_related_product_enable',true);
	if($ultimate_audio_streaming_related_product_enable == false){
		$ultimate_audio_streaming_custom_css .='.related.products{';
			$ultimate_audio_streaming_custom_css .='display: none;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_woocommerce_product_border_enable = get_theme_mod('ultimate_audio_streaming_woocommerce_product_border_enable',false);
	if($ultimate_audio_streaming_woocommerce_product_border_enable == false){
		$ultimate_audio_streaming_custom_css .='.products li{';
			$ultimate_audio_streaming_custom_css .='border: none;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_woocommerce_product_border_enable == true){
		$ultimate_audio_streaming_custom_css .='.products li{';
			$ultimate_audio_streaming_custom_css .='border: 1px solid #ccc;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_woocommerce_product_padding_top = get_theme_mod('ultimate_audio_streaming_woocommerce_product_padding_top',0);
	$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ultimate_audio_streaming_custom_css .='padding-top: '.esc_attr($ultimate_audio_streaming_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($ultimate_audio_streaming_woocommerce_product_padding_top).'px !important;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_woocommerce_product_padding_right = get_theme_mod('ultimate_audio_streaming_woocommerce_product_padding_right',0);
	$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ultimate_audio_streaming_custom_css .='padding-left: '.esc_attr($ultimate_audio_streaming_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($ultimate_audio_streaming_woocommerce_product_padding_right).'px !important;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_woocommerce_product_border_radius = get_theme_mod('ultimate_audio_streaming_woocommerce_product_border_radius',3);
	$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ultimate_audio_streaming_custom_css .='border-radius: '.esc_attr($ultimate_audio_streaming_woocommerce_product_border_radius).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_woocommerce_product_box_shadow = get_theme_mod('ultimate_audio_streaming_woocommerce_product_box_shadow', 0);
	$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ultimate_audio_streaming_custom_css .='box-shadow: '.esc_attr($ultimate_audio_streaming_woocommerce_product_box_shadow).'px '.esc_attr($ultimate_audio_streaming_woocommerce_product_box_shadow).'px '.esc_attr($ultimate_audio_streaming_woocommerce_product_box_shadow).'px #ddd;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_woo_product_sale_top_bottom_padding = get_theme_mod('ultimate_audio_streaming_woo_product_sale_top_bottom_padding', 0);
	$ultimate_audio_streaming_woo_product_sale_left_right_padding = get_theme_mod('ultimate_audio_streaming_woo_product_sale_left_right_padding', 0);
	$ultimate_audio_streaming_custom_css .='.woocommerce span.onsale{';
		$ultimate_audio_streaming_custom_css .='padding-top: '.esc_attr($ultimate_audio_streaming_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($ultimate_audio_streaming_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($ultimate_audio_streaming_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($ultimate_audio_streaming_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_woo_product_sale_border_radius = get_theme_mod('ultimate_audio_streaming_woo_product_sale_border_radius',0);
	$ultimate_audio_streaming_custom_css .='.woocommerce span.onsale {';
		$ultimate_audio_streaming_custom_css .='border-radius: '.esc_attr($ultimate_audio_streaming_woo_product_sale_border_radius).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_woo_product_sale_position = get_theme_mod('ultimate_audio_streaming_woo_product_sale_position', 'Left');
	if($ultimate_audio_streaming_woo_product_sale_position == 'Right' ){
		$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ultimate_audio_streaming_custom_css .=' left:auto; right:0;';
		$ultimate_audio_streaming_custom_css .='}';
	}elseif($ultimate_audio_streaming_woo_product_sale_position == 'Left' ){
		$ultimate_audio_streaming_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ultimate_audio_streaming_custom_css .=' left:0; right:auto;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_wooproduct_sale_font_size = get_theme_mod('ultimate_audio_streaming_wooproduct_sale_font_size',14);
	$ultimate_audio_streaming_custom_css .='.woocommerce span.onsale{';
		$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_wooproduct_sale_font_size).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	// Responsive Media
	$ultimate_audio_streaming_post_date = get_theme_mod( 'ultimate_audio_streaming_display_post_date',true);
	if($ultimate_audio_streaming_post_date == true && get_theme_mod( 'ultimate_audio_streaming_metafields_date',true) != true){
    	$ultimate_audio_streaming_custom_css .='.metabox .entry-date{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_post_date == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-date{';
			$ultimate_audio_streaming_custom_css .='display:inline-block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_post_date == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-date{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_post_author = get_theme_mod( 'ultimate_audio_streaming_display_post_author',true);
	if($ultimate_audio_streaming_post_author == true && get_theme_mod( 'ultimate_audio_streaming_metafields_author',true) != true){
    	$ultimate_audio_streaming_custom_css .='.metabox .entry-author{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_post_author == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-author{';
			$ultimate_audio_streaming_custom_css .='display:inline-block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_post_author == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-author{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_post_comment = get_theme_mod( 'ultimate_audio_streaming_display_post_comment',true);
	if($ultimate_audio_streaming_post_comment == true && get_theme_mod( 'ultimate_audio_streaming_metafields_comment',true) != true){
    	$ultimate_audio_streaming_custom_css .='.metabox .entry-comments{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_post_comment == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-comments{';
			$ultimate_audio_streaming_custom_css .='display:inline-block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_post_comment == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-comments{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_post_time = get_theme_mod( 'ultimate_audio_streaming_display_post_time',false);
	if($ultimate_audio_streaming_post_time == true && get_theme_mod( 'ultimate_audio_streaming_metafields_time',false) != true){
    	$ultimate_audio_streaming_custom_css .='.metabox .entry-time{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_post_time == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-time{';
			$ultimate_audio_streaming_custom_css .='display:inline-block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_post_time == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='.metabox .entry-time{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	if($ultimate_audio_streaming_post_date == false && $ultimate_audio_streaming_post_author == false && $ultimate_audio_streaming_post_comment == false && $ultimate_audio_streaming_post_time == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
    	$ultimate_audio_streaming_custom_css .='.metabox {';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_metafields_date = get_theme_mod( 'ultimate_audio_streaming_metafields_date',true);
	$ultimate_audio_streaming_metafields_author = get_theme_mod( 'ultimate_audio_streaming_metafields_author',true);
	$ultimate_audio_streaming_metafields_comment = get_theme_mod( 'ultimate_audio_streaming_metafields_comment',true);
	$ultimate_audio_streaming_metafields_time = get_theme_mod( 'ultimate_audio_streaming_metafields_time',true);
	if($ultimate_audio_streaming_metafields_date == false && $ultimate_audio_streaming_metafields_author == false && $ultimate_audio_streaming_metafields_comment == false && $ultimate_audio_streaming_metafields_time == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (min-width:576px) {';
    	$ultimate_audio_streaming_custom_css .='.metabox {';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_slider = get_theme_mod( 'ultimate_audio_streaming_display_slider',true);
	if($ultimate_audio_streaming_slider == true && get_theme_mod( 'ultimate_audio_streaming_slider_hide', false) == false){
    	$ultimate_audio_streaming_custom_css .='#slider{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_slider == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='#slider{';
			$ultimate_audio_streaming_custom_css .='display:block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_slider == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='#slider{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_sidebar = get_theme_mod( 'ultimate_audio_streaming_display_sidebar',true);
    if($ultimate_audio_streaming_sidebar == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='#sidebar{';
			$ultimate_audio_streaming_custom_css .='display:block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_sidebar == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='#sidebar{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_scroll = get_theme_mod( 'ultimate_audio_streaming_display_scrolltop',true);
	if($ultimate_audio_streaming_scroll == true && get_theme_mod( 'ultimate_audio_streaming_hide_show_scroll',true) != true){
    	$ultimate_audio_streaming_custom_css .='#scrollbutton {';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_scroll == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='#scrollbutton {';
			$ultimate_audio_streaming_custom_css .='display:block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_scroll == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='#scrollbutton {';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_preloader = get_theme_mod( 'ultimate_audio_streaming_display_preloader',false);
	if($ultimate_audio_streaming_preloader == true && get_theme_mod( 'ultimate_audio_streaming_preloader',false) == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (min-width:575px) {';
    	$ultimate_audio_streaming_custom_css .='.frame{';
			$ultimate_audio_streaming_custom_css .=' visibility: hidden;';
		$ultimate_audio_streaming_custom_css .='} }';
	}
    if($ultimate_audio_streaming_preloader == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='.frame{';
			$ultimate_audio_streaming_custom_css .='visibility:visible;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_preloader == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='.frame{';
			$ultimate_audio_streaming_custom_css .='visibility: hidden;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_search = get_theme_mod( 'ultimate_audio_streaming_display_search_category',true);
	if($ultimate_audio_streaming_search == true && get_theme_mod( 'ultimate_audio_streaming_search_enable_disable',true) != true){
    	$ultimate_audio_streaming_custom_css .='.search-cat-box{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_search == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='.search-cat-box{';
			$ultimate_audio_streaming_custom_css .='display:block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_search == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='.search-cat-box{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	$ultimate_audio_streaming_myaccount = get_theme_mod( 'ultimate_audio_streaming_display_myaccount',true);
	if($ultimate_audio_streaming_myaccount == true && get_theme_mod( 'ultimate_audio_streaming_myaccount_enable_disable',true) != true){
    	$ultimate_audio_streaming_custom_css .='.login-box{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} ';
	}
    if($ultimate_audio_streaming_myaccount == true){
    	$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px) {';
		$ultimate_audio_streaming_custom_css .='.login-box{';
			$ultimate_audio_streaming_custom_css .='display:block;';
		$ultimate_audio_streaming_custom_css .='} }';
	}else if($ultimate_audio_streaming_myaccount == false){
		$ultimate_audio_streaming_custom_css .='@media screen and (max-width:575px){';
		$ultimate_audio_streaming_custom_css .='.login-box{';
			$ultimate_audio_streaming_custom_css .='display:none;';
		$ultimate_audio_streaming_custom_css .='} }';
	}

	//slider heading color
	$ultimate_audio_streaming_slider_heading_color = get_theme_mod('ultimate_audio_streaming_slider_heading_color');
	$ultimate_audio_streaming_custom_css .='#slider .inner_carousel h1{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_slider_heading_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	//slider text color
	$ultimate_audio_streaming_slider_text_color = get_theme_mod('ultimate_audio_streaming_slider_text_color');
	$ultimate_audio_streaming_custom_css .='#slider .inner_carousel p{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_slider_text_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	//slider button text color
	$ultimate_audio_streaming_slider_btn_text_color = get_theme_mod('ultimate_audio_streaming_slider_btn_text_color');
	$ultimate_audio_streaming_custom_css .='#slider .more-btn a{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_slider_btn_text_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	/*------------ Slider Opacity -------------------*/
	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_slider_opacity','0.4');
	if($ultimate_audio_streaming_theme_lay == '0'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.1'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.1';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.2'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.2';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.3'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.3';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.4'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.4';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.5'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.5';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.6'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.6';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.7'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.7';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.8'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.8';
	$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == '0.9'){
	$ultimate_audio_streaming_custom_css .='#slider .slider-bg img{';
		$ultimate_audio_streaming_custom_css .='opacity:0.9';
	$ultimate_audio_streaming_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_slider_content_layout','Left');
    if($ultimate_audio_streaming_theme_lay == 'Left'){
		$ultimate_audio_streaming_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$ultimate_audio_streaming_custom_css .='text-align:left;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Center'){
		$ultimate_audio_streaming_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$ultimate_audio_streaming_custom_css .='text-align:center; ';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Right'){
		$ultimate_audio_streaming_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$ultimate_audio_streaming_custom_css .='text-align:right;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// menu settings
	$ultimate_audio_streaming_menu_font_size_option = get_theme_mod('ultimate_audio_streaming_menu_font_size_option');
	$ultimate_audio_streaming_custom_css .='.primary-navigation ul li a{';
		$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_menu_font_size_option).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_menu_padding = get_theme_mod('ultimate_audio_streaming_menu_padding');
	$ultimate_audio_streaming_custom_css .='.primary-navigation ul li a{';
		$ultimate_audio_streaming_custom_css .='padding: '.esc_attr($ultimate_audio_streaming_menu_padding).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_theme_lay = get_theme_mod( 'ultimate_audio_streaming_text_tranform_menu','Capitalize');
    if($ultimate_audio_streaming_theme_lay == 'Uppercase'){
		$ultimate_audio_streaming_custom_css .='.primary-navigation ul li a{';
			$ultimate_audio_streaming_custom_css .='text-transform: uppercase;';
		$ultimate_audio_streaming_custom_css .='}';
	}else if($ultimate_audio_streaming_theme_lay == 'Lowercase'){
		$ultimate_audio_streaming_custom_css .='.primary-navigation ul li a{';
			$ultimate_audio_streaming_custom_css .='text-transform: lowercase;';
		$ultimate_audio_streaming_custom_css .='}';
	}
	else if($ultimate_audio_streaming_theme_lay == 'Capitalize'){
		$ultimate_audio_streaming_custom_css .='.primary-navigation ul li a{';
			$ultimate_audio_streaming_custom_css .='text-transform: capitalize;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	//  comment form width
	$ultimate_audio_streaming_comment_form_width = get_theme_mod( 'ultimate_audio_streaming_comment_form_width');
	$ultimate_audio_streaming_custom_css .='#comments textarea{';
		$ultimate_audio_streaming_custom_css .='width: '.esc_attr($ultimate_audio_streaming_comment_form_width).'%;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_title_comment_form = get_theme_mod('ultimate_audio_streaming_title_comment_form', 'Leave a Reply');
	if($ultimate_audio_streaming_title_comment_form == ''){
		$ultimate_audio_streaming_custom_css .='#comments h2#reply-title {';
			$ultimate_audio_streaming_custom_css .='display: none;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	$ultimate_audio_streaming_comment_form_button_content = get_theme_mod('ultimate_audio_streaming_comment_form_button_content', 'Post Comment');
	if($ultimate_audio_streaming_comment_form_button_content == ''){
		$ultimate_audio_streaming_custom_css .='#comments p.form-submit {';
			$ultimate_audio_streaming_custom_css .='display: none;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// featured image setting
	$ultimate_audio_streaming_image_border_radius = get_theme_mod('ultimate_audio_streaming_image_border_radius', 0);
	$ultimate_audio_streaming_custom_css .='.box-image img, .content_box img{';
		$ultimate_audio_streaming_custom_css .='border-radius: '.esc_attr($ultimate_audio_streaming_image_border_radius).'%;';
	$ultimate_audio_streaming_custom_css .='}';

	$ultimate_audio_streaming_image_box_shadow = get_theme_mod('ultimate_audio_streaming_image_box_shadow',0);
	$ultimate_audio_streaming_custom_css .='.box-image img, .content_box img{';
		$ultimate_audio_streaming_custom_css .='box-shadow: '.esc_attr($ultimate_audio_streaming_image_box_shadow).'px '.esc_attr($ultimate_audio_streaming_image_box_shadow).'px '.esc_attr($ultimate_audio_streaming_image_box_shadow).'px #b5b5b5;';
	$ultimate_audio_streaming_custom_css .='}';

	// Post Block
	$ultimate_audio_streaming_post_block_option = get_theme_mod( 'ultimate_audio_streaming_post_block_option','By Block');
    if($ultimate_audio_streaming_post_block_option == 'By Without Block'){
		$ultimate_audio_streaming_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$ultimate_audio_streaming_custom_css .='border:none; margin:30px 0;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// post image 
	$ultimate_audio_streaming_post_featured_color = get_theme_mod('ultimate_audio_streaming_post_featured_color', '#B2298E');
	$ultimate_audio_streaming_post_featured_image = get_theme_mod('ultimate_audio_streaming_post_featured_image','Image');
	if($ultimate_audio_streaming_post_featured_image == 'Color'){
		$ultimate_audio_streaming_custom_css .='.post-color{';
			$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_post_featured_color).';';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// featured image dimention
	$ultimate_audio_streaming_post_featured_image_dimention = get_theme_mod('ultimate_audio_streaming_post_featured_image_dimention', 'Default');
	$ultimate_audio_streaming_post_featured_image_custom_width = get_theme_mod('ultimate_audio_streaming_post_featured_image_custom_width');
	$ultimate_audio_streaming_post_featured_image_custom_height = get_theme_mod('ultimate_audio_streaming_post_featured_image_custom_height');
	if($ultimate_audio_streaming_post_featured_image_dimention == 'Custom'){
		$ultimate_audio_streaming_custom_css .='.box-image img{';
			$ultimate_audio_streaming_custom_css .='width: '.esc_attr($ultimate_audio_streaming_post_featured_image_custom_width).'px; height: '.esc_attr($ultimate_audio_streaming_post_featured_image_custom_height).'px;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// featured image dimention
	$ultimate_audio_streaming_custom_post_color_width = get_theme_mod('ultimate_audio_streaming_custom_post_color_width');
	$ultimate_audio_streaming_custom_post_color_height = get_theme_mod('ultimate_audio_streaming_custom_post_color_height');
	if($ultimate_audio_streaming_post_featured_image == 'Color'){
		$ultimate_audio_streaming_custom_css .='.post-color{';
			$ultimate_audio_streaming_custom_css .='width: '.esc_attr($ultimate_audio_streaming_custom_post_color_width).'px; height: '.esc_attr($ultimate_audio_streaming_custom_post_color_height).'px;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// category color
	$ultimate_audio_streaming_category_color = get_theme_mod('ultimate_audio_streaming_category_color');
	$ultimate_audio_streaming_custom_css .='.content_box .category .post-categories li a{';
			$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_category_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	// category hover color
	$ultimate_audio_streaming_category_hover_color = get_theme_mod('ultimate_audio_streaming_category_hover_color');
	$ultimate_audio_streaming_custom_css .='.content_box .category .post-categories li a:hover{';
			$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_category_hover_color).';';
	$ultimate_audio_streaming_custom_css .='}';

	// site title font size
	$ultimate_audio_streaming_site_title_font_size = get_theme_mod('ultimate_audio_streaming_site_title_font_size', 25);
	$ultimate_audio_streaming_custom_css .='.logo .site-title{';
	$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_site_title_font_size).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	// site tagline font size
	$ultimate_audio_streaming_site_tagline_font_size = get_theme_mod('ultimate_audio_streaming_site_tagline_font_size', 13);
	$ultimate_audio_streaming_custom_css .='p.site-description{';
	$ultimate_audio_streaming_custom_css .='font-size: '.esc_attr($ultimate_audio_streaming_site_tagline_font_size).'px;';
	$ultimate_audio_streaming_custom_css .='}';

	// woocommerce Product Navigation
	$ultimate_audio_streaming_wooproducts_nav = get_theme_mod('ultimate_audio_streaming_wooproducts_nav', 'Yes');
	if($ultimate_audio_streaming_wooproducts_nav == 'No'){
		$ultimate_audio_streaming_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$ultimate_audio_streaming_custom_css .='display: none;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// site title color
	$ultimate_audio_streaming_site_title_color = get_theme_mod('ultimate_audio_streaming_site_title_color');
	$ultimate_audio_streaming_custom_css .='.site-title a{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_site_title_color).' !important;';
	$ultimate_audio_streaming_custom_css .='}';

	// site tagline color
	$ultimate_audio_streaming_site_tagline_color = get_theme_mod('ultimate_audio_streaming_site_tagline_color');
	$ultimate_audio_streaming_custom_css .='.site-description{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_site_tagline_color).' !important;';
	$ultimate_audio_streaming_custom_css .='}';

	// logo padding
	$ultimate_audio_streaming_logo_padding = get_theme_mod('ultimate_audio_streaming_logo_padding', 20);
	$ultimate_audio_streaming_custom_css .='.logo{';
		$ultimate_audio_streaming_custom_css .='padding: '.esc_attr($ultimate_audio_streaming_logo_padding).'px;';
	$ultimate_audio_streaming_custom_css .='}';
	
	// site toggle button color
	$ultimate_audio_streaming_toggle_button_color = get_theme_mod('ultimate_audio_streaming_toggle_button_color');
	$ultimate_audio_streaming_custom_css .='.toggle-menu i{';
		$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_toggle_button_color).' !important;';
	$ultimate_audio_streaming_custom_css .='}';

	//Copyright background css
	$ultimate_audio_streaming_copyright_text_background = get_theme_mod('ultimate_audio_streaming_copyright_text_background');
	$ultimate_audio_streaming_custom_css .='.copyright-wrapper{';
		$ultimate_audio_streaming_custom_css .='background-color: '.esc_attr($ultimate_audio_streaming_copyright_text_background).';';
	$ultimate_audio_streaming_custom_css .='}';

	// menu font weight
	$ultimate_audio_streaming_font_weight_option_menu = get_theme_mod( 'ultimate_audio_streaming_font_weight_option_menu','500');
	if($ultimate_audio_streaming_font_weight_option_menu != ''){
		$ultimate_audio_streaming_custom_css .='.primary-navigation ul li a{';
			$ultimate_audio_streaming_custom_css .='font-weight: '.esc_attr($ultimate_audio_streaming_font_weight_option_menu).'!important;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	// menu color
	$ultimate_audio_streaming_menu_color = get_theme_mod('ultimate_audio_streaming_menu_color','#fff');

	$ultimate_audio_streaming_custom_css .='.primary-navigation a, .primary-navigation ul li a, #site-navigation li a{';
			$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_menu_color).' ;';
	$ultimate_audio_streaming_custom_css .='}';

	// Sub menu color
	$ultimate_audio_streaming_sub_menu_color = get_theme_mod('ultimate_audio_streaming_sub_menu_color');

	$ultimate_audio_streaming_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a, .primary-navigation ul.children a, .primary-navigation ul.children li a, #site-navigation ul.children li a{';
			$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_sub_menu_color).' !important;';
	$ultimate_audio_streaming_custom_css .='}';

	// menu hover color
	$ultimate_audio_streaming_menu_hover_color = get_theme_mod('ultimate_audio_streaming_menu_hover_color');

	$ultimate_audio_streaming_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$ultimate_audio_streaming_custom_css .='color: '.esc_attr($ultimate_audio_streaming_menu_hover_color).' !important;';
	$ultimate_audio_streaming_custom_css .='}';

	/*----------------- Slider -----------------*/

	$ultimate_audio_streaming_slider_hide = get_theme_mod('ultimate_audio_streaming_slider_hide');
	if($ultimate_audio_streaming_slider_hide == false){
		$ultimate_audio_streaming_custom_css .='.page-template-home-page #header{';
			$ultimate_audio_streaming_custom_css .='position: static; background-color: #000;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	/*----------------- Topbar -----------------*/

	$ultimate_audio_streaming_show_topbar = get_theme_mod('ultimate_audio_streaming_show_topbar');
	if($ultimate_audio_streaming_show_topbar == false){
		$ultimate_audio_streaming_custom_css .='.logo{';
			$ultimate_audio_streaming_custom_css .='padding: 15px;';
		$ultimate_audio_streaming_custom_css .='}';
		$ultimate_audio_streaming_custom_css .='.page-template-home-page #header, #header{';
			$ultimate_audio_streaming_custom_css .='padding: 20px;';
		$ultimate_audio_streaming_custom_css .='}';
	}

	/*----------------- Social Links -----------------*/

	$ultimate_audio_streaming_social_links = get_theme_mod('ultimate_audio_streaming_social_links');
	if($ultimate_audio_streaming_social_links == false){
		$ultimate_audio_streaming_custom_css .='.topbar{';
			$ultimate_audio_streaming_custom_css .='padding: 10px;';
		$ultimate_audio_streaming_custom_css .='}';
		
	}

	/*----------------- Call us -----------------*/

	$ultimate_audio_streaming_phone_number = get_theme_mod('ultimate_audio_streaming_phone_number');
	if($ultimate_audio_streaming_phone_number == false){
		$ultimate_audio_streaming_custom_css .='.main-header{';
			$ultimate_audio_streaming_custom_css .='padding: 10px;';
		$ultimate_audio_streaming_custom_css .='}';
	}