<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action('customize_register', 'siblogs_customize_register');
function siblogs_customize_register($wp_customize)
{
    $wp_customize->add_panel('siblogs_settings', array(
        'title' => 'Theme Settings',
        'description' => 'This is siblogs theme settings',
        'priority' => 10,
    ));

    /**
     * Global Settings
     * 
     */
    $wp_customize->add_section('site_global', array(
        'title' => 'Global',
        'panel' => 'siblogs_settings',
    ));
    // Color Scheme
    $wp_customize->add_setting('primary_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'primary_color',
    )));
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#8a8a8a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label' => __('Secondary Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'secondary_color',
    )));
    $wp_customize->add_setting('white_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'white_color', array(
        'label' => __('White Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'white_color',
    )));
    $wp_customize->add_setting('dark_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'dark_color', array(
        'label' => __('Dark Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'dark_color',
    )));
    $wp_customize->add_setting('black_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'black_color', array(
        'label' => __('Black Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'black_color',
    )));
    $wp_customize->add_setting('svg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'svg_color', array(
        'label' => __('Svg Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'svg_color',
    )));
    $wp_customize->add_setting('border_color', array(
        'default' => '#e2e2e2',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'border_color', array(
        'label' => __('Border Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'border_color',
    )));
    $wp_customize->add_setting('light_color', array(
        'default' => '#f7f7f7',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'light_color', array(
        'label' => __('Light Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'light_color',
    )));
    $wp_customize->add_setting('selection_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'selection_color', array(
        'label' => __('Selection Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'selection_color',
    )));
    $wp_customize->add_setting('selection_bg_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'selection_bg_color', array(
        'label' => __('Selection Background Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'selection_bg_color',
    )));

    // Font Family
    $wp_customize->add_setting('g_font_url', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500&display=swap",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('g_font_url', array(
        'label' => _('Google Font Family Url'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_font_url_urdu', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;600;700&display=swap",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('g_font_url_urdu', array(
        'label' => _('Google Font Family Url Urdu'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_font_url_arabic', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('g_font_url_arabic', array(
        'label' => _('Google Font Family Url Arabic'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_heading_font', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "'Jost', sans-serif",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('g_heading_font', array(
        'label' => _('Heading Font Family'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_body_font', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "'Rubik', sans-serif",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('g_body_font', array(
        'label' => _('Body Font Family'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_body_urdu', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "'Noto Nastaliq Urdu', serif",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('g_body_urdu', array(
        'label' => _('Urdu Font Family'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_body_arabic', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "'Amiri', serif",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('g_body_arabic', array(
        'label' => _('Arabic Font Family'),
        'type' => 'text',
        'section' => 'site_global',
    ));

    // General Settings
    $wp_customize->add_setting('g_desktop_paragraph', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 18,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('g_desktop_paragraph', array(
        'label' => _('Paragraph Font Size'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_mobile_paragraph', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 16,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('g_mobile_paragraph', array(
        'label' => _('Paragraph Font Size'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('g_paragraph_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'g_paragraph_color', array(
        'label' => __('Paragraphs Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'g_paragraph_color',
    )));
    $wp_customize->add_setting('headings_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'headings_color', array(
        'label' => __('Headings Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'headings_color',
    )));
    $wp_customize->add_setting('headings_font_weight', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('headings_font_weight', array(
        'label' => _('Heading Font Weight'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('links_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'links_color', array(
        'label' => __('Links Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'links_color',
    )));
    $wp_customize->add_setting('links_hover_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'links_hover_color', array(
        'label' => __('Links Hover Color', 'siblogs'),
        'section' => 'site_global',
        'settings' => 'links_hover_color',
    )));
    $wp_customize->add_setting('image_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 5,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('image_roundness', array(
        'label' => _('Image Roundness'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    // Settings for padding-y
    $wp_customize->add_setting('desktop_section_inner_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_section_inner_offsety', array(
        'label' => _('Desktop Section Inner OffsetY'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('tablet_section_inner_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('tablet_section_inner_offsety', array(
        'label' => _('Tablet Section Inner OffsetY'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_section_inner_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_section_inner_offsety', array(
        'label' => _('Mobile Section Inner OffsetY'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    // Settings for margin-y
    $wp_customize->add_setting('desktop_section_outer_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_section_outer_offsety', array(
        'label' => _('Desktop Section Outer OffsetY'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_section_outer_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_section_outer_offsety', array(
        'label' => _('Mobile Section Outer OffsetY'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('wrapper_max_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1300,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('wrapper_max_width', array(
        'label' => _('Wrapper Maximum Width'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('desktop_wrapper_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_wrapper_offsetx', array(
        'label' => _('Desktop Wraper OffsetX'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_wrapper_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_wrapper_offsetx', array(
        'label' => _('Mobile Wraper OffsetX'),
        'type' => 'text',
        'section' => 'site_global',
    ));

    /**
     * Announcement Settings
     * 
     */
    $wp_customize->add_section('site_announcement', array(
        'title' => 'Announcement',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('ancmt_bg_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ancmt_bg_color', array(
        'label' => __('Background Color', 'siblogs'),
        'section' => 'site_announcement',
        'settings' => 'ancmt_bg_color',
    )));
    $wp_customize->add_setting('ancmt_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ancmt_text_color', array(
        'label' => __('Text Color', 'siblogs'),
        'section' => 'site_announcement',
        'settings' => 'ancmt_text_color',
    )));
    $wp_customize->add_setting('ancmt_hover_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ancmt_hover_color', array(
        'label' => __('Text Hover Color', 'siblogs'),
        'section' => 'site_announcement',
        'settings' => 'ancmt_hover_color',
    )));
    $wp_customize->add_setting('ancmt_text_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 16,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ancmt_text_size', array(
        'label' => _('Text Size'),
        'type' => 'text',
        'section' => 'site_announcement',
    ));
    $wp_customize->add_setting('ancmt_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ancmt_offsety', array(
        'label' => _('OffsetY'),
        'type' => 'text',
        'section' => 'site_announcement',
    ));
    $wp_customize->add_setting('ancmt_links_style', array(
        'default' => 'underline',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ancmt_links_style', array(
        'label' => __('Links Style', 'siblogs'),
        'section' => 'site_announcement',
        'type' => 'select',
        'choices' => array(
            'underline' => __('Underline', 'siblogs'),
            'none' => __('Default', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('ancmt_links_hover_style', array(
        'default' => 'underline',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ancmt_links_hover_style', array(
        'label' => __('Links Hover Style', 'siblogs'),
        'section' => 'site_announcement',
        'type' => 'select',
        'choices' => array(
            'underline' => __('Underline', 'siblogs'),
            'none' => __('Default', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('ancmt_max_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1900,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ancmt_max_width', array(
        'label' => _('Announcement Width'),
        'type' => 'text',
        'section' => 'site_announcement',
    ));


    /**
     * Header Settings
     * 
     */
    $wp_customize->add_section('site_header', array(
        'title' => 'Header',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('header_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
        'label' => __('Background Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'header_bg_color',
    )));
    $wp_customize->add_setting('header_wrapper_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1900,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('header_wrapper_width', array(
        'label' => _('Header Wrapper Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('desktop_header_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_header_offsety', array(
        'label' => _('Header OffsetY'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mobile_header_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_header_offsety', array(
        'label' => _('Header OffsetY'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('header_drop_shadow', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '0 0 20px rgba(0, 0, 0, .05)',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('header_drop_shadow', array(
        'label' => _('Drop Shadow'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('desktop_header_content_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_header_content_gap', array(
        'label' => _('Header Content Gap'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mobile_header_content_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 40,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_header_content_gap', array(
        'label' => _('Header Content Gap'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('dekstop_logo_width', array(
        'default'           => 110,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('dekstop_logo_width', array(
        'type' => 'range',
        'section' => 'site_header',
        'label' => __('Desktop Logo Width'),
        'description' => __('You can set logo width upto maximum 500 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 500,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('dekstop_logo_height', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('dekstop_logo_height', array(
        'type' => 'range',
        'section' => 'site_header',
        'label' => __('Desktop Logo Height'),
        'description' => __('You can set logo height upto maximum 200 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('logo_fill_size', array(
        'default' => 'contain',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('logo_fill_size', array(
        'label' => __('Logo Fill Size', 'siblogs'),
        'section' => 'site_header',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'contain' => __('Contain', 'siblogs'),
            'cover' => __('Cover', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('logo_position', array(
        'default' => 'left',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('logo_position', array(
        'label' => __('Logo Fill Size', 'siblogs'),
        'section' => 'site_header',
        'type' => 'select',
        'choices' => array(
            'center' => __('Default', 'siblogs'),
            'top' => __('Top', 'siblogs'),
            'bottom' => __('Bottom', 'siblogs'),
            'left' => __('Left', 'siblogs'),
            'right' => __('Right', 'siblogs'),
        ),
    ));

    $wp_customize->add_setting('mobile_logo_width', array(
        'default'           => 110,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_logo_width', array(
        'type' => 'range',
        'section' => 'site_header',
        'label' => __('Mobile Logo Width'),
        'description' => __('You can set logo width upto maximum 300 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 300,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('mobile_logo_height', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_logo_height', array(
        'type' => 'range',
        'section' => 'site_header',
        'label' => __('Mobile Logo Height'),
        'description' => __('You can set logo height upto maximum 200 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('navbar_alignment', array(
        'default' => 'left',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('navbar_alignment', array(
        'label' => __('Navbar Alignment', 'siblogs'),
        'section' => 'site_header',
        'type' => 'select',
        'choices' => array(
            'start' => __('Default', 'siblogs'),
            'center' => __('Center', 'siblogs'),
            'right' => __('Right', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('header_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color', array(
        'label' => __('Text Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'header_text_color',
    )));
    $wp_customize->add_setting('header_hover_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_hover_color', array(
        'label' => __('Text Hover Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'header_hover_color',
    )));
    $wp_customize->add_setting('header_links_weight', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('header_links_weight', array(
        'label' => _('Header Main Links Font Weight'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('header_links_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('header_links_offsetx', array(
        'label' => _('Header Links OffsetX'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('header_links_font', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "'Jost', sans-serif",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('header_links_font', array(
        'label' => _('Header Links Font'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('header_main_links_weight', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('header_main_links_weight', array(
        'label' => _('Header Main Links Weight'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('header_main_links_transform', array(
        'default' => 'uppercase',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('header_main_links_transform', array(
        'label' => __('Main Links Transform', 'siblogs'),
        'section' => 'site_header',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'uppercase' => __('Uppercase', 'siblogs'),
            'lowercase' => __('Lowercase', 'siblogs'),
            'capitalize' => __('Capitalize', 'siblogs'),
        ),
    ));

    $wp_customize->add_setting('menu_arrow_size', array(
        'default'           => 12,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('menu_arrow_size', array(
        'type' => 'range',
        'section' => 'site_header',
        'label' => __('Arrow Size'),
        'description' => __('You can set arrow size for the menu which contains the sub menus.'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 20,
            'step' => 1,
        ),
    ));
    $wp_customize->add_setting('menu_arrow_offset_left', array(
        'default'           => 8,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('menu_arrow_offset_left', array(
        'type' => 'range',
        'section' => 'site_header',
        'label' => __('Arrow Offset Left'),
        'description' => __('You can set arrow left space for the menu which contains the sub menus.'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 20,
            'step' => 1,
        ),
    ));
    $wp_customize->add_setting('menu_border_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('menu_border_width', array(
        'label' => _('Sub Menu Border Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('menu_border_color', array(
        'default' => '#e2e2e2',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_border_color', array(
        'label' => __('Sub Menu Border Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'menu_border_color',
    )));
    $wp_customize->add_setting('mega_menu_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1024,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_width', array(
        'label' => _('Mega Menu Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_default_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 325,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_default_height', array(
        'label' => _('Mega Menu Default Height'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 25,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_roundness', array(
        'label' => _('Mega Menu Roundness'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_padding', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_padding', array(
        'label' => _('Mega Menu Inner Offset'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_offset_left', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 5,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_offset_left', array(
        'label' => _('Mega Menu OffsetX'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('post_grid_mega_menu_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 220,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_grid_mega_menu_height', array(
        'label' => _('Posts Grid Mega Menu Height'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_grid_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_grid_offsetx', array(
        'label' => _('Mega Menu Grid OffsetX'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_grid_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 12,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_grid_gap', array(
        'label' => _('Mega Menu Grid Gap'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_list_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 160,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_list_width', array(
        'label' => _('Mega Menu List Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_img_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 150,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_img_height', array(
        'label' => _('Mega Menu Image Height'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mega_menu_img_size', array(
        'default' => 'cover',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mega_menu_img_size', array(
        'label' => __('Menu Menu Image Size', 'siblogs'),
        'section' => 'site_header',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'contain' => __('Contain', 'siblogs'),
            'cover' => __('Cover', 'siblogs'),
            'fill' => __('Fill', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('sub_menu_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 250,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_width', array(
        'label' => _('Sub Menu Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('sub_menu_bg', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sub_menu_bg', array(
        'label' => __('Sub Menu Background Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'sub_menu_bg',
    )));
    $wp_customize->add_setting('sub_menu_links_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_links_offsetx', array(
        'label' => _('Sub Menu Links OffsetX'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('sub_menu_links_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_links_offsety', array(
        'label' => _('Sub Menu Links OffsetY'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('menu_links_border_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('menu_links_border_width', array(
        'label' => _('Menu Links Border Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('menu_links_border_color', array(
        'default' => '#e2e2e2',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_links_border_color', array(
        'label' => __('Menu Links Border Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'menu_links_border_color',
    )));


    // Header Search
    $wp_customize->add_setting('desktop_search_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_search_width', array(
        'label' => _('Desktop Search Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('mobile_search_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 300,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_search_width', array(
        'label' => _('Mobile Search Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));

    /**
     * Sub Headers Settings
     * 
     */
    $wp_customize->add_section('sub_headers', array(
        'title' => 'Sub Headers',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('page_header_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 250,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('page_header_height', array(
        'label' => _('Page Header Height'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('desktop_page_banner_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_page_banner_height', array(
        'label' => _('Dekstop Featured Image Height'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('mobile_page_banner_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 300,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_page_banner_height', array(
        'label' => _('Mobile Featured Image Height'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('title_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'title_color', array(
        'label' => __('Title Color', 'siblogs'),
        'section' => 'sub_headers',
        'settings' => 'title_color',
    )));
    $wp_customize->add_setting('universal_title_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'universal_title_color', array(
        'label' => __('Sections Header Title Color', 'siblogs'),
        'section' => 'sub_headers',
        'settings' => 'universal_title_color',
    )));
    $wp_customize->add_setting('dekstop_universal_header_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('dekstop_universal_header_offset_bottom', array(
        'label' => _('Desktop Sections Header Offset Bottom'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('mobile_universal_header_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_universal_header_offset_bottom', array(
        'label' => _('Mobile Sections Header Offset Bottom'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('desktop_title_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 40,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_title_size', array(
        'label' => _('Desktop Title Size'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('mobile_title_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_title_size', array(
        'label' => _('Mobile Title Size'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('description_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 16,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('description_size', array(
        'label' => _('Description Size'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('description_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('description_offset_top', array(
        'label' => _('Description Offset Top'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('page_title_align', array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('page_title_align', array(
        'label' => __('Page Title Align', 'siblogs'),
        'section' => 'sub_headers',
        'type' => 'select',
        'choices' => array(
            'start' => __('Default', 'siblogs'),
            'center' => __('Center', 'siblogs'),
            'end' => __('End', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('page_title_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('page_title_offsety', array(
        'label' => _('Page Title OffsetY'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('page_description_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('page_description_offset_top', array(
        'label' => _('Page Description Offset Top'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));
    $wp_customize->add_setting('page_description_color', array(
        'default' => '#8a8a8a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page_description_color', array(
        'label' => __('Sections Header Description Color', 'siblogs'),
        'section' => 'sub_headers',
        'settings' => 'page_description_color',
    )));
    $wp_customize->add_setting('page_title_wrapper_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 800,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('page_title_wrapper_width', array(
        'label' => _('Page Title Wrapper Width'),
        'type' => 'text',
        'section' => 'sub_headers',
    ));


    /**
     * Breadcrumbs Settings
     * 
     */
    $wp_customize->add_section('site_breadcrumbs', array(
        'title' => 'Breadcrumbs',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('breadcrumbs_dekstop_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('breadcrumbs_dekstop_offsety', array(
        'label' => _('OffsetY'),
        'type' => 'text',
        'section' => 'site_breadcrumbs',
    ));
    $wp_customize->add_setting('breadcrumbs_mobile_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('breadcrumbs_mobile_offsety', array(
        'label' => _('OffsetY'),
        'type' => 'text',
        'section' => 'site_breadcrumbs',
    ));
    $wp_customize->add_setting('breadcrumbs_text_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'breadcrumbs_text_color', array(
        'label' => __('Text Color', 'siblogs'),
        'section' => 'site_breadcrumbs',
        'settings' => 'breadcrumbs_text_color',
    )));
    $wp_customize->add_setting('delimiter_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 5,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('delimiter_offsetx', array(
        'label' => _('Delimiter OffsetX'),
        'type' => 'text',
        'section' => 'site_breadcrumbs',
    ));
    $wp_customize->add_setting('delimiter_color', array(
        'default' => '#8a8a8a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'delimiter_color', array(
        'label' => __('Delimiter Color', 'siblogs'),
        'section' => 'site_breadcrumbs',
        'settings' => 'delimiter_color',
    )));

    /**
     * Editor Settings
     * 
     */
    $wp_customize->add_section('si_editor', array(
        'title' => 'Editor',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('editor_content_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('editor_content_offsety', array(
        'label' => _('Content Wrapper OffsetY'),
        'type' => 'text',
        'section' => 'si_editor',
    ));
    $wp_customize->add_setting('editor_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('editor_offset_bottom', array(
        'label' => _('Elements Offset Bottom'),
        'type' => 'text',
        'section' => 'si_editor',
    ));
    $wp_customize->add_setting('editor_links', array(
        'default' => 'underline',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('editor_links', array(
        'label' => __('Links Style', 'siblogs'),
        'section' => 'si_editor',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'underline' => __('Underline', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('editor_lists_style', array(
        'default' => 'disc',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('editor_lists_style', array(
        'label' => __('Lists Style', 'siblogs'),
        'section' => 'si_editor',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'circle' => __('Cricle', 'siblogs'),
            'disc' => __('Disc', 'siblogs'),
            'squar' => __('Squar', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('editor_lists_marker_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('editor_lists_marker_size', array(
        'label' => _('Lists Marker Size'),
        'type' => 'text',
        'section' => 'si_editor',
    ));
    $wp_customize->add_setting('editor_sparator_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('editor_sparator_offsety', array(
        'label' => _('Lists Separator OffsetY'),
        'type' => 'text',
        'section' => 'si_editor',
    ));

    /**
     * Sidebar Settings
     * 
     */
    $wp_customize->add_section('site_sidebar', array(
        'title' => 'Sidebar',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('sidebar_overlay_color', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '#00000045',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('sidebar_overlay_color', array(
        'label' => _('Overlay Color'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_bg_color', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('sidebar_bg_color', array(
        'label' => _('Background Color'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('desktop_sidebar_width', array(
        'default'           => 375,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_sidebar_width', array(
        'type' => 'range',
        'section' => 'site_sidebar',
        'label' => __('Sidebar Width'),
        'description' => __('You can set sidebar width upto maximum 500 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 500,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('mobile_sidebar_width', array(
        'default'           => 320,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_sidebar_width', array(
        'type' => 'range',
        'section' => 'site_sidebar',
        'label' => __('Sidebar Width'),
        'description' => __('You can set sidebar width upto maximum 500 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 500,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('sidebar_logo_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_logo_offset_top', array(
        'label' => _('Logo Offset Top'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_logo_align', array(
        'default' => 'start',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('sidebar_logo_align', array(
        'label' => __('Logo Align', 'siblogs'),
        'section' => 'site_sidebar',
        'type' => 'select',
        'choices' => array(
            'start' => __('Default', 'siblogs'),
            'center' => __('Center', 'siblogs'),
            'end' => __('End', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('sidebar_logo_width', array(
        'default'           => 110,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_logo_width', array(
        'type' => 'range',
        'section' => 'site_sidebar',
        'label' => __('Desktop Logo Width'),
        'description' => __('You can set logo width upto maximum 500 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 500,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('sidebar_logo_height', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_logo_height', array(
        'type' => 'range',
        'section' => 'site_sidebar',
        'label' => __('Desktop Logo Height'),
        'description' => __('You can set logo height upto maximum 200 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('sidebar_inner_offset', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_inner_offset', array(
        'label' => _('Scrollbar Inner Offset'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_icon_box_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 32,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_icon_box_size', array(
        'label' => _('Close Icon Inner Offset'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_icon_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_icon_size', array(
        'label' => _('Close Icon Size'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_icon_bg', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_icon_bg', array(
        'label' => __('Icon Background Color', 'siblogs'),
        'section' => 'site_sidebar',
        'settings' => 'sidebar_icon_bg',
    )));
    $wp_customize->add_setting('sidebar_icon_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_icon_color', array(
        'label' => __('Icon Color', 'siblogs'),
        'section' => 'site_sidebar',
        'settings' => 'sidebar_icon_color',
    )));
    $wp_customize->add_setting('sidebar_menu_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_menu_offset_top', array(
        'label' => _('Menu Offset Top'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_menu_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_menu_offset_bottom', array(
        'label' => _('Menu Offset Bottom'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sub_menu_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_offsetx', array(
        'label' => _('Sub Menu OffsetX'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sub_menu_offset_left', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_offset_left', array(
        'label' => _('Sub Menu Offset Left'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_newsletter_bg', array(
        'default' => '#f7f7f7',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_newsletter_bg', array(
        'label' => __('Icon Color', 'siblogs'),
        'section' => 'site_sidebar',
        'settings' => 'sidebar_newsletter_bg',
    )));
    $wp_customize->add_setting('sidebar_newsletter_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_newsletter_offsetx', array(
        'label' => _('Newsletter OffsetX'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_newsletter_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_newsletter_offset_bottom', array(
        'label' => _('Newsletter Offset Bottom'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_newsletter_inner_offset', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_newsletter_inner_offset', array(
        'label' => _('Newsletter Inner Offset'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_newsletter_title', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Newsletter',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('sidebar_newsletter_title', array(
        'label' => _('Newsletter Title'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_newsletter_description', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Inbio is a personal siblogs template. You can customize all.',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('sidebar_newsletter_description', array(
        'label' => _('Newsletter Description'),
        'type' => 'textarea',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_newsletter_description_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_newsletter_description_offsety', array(
        'label' => _('Newsletter Description OffsetY'),
        'type' => 'textarea',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_newsletter_text_align', array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('sidebar_newsletter_text_align', array(
        'label' => __('Newsletter Text Align', 'siblogs'),
        'section' => 'site_sidebar',
        'type' => 'select',
        'choices' => array(
            'start' => __('Default', 'siblogs'),
            'center' => __('Center', 'siblogs'),
            'end' => __('End', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('sidebar_newsletter_button_align', array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('sidebar_newsletter_button_align', array(
        'label' => __('Newsletter Button Align', 'siblogs'),
        'section' => 'site_sidebar',
        'type' => 'select',
        'choices' => array(
            'start' => __('Default', 'siblogs'),
            'center' => __('Center', 'siblogs'),
            'end' => __('End', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('sidebar_scroll_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 5,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_scroll_width', array(
        'label' => _('Scrollbar Width'),
        'type' => 'text',
        'section' => 'site_sidebar',
    ));
    $wp_customize->add_setting('sidebar_scrollbar_bg', array(
        'default' => '#f7f7f7',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_scrollbar_bg', array(
        'label' => __('Scrollbar Background Color', 'siblogs'),
        'section' => 'site_sidebar',
        'settings' => 'sidebar_scrollbar_bg',
    )));
    $wp_customize->add_setting('sidebar_scrollbar_thumb_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_scrollbar_thumb_color', array(
        'label' => __('Scrollbar Thumb Color', 'siblogs'),
        'section' => 'site_sidebar',
        'settings' => 'sidebar_scrollbar_thumb_color',
    )));
    $wp_customize->add_setting('sidebar_scrollbar_thumb_hover_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_scrollbar_thumb_hover_color', array(
        'label' => __('Scrollbar Thumb Hover Color', 'siblogs'),
        'section' => 'site_sidebar',
        'settings' => 'sidebar_scrollbar_thumb_hover_color',
    )));

    /**
     * Home Sections
     * 
     */
    $wp_customize->add_section('si_home', array(
        'title' => 'Home Sections',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('main_grid_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 4,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('main_grid_gap', array(
        'label' => _('Main Grid Gap'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('desktop_main_grid_column', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "calc(65% - 4px) 35%",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('desktop_main_grid_column', array(
        'label' => _('Desktop Main Grid Column'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('mobile_main_grid_column', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "1fr",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('mobile_main_grid_column', array(
        'label' => _('Mobile Main Grid Column'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('desktop_main_posts_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 275,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_main_posts_height', array(
        'label' => _('Desktop Main Posts Height'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('mobile_main_posts_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 300,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_main_posts_height', array(
        'label' => _('Mobile Main Posts Height'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('dekstop_posts_column', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 3,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('dekstop_posts_column', array(
        'label' => _('Desktop Simple Posts Column'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('tablet_posts_column', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 2,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('tablet_posts_column', array(
        'label' => _('Tablet Simple Posts Column'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('mobile_posts_column', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "1fr",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('mobile_posts_column', array(
        'label' => _('Mobile Simple Posts Column'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('posts_grid_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 25,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('posts_grid_gap', array(
        'label' => _('Simple Posts Gap'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('post_default_img_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 240,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_default_img_height', array(
        'label' => _('Post Default Image Height'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('overlay_post_max_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 550,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('overlay_post_max_height', array(
        'label' => _('Overlay Post Max Height'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('post_grid_layout_img_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 260,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_grid_layout_img_height', array(
        'label' => _('Post Grid Layout Featured Image Height'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('category_link_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 14,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('category_link_size', array(
        'label' => _('Category Link Size'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('category_link_thickness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('category_link_thickness', array(
        'label' => _('Category Link Font Weight'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('category_link_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'category_link_color', array(
        'label' => __('Category Link Color', 'siblogs'),
        'section' => 'si_home',
        'settings' => 'category_link_color',
    )));
    $wp_customize->add_setting('badge_bg_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'badge_bg_color', array(
        'label' => __('Badge Background Color', 'siblogs'),
        'section' => 'si_home',
        'settings' => 'badge_bg_color',
    )));
    $wp_customize->add_setting('badge_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'badge_text_color', array(
        'label' => __('Badge Background Color', 'siblogs'),
        'section' => 'si_home',
        'settings' => 'badge_text_color',
    )));
    $wp_customize->add_setting('badge_inner_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 8,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('badge_inner_offsetx', array(
        'label' => _('Badge Inner OffsetX'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('badge_inner_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 2,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('badge_inner_offsety', array(
        'label' => _('Badge Inner OffsetY'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('dekstop_huge_posts_column', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 3,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('dekstop_huge_posts_column', array(
        'label' => _('Desktop Huge Posts Column'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('tablet_huge_posts_column', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 2,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('tablet_huge_posts_column', array(
        'label' => _('Tablet Huge Posts Column'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('posts_container_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 70,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('posts_container_width', array(
        'label' => _('Posts Container Width'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('posts_container_offset_right', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('posts_container_offset_right', array(
        'label' => _('Posts Container Offset Right'),
        'type' => 'text',
        'section' => 'si_home',
    ));
    $wp_customize->add_setting('posts_sidebar_container_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('posts_sidebar_container_width', array(
        'label' => _('Posts Sidebar Container Width'),
        'type' => 'text',
        'section' => 'si_home',
    ));

    /**
     * Widgets
     * 
     */
    $wp_customize->add_section('si_widgets', array(
        'title' => 'Sidebar Widget',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('widget_font_family', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "'Jost', sans-serif",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('widget_font_family', array(
        'label' => _('Widget Font Family'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_desktop_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_desktop_width', array(
        'label' => _('Widget Desktop Width'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widgets_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widgets_offsety', array(
        'label' => _('Widgets OffsetY'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_sidebar_title', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_sidebar_title', array(
        'label' => _('Widget Sidebar Title Size'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_sidebar_title_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'widget_sidebar_title_color', array(
        'label' => __('Widget Title/Heading Line Background Color', 'siblogs'),
        'section' => 'si_widgets',
        'settings' => 'widget_sidebar_title_color',
    )));
    $wp_customize->add_setting('widget_sidebar_title_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_sidebar_title_offset_bottom', array(
        'label' => _('Widget Sidebar Title Offset Bottom'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('desktop_widget_title_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 25,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_widget_title_size', array(
        'label' => _('Desktop Widget Title/Heading Size'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('mobile_widget_title_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 22,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_widget_title_size', array(
        'label' => _('Mobile Widget Title/Heading Size'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_title_font_weight', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_title_font_weight', array(
        'label' => _('Widget Title/Heading Thickness'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_title_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_title_gap', array(
        'label' => _('Widget Title/Heading Gap'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_title_wrap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "pre",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('widget_title_wrap', array(
        'label' => _('Widget Title/Heading Wrap Style'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_title_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_title_offset_bottom', array(
        'label' => _('Widget Title/Heading Offset Bottom'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_title_line_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 2,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_title_line_height', array(
        'label' => _('Widget Title/Heading Line Height'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_title_line_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_title_line_roundness', array(
        'label' => _('Widget Title/Heading Line Roundness'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_title_line_bg', array(
        'default' => '#8a8a8a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'widget_title_line_bg', array(
        'label' => __('Widget Title/Heading Line Background Color', 'siblogs'),
        'section' => 'si_widgets',
        'settings' => 'widget_title_line_bg',
    )));
    $wp_customize->add_setting('widget_latest_post_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 25,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_latest_post_offset_bottom', array(
        'label' => _('Widget Latest Posts Inner Offset Bottom'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));
    $wp_customize->add_setting('widget_post_view_lists_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('widget_post_view_lists_offsety', array(
        'label' => _('Widget Post Views Lists Inner OffsetY'),
        'type' => 'text',
        'section' => 'si_widgets',
    ));

    /**
     * General Settings
     * 
     */
    $wp_customize->add_section('si_general', array(
        'title' => 'General Settings',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('post_tags_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_tags_offsetx', array(
        'label' => _('Post Tags OffsetX'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('post_tags_line_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 16,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_tags_line_height', array(
        'label' => _('Post Tags Line Height'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('post_tags_divider_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_tags_divider_width', array(
        'label' => _('Post Tags Divider Width'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('post_tags_divider_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'post_tags_divider_color', array(
        'label' => __('Post Tags Divider Color', 'siblogs'),
        'section' => 'si_general',
        'settings' => 'post_tags_divider_color',
    )));
    $wp_customize->add_setting('archive_main_section_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('archive_main_section_offset_bottom', array(
        'label' => _('Archive Main Section Offset Bottom'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('desktop_single_post_title_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_single_post_title_size', array(
        'label' => _('Desktop Single Post Title Size'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('mobile_single_post_title_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 22,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_single_post_title_size', array(
        'label' => _('Mobile Single Post Title Size'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('single_posts_title_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'single_posts_title_color', array(
        'label' => __('Single Post Title Color', 'siblogs'),
        'section' => 'si_general',
        'settings' => 'single_posts_title_color',
    )));
    $wp_customize->add_setting('post_meta_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_meta_offsetx', array(
        'label' => _('Post Meta OffsetX'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('text_404_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 100,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('text_404_size', array(
        'label' => _('404 Title Size'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('text_404_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_404_color', array(
        'label' => __('404 Title Color', 'siblogs'),
        'section' => 'si_general',
        'settings' => 'text_404_color',
    )));
    $wp_customize->add_setting('post_password_label_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('post_password_label_size', array(
        'label' => _('Post Password Label Size'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('internet_alert_font_family', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => "'Jost', sans-serif",
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('internet_alert_font_family', array(
        'label' => _('Internet Alert Font Family'),
        'type' => 'text',
        'section' => 'si_general',
    ));
    $wp_customize->add_setting('show_post_views', array(
        'default'           => false,
        'sanitize_callback' => 'sanitize_checkbox',
    ));
    $wp_customize->add_control('show_post_views',  array(
        'label'    => __('Show Posts Views', 'siblogs'),
        'section'  => 'si_general',
        'settings' => 'show_post_views',
        'type'     => 'checkbox',
    ));

    /**
     * Form
     * 
     */
    $wp_customize->add_section('si_forms', array(
        'title' => 'Form',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('form_fields_space', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('form_fields_space', array(
        'label' => _('Fields Space'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('form_fields_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 8,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('form_fields_offsetx', array(
        'label' => _('Fields OffsetX'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('form_fields_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 14,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('form_fields_offsety', array(
        'label' => _('Fields OffsetY'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('form_fields_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 45,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('form_fields_height', array(
        'label' => _('Fields Height'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('form_fields_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 25,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('form_fields_roundness', array(
        'label' => _('Fields Roundness'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('form_fields_text_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 16,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('form_fields_text_size', array(
        'label' => _('Fields Text Size'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('form_textarea_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('form_textarea_roundness', array(
        'label' => _('Textarea Roundness'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('form_textarea_resize', array(
        'default' => 'vertical',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('form_textarea_resize', array(
        'label' => __('Textarea Resize', 'siblogs'),
        'section' => 'si_forms',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'vertical' => __('Vertical', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('checkbox_radio_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('checkbox_radio_size', array(
        'label' => _('Checkbox/Radio Size'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('button_text_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 16,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('button_text_size', array(
        'label' => _('Button Text Size'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('button_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('button_offsetx', array(
        'label' => _('Button OffsetX'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('button_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 8,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('button_offsety', array(
        'label' => _('Button OffsetY'),
        'type' => 'text',
        'section' => 'si_forms',
    ));
    $wp_customize->add_setting('button_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('button_roundness', array(
        'label' => _('Button Roundness'),
        'type' => 'text',
        'section' => 'si_forms',
    ));


    /**
     * Social Icons
     * 
     */
    $wp_customize->add_section('social_icons', array(
        'title' => 'Social Icons',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('show_social_icons', array(
        'default'           => true,
        'sanitize_callback' => 'sanitize_checkbox',
    ));
    $wp_customize->add_control('show_social_icons',  array(
        'label'    => __('Check To Show Icons', 'siblogs'),
        'section'  => 'social_icons',
        'settings' => 'show_social_icons',
        'type'     => 'checkbox',
    ));
    $wp_customize->add_setting('facebook', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('facebook', array(
        'label' => _('Facebook Url'),
        'type' => 'text',
        'section' => 'social_icons',
    ));
    $wp_customize->add_setting('instagram', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('instagram', array(
        'label' => _('Instagram Url'),
        'type' => 'text',
        'section' => 'social_icons',
    ));
    $wp_customize->add_setting('linkedin', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('linkedin', array(
        'label' => _('LinkedIn Url'),
        'type' => 'text',
        'section' => 'social_icons',
    ));

    /**
     * Author Settings
     * 
     */
    $wp_customize->add_section('site_author', array(
        'title' => 'Author',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('author_banner_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 290,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_banner_height', array(
        'label' => _('Banner Height'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_wrapper_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 100,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_wrapper_offset_top', array(
        'label' => _('Wrapper Offset Top'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_wrapper_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_wrapper_offset_bottom', array(
        'label' => _('Wrapper Offset Bottom'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_wrapper_bg', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'author_wrapper_bg', array(
        'label' => __('Wrapper Background Color', 'siblogs'),
        'section' => 'site_author',
        'settings' => 'author_wrapper_bg',
    )));
    $wp_customize->add_setting('author_wrapper_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 40,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_wrapper_roundness', array(
        'label' => _('Wrapper Roundness'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('desktop_author_wrapper_inner_offset', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_author_wrapper_inner_offset', array(
        'label' => _('Desktop Wrapper Inner Offset'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('mobile_author_wrapper_inner_offset', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_author_wrapper_inner_offset', array(
        'label' => _('Mobile Wrapper Inner Offset'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('desktop_author_wrapper_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_author_wrapper_gap', array(
        'label' => _('Desktop Wrapper Gap'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('mobile_author_wrapper_gap', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 25,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_author_wrapper_gap', array(
        'label' => _('Mobile Wrapper Gap'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_avatar_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 170,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_avatar_size', array(
        'label' => _('Avatar Size'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_avatar_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_avatar_roundness', array(
        'label' => _('Avatar Roundness'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_avatar_outline_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 5,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_avatar_outline_width', array(
        'label' => _('Avatar Outline Width'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_avatar_outline_color', array(
        'default' => '#2D93AD',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'author_avatar_outline_color', array(
        'label' => __('Avatar Outline Color', 'siblogs'),
        'section' => 'site_author',
        'settings' => 'author_avatar_outline_color',
    )));
    $wp_customize->add_setting('author_avatar_fill_style', array(
        'default' => 'contain',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('author_avatar_fill_style', array(
        'label' => __('Avatar Fill Style', 'siblogs'),
        'section' => 'site_author',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'cover' => __('Cover', 'siblogs'),
            'contain' => __('Contain', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('author_avatar_position', array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('author_avatar_position', array(
        'label' => __('Avatar Position', 'siblogs'),
        'section' => 'site_author',
        'type' => 'select',
        'choices' => array(
            'center' => __('Default', 'siblogs'),
            'left' => __('Left', 'siblogs'),
            'Right' => __('Right', 'siblogs'),
            'Bottom' => __('Bottom', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('author_links_style', array(
        'default' => 'underline',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('author_links_style', array(
        'label' => __('Links Style', 'siblogs'),
        'section' => 'site_author',
        'type' => 'select',
        'choices' => array(
            'none' => __('Default', 'siblogs'),
            'underline' => __('underline', 'siblogs'),
        ),
    ));
    $wp_customize->add_setting('author_name_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 35,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_name_size', array(
        'label' => _('Name Size'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_icons_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 25,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('author_icons_size', array(
        'label' => _('Icons Size'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('author_icons_color', array(
        'default' => '#8a8a8a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'author_icons_color', array(
        'label' => __('Icons Color', 'siblogs'),
        'section' => 'site_author',
        'settings' => 'author_icons_color',
    )));
    $wp_customize->add_setting('share_button_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('share_button_size', array(
        'label' => _('Share Button Size'),
        'type' => 'text',
        'section' => 'site_author',
    ));
    $wp_customize->add_setting('share_button_bg', array(
        'default' => '#f7f7f7',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'share_button_bg', array(
        'label' => __('Share Button Background Color', 'siblogs'),
        'section' => 'site_author',
        'settings' => 'share_button_bg',
    )));
    $wp_customize->add_setting('share_button_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'share_button_color', array(
        'label' => __('Share Button Color', 'siblogs'),
        'section' => 'site_author',
        'settings' => 'share_button_color',
    )));
    $wp_customize->add_setting('desktop_author_posts_list_img_height', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 300,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_author_posts_list_img_height', array(
        'label' => _('Desktop Posts list Image Height'),
        'type' => 'text',
        'section' => 'site_author',
    ));

    /**
     * Footer Settings
     * 
     */
    $wp_customize->add_section('site_footer', array(
        'title' => 'Footer',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('secondary_footer_logo_width', array(
        'default'           => 110,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('secondary_footer_logo_width', array(
        'type' => 'range',
        'section' => 'site_footer',
        'label' => __('Footer Logo Width'),
        'description' => __('You can set logo width upto maximum 500 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 500,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('secondary_footer_logo_height', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('secondary_footer_logo_height', array(
        'type' => 'range',
        'section' => 'site_footer',
        'label' => __('Footer Logo Height'),
        'description' => __('You can set logo height upto maximum 200 value'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 2,
        ),
    ));
    $wp_customize->add_setting('secondary_footer_logo_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('secondary_footer_logo_offset_bottom', array(
        'label' => _('Secondary Footer Offset Bottom'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_description', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem autem impedit veniam voluptatum porro iusto, dicta sit at quaerat maxime.',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('secondary_footer_description', array(
        'label' => _('Description'),
        'type' => 'textarea',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_btn_text', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Become a subscriber',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('secondary_footer_btn_text', array(
        'label' => _('Button Text'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_btn_arrow', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '&#10142;',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('secondary_footer_btn_arrow', array(
        'label' => _('Button Arrow'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_btn_url', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('secondary_footer_btn_url', array(
        'label' => _('Button Url'),
        'type' => 'url',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('desktop_secondary_footer_btn_inner_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_secondary_footer_btn_inner_offsety', array(
        'label' => _('Desktop Secondary Footer Button Inner OffsetY'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('mobile_secondary_footer_btn_inner_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_secondary_footer_btn_inner_offsety', array(
        'label' => _('Mobile Secondary Footer Button Inner OffsetY'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_btn_roundness', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('secondary_footer_btn_roundness', array(
        'label' => _('Secondary Footer Button Roundness'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_btn_weight', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('secondary_footer_btn_weight', array(
        'label' => _('Secondary Footer Button Font Weight'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_btn_subtitle', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Get all the latest posts delivered straight to your inbox.',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('secondary_footer_btn_subtitle', array(
        'label' => _('Button Subtitle'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('secondary_footer_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('secondary_footer_offsety', array(
        'label' => _('Secondary Footer OffsetY'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('primary_footer_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1900,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('primary_footer_width', array(
        'label' => _('Primary Footer Width'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('primary_footer_roundness', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('primary_footer_roundness', array(
        'type' => 'range',
        'section' => 'site_footer',
        'label' => __('Primary Footer Roundness'),
        'description' => __('You can make round to the footer from the top sides'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    ));
    $wp_customize->add_setting('primary_footer_bg', array(
        'default' => '#f7f7f7',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_footer_bg', array(
        'label' => __('Primary Background Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'primary_footer_bg',
    )));
    $wp_customize->add_setting('primary_footer_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('primary_footer_offsety', array(
        'label' => _('Primary Footer OffsetY'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('email_roundness', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('email_roundness', array(
        'type' => 'range',
        'section' => 'site_footer',
        'label' => __('Email Roundness'),
        'description' => __('You can make round to the email box and the inner arrow'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    ));
    $wp_customize->add_setting('email_bg_color', array(
        'default' => '#2d93ad',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'email_bg_color', array(
        'label' => __('Email Background Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'email_bg_color',
    )));
    $wp_customize->add_setting('email_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'email_text_color', array(
        'label' => __('Email Text Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'email_text_color',
    )));
    $wp_customize->add_setting('email_arrow_bg', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'email_arrow_bg', array(
        'label' => __('Arrow Background Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'email_arrow_bg',
    )));
    $wp_customize->add_setting('email_arrow_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'email_arrow_color', array(
        'label' => __('Arrow Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'email_arrow_color',
    )));
    $wp_customize->add_setting('primary_footer_column_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('primary_footer_column_offsetx', array(
        'label' => _('Primary Footer Column offsetX'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('footer_widget_title_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 22,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('footer_widget_title_size', array(
        'label' => _('Widget Title Size'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('footer_widget_title_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('footer_widget_title_offset_bottom', array(
        'label' => _('Widget Title Offset Bottom'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('footer_widget_title_color', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_widget_title_color', array(
        'label' => __('Widget Title Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'footer_widget_title_color',
    )));

    $wp_customize->add_setting('copyright_bg', array(
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'copyright_bg', array(
        'label' => __('Copyright Background Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'copyright_bg',
    )));
    $wp_customize->add_setting('copyright_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'copyright_text_color', array(
        'label' => __('Copyright Text Color', 'siblogs'),
        'section' => 'site_footer',
        'settings' => 'copyright_text_color',
    )));
    $wp_customize->add_setting('copyright_text', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Copyright © 2023. All rights reserved by SiBlogs',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('copyright_text', array(
        'label' => _('Copyright Text'),
        'type' => 'textarea',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('copyright_offsety', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('copyright_offsety', array(
        'label' => _('Copyright OffsetY'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('copyright_text_size', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 18,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('copyright_text_size', array(
        'label' => _('Copyright Text Size'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('copyright_font_weight', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 400,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('copyright_font_weight', array(
        'label' => _('Copyright Font Weight'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
}
