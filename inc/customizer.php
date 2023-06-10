<?php
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

    // General Settings
    $wp_customize->add_setting('g_paragraph', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 16,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('g_paragraph', array(
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
        'default' => 500,
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
    $wp_customize->add_setting('desktop_section_inner_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_section_inner_offset_top', array(
        'label' => _('Desktop Section Inner Offset Top'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('tablet_section_inner_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('tablet_section_inner_offset_top', array(
        'label' => _('Tablet Section Inner Offset Top'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_section_inner_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_section_inner_offset_top', array(
        'label' => _('Mobile Section Inner Offset Top'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('desktop_section_inner_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_section_inner_offset_bottom', array(
        'label' => _('Desktop Section Inner Offset Bottom'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('tablet_section_inner_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('tablet_section_inner_offset_bottom', array(
        'label' => _('Tablet Section Inner Offset Bottom'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_section_inner_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_section_inner_offset_bottom', array(
        'label' => _('Mobile Section Inner Offset Bottom'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    // Settings for margin-y
    $wp_customize->add_setting('desktop_section_outer_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_section_outer_offset_top', array(
        'label' => _('Desktop Section Outer Offset Top'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_section_outer_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_section_outer_offset_top', array(
        'label' => _('Mobile Section Outer Offset Top'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('desktop_section_outer_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_section_outer_offset_bottom', array(
        'label' => _('Desktop Section Outer Offset Bottom'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_section_outer_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_section_outer_offset_bottom', array(
        'label' => _('Mobile Section Outer Offset Bottom'),
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
    $wp_customize->add_setting('desktop_wrapper_offset_left', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_wrapper_offset_left', array(
        'label' => _('Desktop Wraper Offset Left'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('desktop_wrapper_offset_right', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('desktop_wrapper_offset_right', array(
        'label' => _('Desktop Wraper Offset Right'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_wrapper_offset_left', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_wrapper_offset_left', array(
        'label' => _('Mobile Wraper Offset Left'),
        'type' => 'text',
        'section' => 'site_global',
    ));
    $wp_customize->add_setting('mobile_wrapper_offset_right', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 20,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mobile_wrapper_offset_right', array(
        'label' => _('Mobile Wraper Offset Right'),
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
    $wp_customize->add_setting('ancmt_offset_top', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ancmt_offset_top', array(
        'label' => _('Offset Top'),
        'type' => 'text',
        'section' => 'site_announcement',
    ));
    $wp_customize->add_setting('ancmt_offset_bottom', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 10,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ancmt_offset_bottom', array(
        'label' => _('Offset Bottom'),
        'type' => 'text',
        'section' => 'site_announcement',
    ));
    // Add a select setting
    $wp_customize->add_setting('links_style', array(
        'default' => 'underline',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
    $wp_customize->add_control('links_style', array(
        'label' => __('Links Style', 'siblogs'),
        'section' => 'site_announcement',
        'type' => 'select',
        'choices' => array(
            'underline' => __('Underline', 'siblogs'),
            'none' => __('Default', 'siblogs'),
        ),
    ));
    // Add a select setting
    $wp_customize->add_setting('links_hover_style', array(
        'default' => 'underline',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
    $wp_customize->add_control('links_hover_style', array(
        'label' => __('Links Style', 'siblogs'),
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
        'default' => '#242424',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
        'label' => __('Background Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'header_bg_color',
    )));
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
    // Add a select setting
    $wp_customize->add_setting('header_main_links_transform', array(
        'default' => 'uppercase',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
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
    $wp_customize->add_setting('mega_menu_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 75,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('mega_menu_offsetx', array(
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
    // Add a select setting
    $wp_customize->add_setting('mega_menu_img_size', array(
        'default' => 'cover',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
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
    $wp_customize->add_setting('sub_menu_bg', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 250,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_bg', array(
        'label' => _('Sub Menu Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('sub_menu_border_width', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_border_width', array(
        'label' => _('Sub Menu Border Width'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('sub_menu_border_color', array(
        'default' => '#e2e2e2',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sub_menu_border_color', array(
        'label' => __('Sub Menu Border Color', 'siblogs'),
        'section' => 'site_header',
        'settings' => 'sub_menu_border_color',
    )));
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
    $wp_customize->add_setting('sidebar_width', array(
        'default'           => 320,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_width', array(
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
    // Add a select setting
    $wp_customize->add_setting('sidebar_logo_align', array(
        'default' => 'cover',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
    $wp_customize->add_control('sidebar_logo_align', array(
        'label' => __('Logo Align', 'siblogs'),
        'section' => 'site_header',
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
    $wp_customize->add_setting('sidebar_icon_inner_offset', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 32,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sidebar_icon_inner_offset', array(
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
    $wp_customize->add_setting('sub_menu_links_offsetx', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 15,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('sub_menu_links_offsetx', array(
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
    // Add a select setting
    $wp_customize->add_setting('sidebar_newsletter_text_align', array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
    $wp_customize->add_control('sidebar_newsletter_text_align', array(
        'label' => __('Newsletter Text Align', 'siblogs'),
        'section' => 'site_header',
        'type' => 'select',
        'choices' => array(
            'start' => __('Default', 'siblogs'),
            'center' => __('Center', 'siblogs'),
            'end' => __('End', 'siblogs'),
        ),
    ));
    // Add a select setting
    $wp_customize->add_setting('sidebar_newsletter_button_align', array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
    $wp_customize->add_control('sidebar_newsletter_button_align', array(
        'label' => __('Newsletter Button Align', 'siblogs'),
        'section' => 'site_header',
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
    // Add a select setting
    $wp_customize->add_setting('form_textarea_resize', array(
        'default' => 'vertical',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a select control
    $wp_customize->add_control('form_textarea_resize', array(
        'label' => __('Textarea Resize', 'siblogs'),
        'section' => 'site_header',
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
     * Footer Settings
     * 
     */
    $wp_customize->add_section('site_footer', array(
        'title' => 'Footer',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('footer_logo_width', array(
        'default'           => 110,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('footer_logo_width', array(
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
    $wp_customize->add_setting('footer_logo_height', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('footer_logo_height', array(
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
    $wp_customize->add_setting('footer_description', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem autem impedit veniam voluptatum porro iusto, dicta sit at quaerat maxime.',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('footer_description', array(
        'label' => _('Description'),
        'type' => 'textarea',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('footer_btn_text', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Become a subscriber',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('footer_btn_text', array(
        'label' => _('Button Text'),
        'type' => 'text',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('footer_btn_url', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_btn_url', array(
        'label' => _('Button Url'),
        'type' => 'url',
        'section' => 'site_footer',
    ));
    $wp_customize->add_setting('footer_btn_subtitle', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Get all the latest posts delivered straight to your inbox.',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('footer_btn_subtitle', array(
        'label' => _('Button Subtitle'),
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
}
