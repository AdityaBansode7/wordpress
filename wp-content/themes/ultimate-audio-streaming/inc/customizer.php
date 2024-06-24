<?php
/**
 * Ultimate Audio Streaming Theme Customizer
 * @package Ultimate Audio Streaming
 */

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-sizer.php' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ultimate_audio_streaming_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_setting( 'ultimate_audio_streaming_logo_sizer',array(
		'default' => 50,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_logo_sizer',array(
		'label' => esc_html__( 'Logo Sizer','ultimate-audio-streaming' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100,
			'step' => 1,
		), 
	)));

 	// logo padding
	$wp_customize->add_setting( 'ultimate_audio_streaming_logo_padding',array(
		'default' => 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_logo_padding',array(
		'label' => esc_html__( 'Logo Padding','ultimate-audio-streaming' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_site_title_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_site_title_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Site Title','ultimate-audio-streaming'),
		'section' => 'title_tagline'
	));

 	$wp_customize->add_setting('ultimate_audio_streaming_site_title_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_site_title_font_size',array(
		'label' => esc_html__( 'Site Title Font Size (px)','ultimate-audio-streaming' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	)));

	// site title color
   $wp_customize->add_setting('ultimate_audio_streaming_site_title_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_site_title_color', array(
		'label'    => __('Site Title Color', 'ultimate-audio-streaming'),
		'section'  => 'title_tagline',
		'settings' => 'ultimate_audio_streaming_site_title_color',
	)));

   $wp_customize->add_setting('ultimate_audio_streaming_site_tagline_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_site_tagline_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Site Tagline','ultimate-audio-streaming'),
      'section' => 'title_tagline'
   ));

   $wp_customize->add_setting('ultimate_audio_streaming_site_tagline_font_size',array(
		'default'=> 13,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_site_tagline_font_size',array(
		'label' => esc_html__( 'Site Tagline Font Size (px)','ultimate-audio-streaming' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	// site tagline color
	$wp_customize->add_setting('ultimate_audio_streaming_site_tagline_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_site_tagline_color', array(
		'label'    => __('Site Tagline Color', 'ultimate-audio-streaming'),
		'section'  => 'title_tagline',
		'settings' => 'ultimate_audio_streaming_site_tagline_color',
	)));

    $wp_customize->add_setting('ultimate_audio_streaming_site_logo_inline',array(
		'default' => false,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
    ));
    $wp_customize->add_control('ultimate_audio_streaming_site_logo_inline',array(
		'type' => 'checkbox',
		'label' => __('Site logo inline with site title','ultimate-audio-streaming'),
		'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('ultimate_audio_streaming_background_skin',array(
     'default' => 'Without Background',
     'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_background_skin',array(
     'type' => 'radio',
     'label' => __('Background Skin','ultimate-audio-streaming'),
     'description' => __('Here you can add the background skin along with the background image.','ultimate-audio-streaming'),
     'section' => 'background_image',
     'choices' => array(
         'With Background' => __('With Background Skin','ultimate-audio-streaming'),
         'Without Background' => __('Without Background Skin','ultimate-audio-streaming'),
        ),
	) );

	//Important Links
	$wp_customize->add_section( 'ultimate_audio_streaming_important_links' , array(
    	'title' => esc_html__( 'Important Links', 'ultimate-audio-streaming' ),
    	'priority' => 10,
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_doc_link',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_doc_link',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_FREE_DOC) ." '>". esc_html('Documentation','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_important_links'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_demo_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_demo_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_LIVE_DEMO) ." '>". esc_html('Demo','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_important_links'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_forum_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_forum_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_FREE_SUPPORT) ." '>". esc_html('Support Forum','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_important_links'
	));

	//add home page setting pannel
	$wp_customize->add_panel( 'ultimate_audio_streaming_panel_id', array(
	    'priority' => 11,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'ultimate-audio-streaming' ),
	    'description' => __( 'Description of what this panel does.', 'ultimate-audio-streaming' ),
	) );

	$ultimate_audio_streaming_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One', 
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower', 
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit', 
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two', 
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda', 
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli', 
		'Marck Script'           => 'Marck Script', 
		'Noto Serif'             => 'Noto Serif', 
		'Open Sans'              => 'Open Sans', 
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen', 
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display', 
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik', 
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo', 
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two', 
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn', 
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	//Typography
	$wp_customize->add_section('ultimate_audio_streaming_typography', array(
		'title'    => __('Typography', 'ultimate-audio-streaming'),
		'panel'    => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_typography_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_typography_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_typography'
	));

	//This is body FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_body_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_body_color', array(
		'label'    => __('Body Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_body_color',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control(	'ultimate_audio_streaming_body_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('Body Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	$wp_customize->add_setting('ultimate_audio_streaming_body_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_body_font_size', array(
		'label'   => __('Body Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_body_font_size',
		'type'    => 'text',
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_paragraph_color', array(
		'label'    => __('Paragraph Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control(	'ultimate_audio_streaming_paragraph_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('Paragraph Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	$wp_customize->add_setting('ultimate_audio_streaming_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_paragraph_font_size',
		'type'    => 'text',
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_atag_color', array(
		'label'    => __('"a" Tag Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control(	'ultimate_audio_streaming_atag_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('"a" Tag Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_li_color', array(
		'label'    => __('"li" Tag Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control(	'ultimate_audio_streaming_li_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('"li" Tag Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_h1_color', array(
		'label'    => __('H1 Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h1_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('H1 Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('ultimate_audio_streaming_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h1_font_size', array(
		'label'   => __('H1 Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_h1_font_size',
		'type'    => 'text',
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_h2_color', array(
		'label'    => __('h2 Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control(
	'ultimate_audio_streaming_h2_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('h2 Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('ultimate_audio_streaming_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h2_font_size', array(
		'label'   => __('H2 Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_h2_font_size',
		'type'    => 'text',
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_h3_color', array(
		'label'    => __('H3 Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control(
	'ultimate_audio_streaming_h3_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('H3 Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('ultimate_audio_streaming_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h3_font_size', array(
		'label'   => __('H3 Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_h3_font_size',
		'type'    => 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_h4_color', array(
		'label'    => __('H4 Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h4_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('H4 Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('ultimate_audio_streaming_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h4_font_size', array(
		'label'   => __('H4 Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_h4_font_size',
		'type'    => 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_h5_color', array(
		'label'    => __('H5 Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h5_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('H5 Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('ultimate_audio_streaming_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h5_font_size', array(
		'label'   => __('H5 Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_h5_font_size',
		'type'    => 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h6_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_h6_color', array(
		'label'    => __('H6 Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_typography',
		'settings' => 'ultimate_audio_streaming_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('ultimate_audio_streaming_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h6_font_family', array(
		'section' => 'ultimate_audio_streaming_typography',
		'label'   => __('H6 Fonts', 'ultimate-audio-streaming'),
		'type'    => 'select',
		'choices' => $ultimate_audio_streaming_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('ultimate_audio_streaming_h6_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ultimate_audio_streaming_h6_font_size', array(
		'label'   => __('H6 Font Size', 'ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_typography',
		'setting' => 'ultimate_audio_streaming_h6_font_size',
		'type'    => 'text',
	));

 	//contact us Section
	$wp_customize->add_section('ultimate_audio_streaming_header_section',array(
		'title'	=> __('Header','ultimate-audio-streaming'),
		'description'	=> __('Add contact details here','ultimate-audio-streaming'),
		'priority'	=> null,
		'panel' => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_header_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_header_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_header_section'
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'ultimate_audio_streaming_show_topbar',array(
		'default' => false,
      'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	) );
	$wp_customize->add_control('ultimate_audio_streaming_show_topbar',array(
		'type' => 'checkbox',
	  'label' => __( 'Show / Hide Top Header','ultimate-audio-streaming' ),
	  'section' => 'ultimate_audio_streaming_header_section'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_phone_number'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_phone_number',array(
		'type' => 'text',
		'label' => __('Add Phone Number','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_header_section',
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_email_address',array(
		'type' => 'text',
		'label' => __('Add Email Address','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_header_section',
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_topbar_location',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_topbar_location',array(
		'type' => 'text',
		'label' => __('Add Location','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_header_section',
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_display_search',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_search',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Search','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_header_section'
 	));

 	//Social Icon Section
	$wp_customize->add_section('ultimate_audio_streaming_social_icon_section',array(
		'title'	=> __('Social Icon Section','ultimate-audio-streaming'),
		'description'	=> __('Add contact details here','ultimate-audio-streaming'),
		'priority'	=> null,
		'panel' => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_icons_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_icons_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_social_icon_section'
	));

	$wp_customize->add_setting( 'ultimate_audio_streaming_social_links',array(
		'default' => false,
   	'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	) );
 	$wp_customize->add_control('ultimate_audio_streaming_social_links',array(
    	'type' => 'checkbox',
		'label' => __( 'Show / Hide Social Links','ultimate-audio-streaming' ),
     	'section' => 'ultimate_audio_streaming_social_icon_section'
 	));

	$wp_customize->add_setting('ultimate_audio_streaming_facebook_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('ultimate_audio_streaming_facebook_url',array(
		'type' => 'url',
		'label' => __('Add Facebook URL','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_social_icon_section',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_youtube_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('ultimate_audio_streaming_youtube_url',array(
		'type' => 'url',
		'label' => __('Add Youtube URL','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_social_icon_section',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_pinterest_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('ultimate_audio_streaming_pinterest_url',array(
		'type' => 'url',
		'label' => __('Add Pinterest URL','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_social_icon_section',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_twitter_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('ultimate_audio_streaming_twitter_url',array(
		'type' => 'url',
		'label' => __('Add Twitter URL','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_social_icon_section',
	));

 	//Menus Section
	$wp_customize->add_section('ultimate_audio_streaming_menus_section',array(
		'title'	=> __('Menus Settings','ultimate-audio-streaming'),
		'description'	=> __('Add contact details here','ultimate-audio-streaming'),
		'priority'	=> null,
		'panel' => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_menu_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_menu_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_menus_section'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_menu_font_size_option',array(
		'default'=> 16,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize,'ultimate_audio_streaming_menu_font_size_option',array(
		'label'	=> __('Menu Font Size','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_menus_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_menu_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize,'ultimate_audio_streaming_menu_padding',array(
		'label'	=> __('Main Menu Padding','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_menus_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_text_tranform_menu',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_text_tranform_menu',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_menus_section',
		'choices' => array(
		   'Uppercase' => __('Uppercase','ultimate-audio-streaming'),
		   'Lowercase' => __('Lowercase','ultimate-audio-streaming'),
		   'Capitalize' => __('Capitalize','ultimate-audio-streaming'),
		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_font_weight_option_menu',array(
		'default' => '500',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_font_weight_option_menu',array(
		'type' => 'select',
		'label' => __('Menu Font Weight','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_menus_section',
		'choices' => array(
		   '100' => __('100','ultimate-audio-streaming'),
         '200' => __('200','ultimate-audio-streaming'),
         '300' => __('300','ultimate-audio-streaming'),
         '400' => __('400','ultimate-audio-streaming'),
         '500' => __('500','ultimate-audio-streaming'),
         '600' => __('600','ultimate-audio-streaming'),
         '700' => __('700','ultimate-audio-streaming'),
         '800' => __('800','ultimate-audio-streaming'),
         '900' => __('900','ultimate-audio-streaming'),
		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_menu_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_menu_color', array(
		'label'    => __('Menu Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_menus_section',
		'settings' => 'ultimate_audio_streaming_menu_color',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_sub_menu_color', array(
		'label'    => __('Submenu Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_menus_section',
		'settings' => 'ultimate_audio_streaming_sub_menu_color',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_menus_section',
		'settings' => 'ultimate_audio_streaming_menu_hover_color',
	)));

	//Slider Section
	$wp_customize->add_section( 'ultimate_audio_streaming_slider_section' , array(
    	'title'      => __( 'Slider Section', 'ultimate-audio-streaming' ),
		'priority'   => null,
		'panel' => 'ultimate_audio_streaming_panel_id'
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('You can change how many slides there are.','ultimate-audio-streaming') ."</li><li>". esc_html('You can change the font family and the colours of headings and subheadings.','ultimate-audio-streaming') ."</li><li>". esc_html('And so on...','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_slider_section'
	));
	
	$wp_customize->add_setting('ultimate_audio_streaming_slider_hide',array(
		'default' => false,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_hide',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable slider','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_slider_section',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_slider_small_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_small_heading',array(
		'label'	=> __('Add Slider Small Text','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_slider_section',
		'type'=> 'text',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'ultimate_audio_streaming_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'ultimate_audio_streaming_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'ultimate_audio_streaming_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'ultimate-audio-streaming' ),
			'section'  => 'ultimate_audio_streaming_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('ultimate_audio_streaming_slider_heading',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_heading',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Heading','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_slider_section'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_slider_heading_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_slider_heading_color', array(
		'label'    => __('Slider Heading Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_slider_section',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_slider_text',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_text',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Text','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_slider_section'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_slider_text_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_slider_text_color', array(
		'label'    => __('Slider Text Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_slider_section',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_show_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_show_slider_button',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide Slider Button','ultimate-audio-streaming'),
	   'section' => 'ultimate_audio_streaming_slider_section'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_slider_button_text',array(
		'default'	=> __('Now More','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_button_text',array(
		'label'	=> __('Slider Button Text','ultimate-audio-streaming'),
		'section'	=> 'ultimate_audio_streaming_slider_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_slider_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_button_link',array(
		'label'	=> esc_html__('Add Button Link','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_slider_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_slider_btn_text_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_slider_btn_text_color', array(
		'label'    => __('Button Text Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_slider_section',
	)));

	//Opacity
	$wp_customize->add_setting('ultimate_audio_streaming_slider_opacity',array(
		'default'           => 0.4,
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control( 'ultimate_audio_streaming_slider_opacity', array(
		'label'       => esc_html__( 'Slider Image Opacity','ultimate-audio-streaming' ),
		'section'     => 'ultimate_audio_streaming_slider_section',
		'type'        => 'select',
		'settings'    => 'ultimate_audio_streaming_slider_opacity',
		'choices' => array(
			'0' =>  esc_attr('0','ultimate-audio-streaming'),
			'0.1' =>  esc_attr('0.1','ultimate-audio-streaming'),
			'0.2' =>  esc_attr('0.2','ultimate-audio-streaming'),
			'0.3' =>  esc_attr('0.3','ultimate-audio-streaming'),
			'0.4' =>  esc_attr('0.4','ultimate-audio-streaming'),
			'0.5' =>  esc_attr('0.5','ultimate-audio-streaming'),
			'0.6' =>  esc_attr('0.6','ultimate-audio-streaming'),
			'0.7' =>  esc_attr('0.7','ultimate-audio-streaming'),
			'0.8' =>  esc_attr('0.8','ultimate-audio-streaming'),
			'0.9' =>  esc_attr('0.9','ultimate-audio-streaming')
		),
	));

	//content layout
   $wp_customize->add_setting('ultimate_audio_streaming_slider_content_layout',array(
    	'default' => 'Left',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_slider_content_layout',array(
		'type' => 'radio',
		'label' => __('Slider Content Layout','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_slider_section',
		'choices' => array(
		   'Center' => __('Center','ultimate-audio-streaming'),
		   'Left' => __('Left','ultimate-audio-streaming'),
		   'Right' => __('Right','ultimate-audio-streaming'),
		),
	) );

	// Track Player Section
	$wp_customize->add_section('ultimate_audio_streaming_track_player_section',array(
		'title'	=> __('Track Player Section','ultimate-audio-streaming'),
		'panel' => 'ultimate_audio_streaming_panel_id',
	));

		$wp_customize->add_setting('ultimate_audio_streaming_track_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_track_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_track_player_section'
	));

 	$wp_customize->add_setting('ultimate_audio_streaming_advance_track_player_shortcode',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_advance_track_player_shortcode',array(
		'label'	=> __('Add Track Player Shortcode','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_track_player_section',
		'type'=> 'text',
	));

	// Music Album Section
	$wp_customize->add_section('ultimate_audio_streaming_player_section_page',array(
		'title'	=> __('Music Album Section','ultimate-audio-streaming'),
		'panel' => 'ultimate_audio_streaming_panel_id',
	));

		$wp_customize->add_setting('ultimate_audio_streaming_music_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_music_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Includes settings to set section title.','ultimate-audio-streaming') ."</li><li>". esc_html('Contains settings for the background colour.','ultimate-audio-streaming') ."</li><li>". esc_html('Contains options for background images.','ultimate-audio-streaming') ."</li><li>". esc_html('You can change the font family and colours of heading.','ultimate-audio-streaming') ."</li><li>". esc_html('And so on...','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_player_section_page'
	));

 	$wp_customize->add_setting('ultimate_audio_streaming_advance_music_album_shortcode',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_advance_music_album_shortcode',array(
		'label'	=> __('Add Music Album Shortcode','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_player_section_page',
		'type'=> 'text',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_music_album_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_music_album_btn_text',array(
		'label'	=> esc_html__('Add Button Text','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_player_section_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_music_album_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('ultimate_audio_streaming_music_album_btn_link',array(
		'label'	=> esc_html__('Add Button Link','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_player_section_page',
		'type'=> 'url'
	));

	//layout setting
	$wp_customize->add_section( 'ultimate_audio_streaming_option', array(
    	'title'      => __( 'Layout Settings', 'ultimate-audio-streaming' ),
    	'panel'    => 'ultimate_audio_streaming_panel_id',
	) );

		$wp_customize->add_setting('ultimate_audio_streaming_layout_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_layout_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_option'
	));

	$wp_customize->add_setting( 'ultimate_audio_streaming_single_page_breadcrumb',array(
		'default' => false,
	   'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	) );
	$wp_customize->add_control('ultimate_audio_streaming_single_page_breadcrumb',array(
	   'type' => 'checkbox',
	   'label' => __( 'Show / Hide Single Page Breadcrumb','ultimate-audio-streaming' ),
	   'section' => 'ultimate_audio_streaming_option'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_preloader',array(
		'default' => false,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_preloader',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Preloader','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_option'
   ));

   $wp_customize->add_setting('ultimate_audio_streaming_preloader_type',array(
     	'default' => 'First Preloader Type',
     	'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_preloader_type',array(
      'type' => 'radio',
      'label' => __('Preloader Types','ultimate-audio-streaming'),
      'section' => 'ultimate_audio_streaming_option',
      'choices' => array(
         'First Preloader Type' => __('First Preloader Type','ultimate-audio-streaming'),
         'Second Preloader Type' => __('Second Preloader Type','ultimate-audio-streaming'),
      ),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_preloader_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ultimate_audio_streaming_preloader_bg_image',array(
     'label' => __('Preloader Background Image','ultimate-audio-streaming'),
     'section' => 'ultimate_audio_streaming_option'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_preloader_bg_color_option', array(
		'default'           => '#B2298E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_preloader_bg_color_option', array(
		'label'    => __('Preloader Background Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_option',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_preloader_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_preloader_icon_color_option', array(
		'label'    => __('Preloader Icon Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_option',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_width_layout_options',array(
		'default' => 'Default',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_width_layout_options',array(
		'type' => 'radio',
		'label' => __('Container Box','ultimate-audio-streaming'),
		'description' => __('Here you can change the Width layout. ','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_option',
		'choices' => array(
		   'Default' => __('Default','ultimate-audio-streaming'),
		   'Container Layout' => __('Container Layout','ultimate-audio-streaming'),
		   'Box Layout' => __('Box Layout','ultimate-audio-streaming'),
		),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('ultimate_audio_streaming_layout_options',array(
     'default' => 'Right Sidebar',
     'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	) );
	$wp_customize->add_control('ultimate_audio_streaming_layout_options', array(
     'type' => 'select',
     'label' => __('Select different post sidebar layout','ultimate-audio-streaming'),
     'section' => 'ultimate_audio_streaming_option',
     'choices' => array(
         'One Column' => __('One Column','ultimate-audio-streaming'),
         'Grid Layout' => __('Grid Layout','ultimate-audio-streaming'),
         'Left Sidebar' => __('Left Sidebar','ultimate-audio-streaming'),
         'Right Sidebar' => __('Right Sidebar','ultimate-audio-streaming')
        ),
	));

	$wp_customize->add_setting('ultimate_audio_streaming_sidebar_size',array(
     'default' => 'Sidebar 1/3',
     'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_sidebar_size',array(
     'type' => 'radio',
     'label' => __('Sidebar Size Option','ultimate-audio-streaming'),
     'section' => 'ultimate_audio_streaming_option',
     'choices' => array(
         'Sidebar 1/3' => __('Sidebar 1/3','ultimate-audio-streaming'),
         'Sidebar 1/4' => __('Sidebar 1/4','ultimate-audio-streaming'),
        ),
	) );

	//Global Color
	$wp_customize->add_section('ultimate_audio_streaming_global_color', array(
		'title'    => __('Theme Color Option', 'ultimate-audio-streaming'),
		'panel'    => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_global_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_global_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_global_color'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_first_color', array(
		'default'           => '#B2298E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_first_color', array(
		'label'    => __('First Highlight Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_global_color',
		'settings' => 'ultimate_audio_streaming_first_color',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_second_color', array(
		'default'           => '#492AD0',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_second_color', array(
		'label'    => __('Second Highlight Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_global_color',
		'settings' => 'ultimate_audio_streaming_second_color',
	)));

	//Blog Post Settings
	$wp_customize->add_section('ultimate_audio_streaming_post_settings', array(
		'title'    => __('Post General Settings', 'ultimate-audio-streaming'),
		'panel'    => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_post_settings'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_post_layouts',array(
     'default' => 'Layout 2',
     'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_post_layouts', array(
		'type' => 'select',
		'label' => __('Post Layouts','ultimate-audio-streaming'),
		'description' => __('Here you can change the 3 different layouts of post','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_post_settings',
		'choices' => array(
		   'Layout 1' => __('Layouts 1','ultimate-audio-streaming'),
		   'Layout 2' => __('Layouts 2','ultimate-audio-streaming'),
		   'Layout 3' => __('Layouts 3','ultimate-audio-streaming'),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_metafields_date',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_metafields_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_post_settings'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_post_date_icon',array(
		'label'	=> __('Post Date Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ultimate_audio_streaming_metafields_author',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
    ));
    $wp_customize->add_control('ultimate_audio_streaming_metafields_author',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Author','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_post_settings'
    ));

    $wp_customize->add_setting('ultimate_audio_streaming_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_post_author_icon',array(
		'label'	=> __('Post Author Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('ultimate_audio_streaming_metafields_comment',array(
		 'default' => true,
		 'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
    ));
    $wp_customize->add_control('ultimate_audio_streaming_metafields_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comments','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_post_settings'
    ));

    $wp_customize->add_setting('ultimate_audio_streaming_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_post_comment_icon',array(
		'label'	=> __('Post Comment Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_post_settings',
		'type'		=> 'icon'
	)));

   $wp_customize->add_setting('ultimate_audio_streaming_metafields_time',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_metafields_time',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Time','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_post_settings'
   ));

   $wp_customize->add_setting('ultimate_audio_streaming_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_post_time_icon',array(
		'label'	=> __('Post Time Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_post_settings',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting('ultimate_audio_streaming_post_block_option',array(
      'default' => 'By Block',
      'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_post_block_option',array(
      'type' => 'select',
      'label' => __('Blog Post Shown','ultimate-audio-streaming'),
      'section' => 'ultimate_audio_streaming_post_settings',
      'choices' => array(
         'By Block' => __('By Block','ultimate-audio-streaming'),
         'By Without Block' => __('By Without Block','ultimate-audio-streaming'),
     ),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_post_featured_image',array(
		'default' => 'Image',
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_post_featured_image',array(
		'type' => 'select',
		'label'	=> __('Post Image Options','ultimate-audio-streaming'),
		'choices' => array(
			'Image' => __('Image','ultimate-audio-streaming'),
			'Color' => __('Color','ultimate-audio-streaming'),
			'None' => __('None','ultimate-audio-streaming'),
	),
		'section'	=> 'ultimate_audio_streaming_post_settings',
	));

    $wp_customize->add_setting('ultimate_audio_streaming_post_featured_color', array(
		'default'           => '#B2298E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_post_featured_color', array(
		'label'    => __('Post Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_post_settings',
		'settings' => 'ultimate_audio_streaming_post_featured_color',
		'active_callback' => 'ultimate_audio_streaming_post_color_enabled'
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_custom_post_color_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_custom_post_color_width',	array(
		'label' => esc_html__( 'Color Post Custom Width','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'ultimate_audio_streaming_show_post_color'
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_custom_post_color_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_custom_post_color_height',array(
		'label' => esc_html__( 'Color Post Custom Height','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'ultimate_audio_streaming_show_post_color'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_post_featured_image_dimention',array(
		'default' => 'Default',
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_post_featured_image_dimention',array(
		'type' => 'select',
		'label'	=> __('Post Featured Image Dimention','ultimate-audio-streaming'),
		'choices' => array(
		   'Default' => __('Default','ultimate-audio-streaming'),
		   'Custom' => __('Custom','ultimate-audio-streaming'),
	),
		'section'	=> 'ultimate_audio_streaming_post_settings',
		'active_callback' => 'ultimate_audio_streaming_enable_post_featured_image'
	));

    $wp_customize->add_setting( 'ultimate_audio_streaming_post_featured_image_custom_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_post_featured_image_custom_width',	array(
		'label' => esc_html__( 'Post Featured Image Custom Width','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'ultimate_audio_streaming_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_post_featured_image_custom_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_post_featured_image_custom_height',	array(
		'label' => esc_html__( 'Post Featured Image Custom Height','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'ultimate_audio_streaming_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize,  'ultimate_audio_streaming_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','ultimate-audio-streaming' ),
		'section'     => 'ultimate_audio_streaming_post_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	)) );

	$wp_customize->add_setting( 'ultimate_audio_streaming_image_box_shadow',array(
		'default' => 0,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize,  'ultimate_audio_streaming_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_show_first_caps',array(
      'default' => false,
      'sanitize_callback' => 'ultimate_audio_streaming_sanitize_checkbox',
   ));
	$wp_customize->add_control( 'ultimate_audio_streaming_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'ultimate-audio-streaming'),
		'type' => 'checkbox',
		'section' => 'ultimate_audio_streaming_post_settings',
	));

   //Post excerpt
	$wp_customize->add_setting( 'ultimate_audio_streaming_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'ultimate_audio_streaming_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','ultimate-audio-streaming' ),
		'section'     => 'ultimate_audio_streaming_post_settings',
		'type'        => 'number',
		'settings'    => 'ultimate_audio_streaming_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_content_settings',array(
     'default' =>'Excerpt',
     'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_content_settings',array(
     'type' => 'radio',
     'label' => __('Content Settings','ultimate-audio-streaming'),
     'section' => 'ultimate_audio_streaming_post_settings',
     'choices' => array(
         'Excerpt' => __('Excerpt','ultimate-audio-streaming'),
         'Content' => __('Content','ultimate-audio-streaming'),
        ),
	) );

	$wp_customize->add_setting( 'ultimate_audio_streaming_post_discription_suffix', array(
		'default'   => __('[...]','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ultimate_audio_streaming_post_discription_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','ultimate-audio-streaming' ),
		'section'     => 'ultimate_audio_streaming_post_settings',
		'type'        => 'text',
		'settings'    => 'ultimate_audio_streaming_post_discription_suffix',
	) );

	$wp_customize->add_setting( 'ultimate_audio_streaming_blog_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ultimate_audio_streaming_blog_post_meta_seperator', array(
		'label'       => esc_html__( 'Meta Box Separator','ultimate-audio-streaming' ),
		'section'     => 'ultimate_audio_streaming_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','ultimate-audio-streaming'),
		'type'        => 'text',
		'settings'    => 'ultimate_audio_streaming_blog_post_meta_seperator',
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_enable_post_pagination',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_enable_post_pagination',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Blog Page Pagination','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_post_settings'
	));

 	$wp_customize->add_setting( 'ultimate_audio_streaming_post_pagination_position', array(
        'default'			=>  'Bottom', 
        'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control( 'ultimate_audio_streaming_post_pagination_position', array(
	  'section' => 'ultimate_audio_streaming_post_settings',
	  'type' => 'select',
	  'label' => __( 'Post Pagination Position', 'ultimate-audio-streaming' ),
	  'choices'		=> array(
	      'Top'  => __( 'Top', 'ultimate-audio-streaming' ),
	      'Bottom' => __( 'Bottom', 'ultimate-audio-streaming' ),
	      'Both Top & Bottom' => __( 'Both Top & Bottom', 'ultimate-audio-streaming' ),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_pagination_settings', array(
     'default'			=> 'Numeric Pagination',
     'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_choices'
 	));
 	$wp_customize->add_control( 'ultimate_audio_streaming_pagination_settings', array(
     'section' => 'ultimate_audio_streaming_post_settings',
     'type' => 'radio',
     'label' => __( 'Post Pagination', 'ultimate-audio-streaming' ),
     'choices'		=> array(
         'Numeric Pagination'  => __( 'Numeric Pagination', 'ultimate-audio-streaming' ),
         'next-prev' => __( 'Next / Previous', 'ultimate-audio-streaming' ),
 	)));

 	//Button Settings
	$wp_customize->add_section('ultimate_audio_streaming_button_settings', array(
		'title'    => __('Button Settings', 'ultimate-audio-streaming'),
		'panel'    => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_button_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_button_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_button_settings'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_button_text',array(
		'default'=> __('Read More','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_button_text',array(
		'label'	=> __('Add Button Text','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_btn_font_size_option',array(
		'default'=> 18,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize,'ultimate_audio_streaming_btn_font_size_option',array(
		'label'	=> __('Button Font Size','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_button_settings',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_tranform_button_text',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_tranform_button_text',array(
		'type' => 'select',
		'label' => __('Button Text Transform','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_button_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','ultimate-audio-streaming'),
		   'Lowercase' => __('Lowercase','ultimate-audio-streaming'),
		   'Capitalize' => __('Capitalize','ultimate-audio-streaming'),
		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_button_font_weight',array(
		'default' => '600',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_button_font_weight',array(
		'type' => 'select',
		'label' => __('Button Font Weight','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_button_settings',
		'choices' => array(
			'100' => __('100','ultimate-audio-streaming'),
			'200' => __('200','ultimate-audio-streaming'),
			'300' => __('300','ultimate-audio-streaming'),
			'400' => __('400','ultimate-audio-streaming'),
			'500' => __('500','ultimate-audio-streaming'),
			'600' => __('600','ultimate-audio-streaming'),
			'700' => __('700','ultimate-audio-streaming'),
			'800' => __('800','ultimate-audio-streaming'),
			'900' => __('900','ultimate-audio-streaming'),
		),
	) );

	$wp_customize->add_setting( 'ultimate_audio_streaming_post_button_padding_top',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_post_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_post_button_padding_right',array(
		'default' => 10,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_post_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_post_button_border_radius',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_post_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

 	//Single Post Settings
	$wp_customize->add_section('ultimate_audio_streaming_single_post_settings', array(
		'title'    => __('Single Post Settings', 'ultimate-audio-streaming'),
		'panel'    => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_single_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_single_post_settings'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_breadcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_single_post_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_date',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	 ));
 	$wp_customize->add_control('ultimate_audio_streaming_single_post_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_single_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_author',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_single_post_author',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Author','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
 	));

   $wp_customize->add_setting('ultimate_audio_streaming_single_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
      $wp_customize,'ultimate_audio_streaming_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comments','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
	));

 	$wp_customize->add_setting('ultimate_audio_streaming_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback' => 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer( $wp_customize, 'ultimate_audio_streaming_single_post_comment_icon', array(
		'label'	=> __('Single Post Comment Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_single_post_settings',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting('ultimate_audio_streaming_single_post_time',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_single_post_time',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Time','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings',
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_show_hide_single_post_categories',array( 
		'type' => 'checkbox',
		'label' => __('Single Post Categories','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
   ));

   $wp_customize->add_setting('ultimate_audio_streaming_category_color', array(
		'default'           => '#333',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_category_color', array(
		'label'    => __('Category Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_single_post_settings',
		'settings' => 'ultimate_audio_streaming_category_color',
	)));

   $wp_customize->add_setting('ultimate_audio_streaming_category_hover_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_category_hover_color', array(
		'label'    => __('Category Hover Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_single_post_settings',
		'settings' => 'ultimate_audio_streaming_category_hover_color',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_tags',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_single_post_tags',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Tags','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
 	));

	$wp_customize->add_setting('ultimate_audio_streaming_post_comment_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_post_comment_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable post comment','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings',
    ));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_featured_image',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
	$wp_customize->add_control('ultimate_audio_streaming_single_post_featured_image',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Featured image','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings',
 	));

	$wp_customize->add_setting('ultimate_audio_streaming_single_post_layout',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	) );
	$wp_customize->add_control('ultimate_audio_streaming_single_post_layout', array(
		'type' => 'select',
		'label' => __('Select different Single post sidebar layout','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings',
		'choices' => array(
			'One Column' => __('One Column','ultimate-audio-streaming'),
			'Left Sidebar' => __('Left Sidebar','ultimate-audio-streaming'),
			'Right Sidebar' => __('Right Sidebar','ultimate-audio-streaming')
     ),
	));

	$wp_customize->add_setting( 'ultimate_audio_streaming_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'ultimate_audio_streaming_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','ultimate-audio-streaming' ),
		'section'     => 'ultimate_audio_streaming_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','ultimate-audio-streaming'),
		'type'        => 'text',
		'settings'    => 'ultimate_audio_streaming_single_post_meta_seperator',
	));

	$wp_customize->add_setting( 'ultimate_audio_streaming_comment_form_width',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_comment_form_width',	array(
		'label' => esc_html__( 'Comment Form Width','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_title_comment_form',array(
		'default' => __('Leave a Reply','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_title_comment_form',array(
		'type' => 'text',
		'label' => __('Comment Form Heading Text','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_comment_form_button_content',array(
		'default' => __('Post Comment','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_comment_form_button_content',array(
		'type' => 'text',
		'label' => __('Comment Form Button Text','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
 	));

	$wp_customize->add_setting('ultimate_audio_streaming_enable_single_post_pagination',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_enable_single_post_pagination',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Single Post Pagination','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_single_post_settings'
 	));

   $wp_customize->add_setting('ultimate_audio_streaming_prev_text',array(
      'default' => 'Previous page',
      'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_prev_text',array(
      'type' => 'text',
      'label' => __('Previous Navigation Text','ultimate-audio-streaming'),
      'section' => 'ultimate_audio_streaming_single_post_settings'
   ));

   $wp_customize->add_setting('ultimate_audio_streaming_next_text',array(
      'default' => 'Next page',
      'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_next_text',array(
      'type' => 'text',
      'label' => __('Next Navigation Text','ultimate-audio-streaming'),
      'section' => 'ultimate_audio_streaming_single_post_settings'
   ));

	//Grid Post Settings
	$wp_customize->add_section('ultimate_audio_streaming_grid_post_settings', array(
		'title'    => __('Grid Post Settings', 'ultimate-audio-streaming'),
		'panel'    => 'ultimate_audio_streaming_panel_id',
	));

 	$wp_customize->add_setting('ultimate_audio_streaming_grid_post_date',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_grid_post_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_grid_post_settings',
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_grid_post_author',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_grid_post_author',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Author','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_grid_post_settings',
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_grid_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_grid_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comment','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_grid_post_settings',
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_single_post_time',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_single_post_time',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Time','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_grid_post_settings',
 	));

	//Related Post Settings
	$wp_customize->add_section('ultimate_audio_streaming_related_settings', array(
		'title'    => __('Related Post Settings', 'ultimate-audio-streaming'),
		'panel'    => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_related_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_related_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_related_settings'
	));

	$wp_customize->add_setting( 'ultimate_audio_streaming_related_enable_disable',array(
		'default' => true,
   	'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_related_enable_disable',array(
		'type' => 'checkbox',
	   'label' => __( 'Enable / Disable Related Post','ultimate-audio-streaming' ),
	   'section' => 'ultimate_audio_streaming_related_settings'
	));

 	$wp_customize->add_setting('ultimate_audio_streaming_related_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_related_title',array(
		'label'	=> __('Add Section Title','ultimate-audio-streaming'),
		'section'	=> 'ultimate_audio_streaming_related_settings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'ultimate_audio_streaming_related_posts_count_number', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ultimate_audio_streaming_related_posts_count_number', array(
		'label'       => esc_html__( 'Related Post Count','ultimate-audio-streaming' ),
		'section'     => 'ultimate_audio_streaming_related_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 10,
		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_related_posts_taxanomies',array(
        'default' => 'categories',
        'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_related_posts_taxanomies',array(
		'type' => 'radio',
		'label' => __('Post Taxonomies','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_related_settings',
		'choices' => array(
		   'categories' => __('Categories','ultimate-audio-streaming'),
	   	'tags' => __('Tags','ultimate-audio-streaming'),
  	),
	) );

	$wp_customize->add_setting( 'ultimate_audio_streaming_related_post_excerpt_number',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_related_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	//Responsive Media Settings
	$wp_customize->add_section('ultimate_audio_streaming_responsive_media',array(
		'title'	=> __('Responsive Media','ultimate-audio-streaming'),
		'panel' => 'ultimate_audio_streaming_panel_id',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_responsive_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_responsive_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_responsive_media'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_responsive_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_responsive_menu_open_icon',array(
		'label'	=> __('Responsive Open Menu Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_responsive_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_responsive_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_responsive_menu_close_icon',array(
		'label'	=> __('Responsive Close Menu Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_responsive_media',
		'type'		=> 'icon'
	)));

	// site toggle button color
	$wp_customize->add_setting('ultimate_audio_streaming_toggle_button_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_toggle_button_color', array(
		'label'    => __('Toggle Button Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_responsive_media',
		'settings' => 'ultimate_audio_streaming_toggle_button_color',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_display_post_date',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_post_date',array(
		'type' => 'checkbox',
		'label' => __('Display Post Date','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_responsive_media'
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_display_post_author',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_post_author',array(
		'type' => 'checkbox',
		'label' => __('Display Post Author','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_responsive_media'
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_display_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Display Post Comment','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_responsive_media'
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_display_slider',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_slider',array(
		'type' => 'checkbox',
		'label' => __('Display Slider','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_responsive_media'
 	));

	$wp_customize->add_setting('ultimate_audio_streaming_display_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Display Sidebar','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_responsive_media'
 	));

	$wp_customize->add_setting('ultimate_audio_streaming_display_scrolltop',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_scrolltop',array(
    'type' => 'checkbox',
    'label' => __('Display Scroll To Top','ultimate-audio-streaming'),
    'section' => 'ultimate_audio_streaming_responsive_media'
 	));

 	$wp_customize->add_setting('ultimate_audio_streaming_display_preloader',array(
		'default' => false,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_display_preloader',array(
		'type' => 'checkbox',
		'label' => __('Display Preloader','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_responsive_media'
 	));

 	//404 Page Setting
	$wp_customize->add_section('ultimate_audio_streaming_page_not_found',array(
		'title'	=> __('404 Page Not Found / No Result','ultimate-audio-streaming'),
		'panel' => 'ultimate_audio_streaming_panel_id',
	));	

		$wp_customize->add_setting('ultimate_audio_streaming_page_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_page_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_page_not_found'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_page_not_found_heading',array(
		'default'=> __('404 Not Found','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_page_not_found_heading',array(
		'label'	=> __('404 Heading','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_page_not_found_text',array(
		'default'=> __('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_page_not_found_text',array(
		'label'	=> __('404 Content','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_page_not_found_button',array(
		'default'=>  __('Back to Home Page','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_page_not_found_button',array(
		'label'	=> __('404 Button','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_no_search_result_heading',array(
		'default'=> __('Nothing Found','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_no_search_result_heading',array(
		'label'	=> __('No Search Results Heading','ultimate-audio-streaming'),
		'description'=>__('The search page heading display when no results are found.','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_no_search_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','ultimate-audio-streaming'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_no_search_result_text',array(
		'label'	=> __('No Search Results Text','ultimate-audio-streaming'),
		'description'=>__('The search page text display when no results are found.','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_page_not_found',
		'type'=> 'text'
	));

	//Woocommerce Section
	$wp_customize->add_section( 'ultimate_audio_streaming_woocommerce_section' , array(
    	'title'      => __( 'Woocommerce Settings', 'ultimate-audio-streaming' ),
    	'description'=>__('The below settings are apply on woocommerce pages.','ultimate-audio-streaming'),
		'priority'   => null,
		'panel' => 'ultimate_audio_streaming_panel_id'
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_woocommerce_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_woocommerce_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_woocommerce_section'
	));

	/**
	 * Product Columns
	 */
	$wp_customize->add_setting( 'ultimate_audio_streaming_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ultimate_audio_streaming_per_columns', array(
		'label'    => __( 'Product per columns', 'ultimate-audio-streaming' ),
		'section'  => 'ultimate_audio_streaming_woocommerce_section',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('ultimate_audio_streaming_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ultimate_audio_streaming_product_per_page',array(
		'label'	=> __('Product per page','ultimate-audio-streaming'),
		'section'	=> 'ultimate_audio_streaming_woocommerce_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_shop_sidebar_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_shop_sidebar_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable shop page sidebar','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
 	));

   // shop page sidebar alignment
   $wp_customize->add_setting('ultimate_audio_streaming_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control('ultimate_audio_streaming_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Layout', 'ultimate-audio-streaming'),
		'section'        => 'ultimate_audio_streaming_woocommerce_section',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ultimate-audio-streaming'),
			'Right Sidebar' => __('Right Sidebar', 'ultimate-audio-streaming'),
		),
	));

 	$wp_customize->add_setting('ultimate_audio_streaming_product_page_sidebar_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_product_page_sidebar_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable single product page sidebar','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
 	));

   // single product page sidebar alignment
   $wp_customize->add_setting('ultimate_audio_streaming_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control('ultimate_audio_streaming_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Product Page Layout', 'ultimate-audio-streaming'),
		'section'        => 'ultimate_audio_streaming_woocommerce_section',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ultimate-audio-streaming'),
			'Right Sidebar' => __('Right Sidebar', 'ultimate-audio-streaming'),
		),
	));

	$wp_customize->add_setting('ultimate_audio_streaming_related_product_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_related_product_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Related product','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
	));

 	$wp_customize->add_setting( 'ultimate_audio_streaming_woo_product_sale_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woo_product_sale_border_radius', array(
        'label'  => __('Woocommerce Product Sale Border Radius','ultimate-audio-streaming'),
        'section'  => 'ultimate_audio_streaming_woocommerce_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    )));

 	$wp_customize->add_setting('ultimate_audio_streaming_wooproduct_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_wooproduct_sale_font_size',array(
		'label'	=> __('Woocommerce Product Sale Font Size','ultimate-audio-streaming'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ultimate_audio_streaming_woocommerce_section',
	)));

    $wp_customize->add_setting('ultimate_audio_streaming_woo_product_sale_top_bottom_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woo_product_sale_top_bottom_padding',array(
		'label'	=> __('Woocommerce Product Sale Top Bottom Padding ','ultimate-audio-streaming'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ultimate_audio_streaming_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_woo_product_sale_left_right_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woo_product_sale_left_right_padding',array(
		'label'	=> __('Woocommerce Product Sale Left Right Padding','ultimate-audio-streaming'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ultimate_audio_streaming_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_woo_product_sale_position',array(
		'default' => 'Right',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_woo_product_sale_position',array(
		'type' => 'select',
		'label' => __('Woocommerce Product Sale Position','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'choices' => array(
		   'Right' => __('Right','ultimate-audio-streaming'),
		   'Left' => __('Left','ultimate-audio-streaming'),
  	),
	));

	$wp_customize->add_setting( 'ultimate_audio_streaming_woocommerce_button_padding_top',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_woocommerce_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woocommerce_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_woocommerce_button_border_radius',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

   $wp_customize->add_setting('ultimate_audio_streaming_woocommerce_product_border_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
   ));
   $wp_customize->add_control('ultimate_audio_streaming_woocommerce_product_border_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable product border','ultimate-audio-streaming'),
      'section' => 'ultimate_audio_streaming_woocommerce_section',
   ));

	$wp_customize->add_setting( 'ultimate_audio_streaming_woocommerce_product_padding_top',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woocommerce_product_padding_top',	array(
		'label' => esc_html__( 'Product Top Bottom Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_woocommerce_product_padding_right',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woocommerce_product_padding_right',	array(
		'label' => esc_html__( 'Product Right Left Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_woocommerce_product_border_radius',array(
		'default' => 3,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_woocommerce_product_box_shadow',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_wooproducts_nav',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_choices'
    ));
    $wp_customize->add_control('ultimate_audio_streaming_wooproducts_nav',array(
       'type' => 'select',
       'label' => __('Shop Page Products Navigation','ultimate-audio-streaming'),
       'choices' => array(
            'Yes' => __('Yes','ultimate-audio-streaming'),
            'No' => __('No','ultimate-audio-streaming'),
        ),
       'section' => 'ultimate_audio_streaming_woocommerce_section',
    ));
 	
	//footer text
	$wp_customize->add_section('ultimate_audio_streaming_footer_section',array(
		'title'	=> __('Footer Text','ultimate-audio-streaming'),
		'panel' => 'ultimate_audio_streaming_panel_id'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_footer_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ultimate_audio_streaming_footer_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','ultimate-audio-streaming'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','ultimate-audio-streaming') ."</li></ul><a target='_blank' href='". esc_url(ULTIMATE_AUDIO_STREAMING_BUY_PRO) ." '>". esc_html('Upgrade to Pro','ultimate-audio-streaming') ."</a>",
		'section'=> 'ultimate_audio_streaming_footer_section'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_footer_bg_color', array(
		'default'           => '#0d0d0f',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_footer_section',
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ultimate_audio_streaming_footer_bg_image',array(
		'label' => __('Footer Background Image','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_footer_section'
	)));
	
	$wp_customize->add_setting('ultimate_audio_streaming_footer_attatchment',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_footer_attatchment',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','ultimate-audio-streaming'),
		'choices' => array(
            'fixed' => __('fixed','ultimate-audio-streaming'),
            'scroll' => __('scroll','ultimate-audio-streaming'),
        ),
		'section'=> 'ultimate_audio_streaming_footer_section',
	));

	$wp_customize->add_setting('footer_widget_areas',array(
		'default'           => 4,
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices',
	));
	$wp_customize->add_control('footer_widget_areas',array(
		'type'        => 'radio',
		'label'       => __('Footer widget area', 'ultimate-audio-streaming'),
		'section'     => 'ultimate_audio_streaming_footer_section',
		'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'ultimate-audio-streaming'),
		'choices' => array(
		   '1'     => __('One', 'ultimate-audio-streaming'),
		   '2'     => __('Two', 'ultimate-audio-streaming'),
		   '3'     => __('Three', 'ultimate-audio-streaming'),
		   '4'     => __('Four', 'ultimate-audio-streaming')
		),
	));

	$wp_customize->add_setting('ultimate_audio_streaming_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','ultimate-audio-streaming'),
	    'section' => 'ultimate_audio_streaming_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','ultimate-audio-streaming'),
	        'Center' => __('Center','ultimate-audio-streaming'),
	        'Right' => __('Right','ultimate-audio-streaming')
	    ),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','ultimate-audio-streaming'),
	    'section' => 'ultimate_audio_streaming_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','ultimate-audio-streaming'),
	        'Center' => __('Center','ultimate-audio-streaming'),
	        'Right' => __('Right','ultimate-audio-streaming')
	    ),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_footer_heading_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_footer_heading_font_size',array(
		'label' => esc_html__( 'Footer Heading Font Size','ultimate-audio-streaming' ),
		'section'=> 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_footer_heading_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_footer_heading_text_tranform',array(
		'type' => 'select',
		'label' => __('Footer Heading Text Transform','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_footer_section',
		'choices' => array(
		   'Uppercase' => __('Uppercase','ultimate-audio-streaming'),
		   'Lowercase' => __('Lowercase','ultimate-audio-streaming'),
		   'Capitalize' => __('Capitalize','ultimate-audio-streaming'),
		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_footer_heading_font_weight',array(
		'default' => '500',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
 	));
 	$wp_customize->add_control('ultimate_audio_streaming_footer_heading_font_weight',array(
		'type' => 'select',
		'label' => __('Footer Heading Font Weight','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_footer_section',
		'choices' => array(
			'100' => __('100','ultimate-audio-streaming'),
			'200' => __('200','ultimate-audio-streaming'),
			'300' => __('300','ultimate-audio-streaming'),
			'400' => __('400','ultimate-audio-streaming'),
			'500' => __('500','ultimate-audio-streaming'),
			'600' => __('600','ultimate-audio-streaming'),
			'700' => __('700','ultimate-audio-streaming'),
			'800' => __('800','ultimate-audio-streaming'),
			'900' => __('900','ultimate-audio-streaming'),
		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_footer_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize,'ultimate_audio_streaming_footer_padding',array(
		'label'	=> __('Footer Widget Padding','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 100,
      ),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_hide_show_scroll',array(
		'default' => true,
		'sanitize_callback'	=> 'ultimate_audio_streaming_sanitize_checkbox'
	));
	$wp_customize->add_control('ultimate_audio_streaming_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','ultimate-audio-streaming'),
      	'section' => 'ultimate_audio_streaming_footer_section',
	));

	$wp_customize->add_setting('ultimate_audio_streaming_back_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Icon_Changer(
        $wp_customize,'ultimate_audio_streaming_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','ultimate-audio-streaming'),
		'transport' => 'refresh',
		'section'	=> 'ultimate_audio_streaming_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_scroll_icon_font_size',array(
		'default'=> 22,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','ultimate-audio-streaming'),
		'section'=> 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top Alignment','ultimate-audio-streaming'),
        'section' => 'ultimate_audio_streaming_footer_section',
        'choices' => array(
            'Left align' => __('Left Align','ultimate-audio-streaming'),
            'Right align' => __('Right Align','ultimate-audio-streaming'),
            'Center align' => __('Center Align','ultimate-audio-streaming'),
        ),
	) );

	$wp_customize->add_setting( 'ultimate_audio_streaming_top_bottom_scroll_padding',array(
		'default' => 7,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_top_bottom_scroll_padding',	array(
		'label' => esc_html__( 'Top Bottom Scroll Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_left_right_scroll_padding',array(
		'default' => 17,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_left_right_scroll_padding',	array(
		'label' => esc_html__( 'Left Right Scroll Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_back_to_top_border_radius',array(
		'default' => 5,
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_back_to_top_border_radius', array(
		'label' => esc_html__( 'Back to Top Border Radius (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));
	
	$wp_customize->add_setting('ultimate_audio_streaming_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ultimate_audio_streaming_footer_copy',array(
		'label'	=> __('Copyright Text','ultimate-audio-streaming'),
		'section'	=> 'ultimate_audio_streaming_footer_section',
		'description'	=> __('Add some text for footer like copyright etc.','ultimate-audio-streaming'),
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ultimate_audio_streaming_footer_text_align',array(
		'default' => 'center',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_choices'
	));
	$wp_customize->add_control('ultimate_audio_streaming_footer_text_align',array(
		'type' => 'radio',
		'label' => __('Copyright Text Alignment ','ultimate-audio-streaming'),
		'section' => 'ultimate_audio_streaming_footer_section',
		'choices' => array(
		   'left' => __('Left Align','ultimate-audio-streaming'),
		   'right' => __('Right Align','ultimate-audio-streaming'),
	   	'center' => __('Center Align','ultimate-audio-streaming'),
  		),
	) );

	$wp_customize->add_setting('ultimate_audio_streaming_copyright_text_font_size',array(
		'default'=> 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control(new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_copyright_text_font_size',array(
		'label' => esc_html__( 'Copyright Font Size (px)','ultimate-audio-streaming' ),
		'section'=> 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting( 'ultimate_audio_streaming_footer_text_padding',array(
		'default' => 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'ultimate_audio_streaming_sanitize_integer'
	));
	$wp_customize->add_control( new Ultimate_Audio_Streaming_Custom_Control( $wp_customize, 'ultimate_audio_streaming_footer_text_padding',	array(
		'label' => esc_html__( 'Copyright Text Padding (px)','ultimate-audio-streaming' ),
		'section' => 'ultimate_audio_streaming_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('ultimate_audio_streaming_copyright_text_background', array(
		'default'           => '#B2298E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ultimate_audio_streaming_copyright_text_background', array(
		'label'    => __('Copyright background Color', 'ultimate-audio-streaming'),
		'section'  => 'ultimate_audio_streaming_footer_section',
	)));
	
}
add_action( 'customize_register', 'ultimate_audio_streaming_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Ultimate_Audio_Streaming_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Ultimate_Audio_Streaming_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Ultimate_Audio_Streaming_Customize_Section_Pro(
				$manager,
				'ultimate_audio_streaming_example_1',
				array(
					'title'   =>  esc_html__( 'Ultimate Audio Streaming Pro', 'ultimate-audio-streaming' ),
					'pro_text' => esc_html__( 'Go Pro', 'ultimate-audio-streaming' ),
					'pro_url'  => esc_url( 'https://www.buywptemplates.com/products/audio-streaming-wordpress-theme/' ),
					'priority'   => 9
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'ultimate-audio-streaming-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ultimate-audio-streaming-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}

	//Footer widget areas
	function ultimate_audio_streaming_sanitize_choices( $input ) {
	    $valid = array(
	        '1'     => __('One', 'ultimate-audio-streaming'),
	        '2'     => __('Two', 'ultimate-audio-streaming'),
	        '3'     => __('Three', 'ultimate-audio-streaming'),
	        '4'     => __('Four', 'ultimate-audio-streaming')
	    );
	    if ( array_key_exists( $input, $valid ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	}
}

// Doing this customizer thang!
Ultimate_Audio_Streaming_Customize::get_instance();