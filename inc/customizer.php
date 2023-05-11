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
     * Header Settings
     * 
     */
    $wp_customize->add_section('site_header', array(
        'title' => 'Header',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('button', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => 'Get Started',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('button', array(
        'label' => _('Button Text'),
        'type' => 'text',
        'section' => 'site_header',
    ));
    $wp_customize->add_setting('button_link', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => '#contact',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('button_link', array(
        'label' => _('Button Url'),
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
    $wp_customize->add_setting('description', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => 'Inbio is a personal siblogs template. You can customize all.',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('description', array(
        'label' => _('Description'),
        'type' => 'textarea',
        'section' => 'site_sidebar',
    ));


    /**
     * Social Icons
     * 
     */
    $wp_customize->add_section('social_icons', array(
        'title' => 'Social Icons',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('social_title', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => 'FIND WITH ME',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('social_title', array(
        'label' => _('Add Title'),
        'type' => 'text',
        'section' => 'social_icons',
    ));
    $wp_customize->add_setting('facebook', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => '#',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('facebook', array(
        'label' => _('Facebook Url'),
        'type' => 'text',
        'section' => 'social_icons',
    ));
    $wp_customize->add_setting('instagram', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => '#',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('instagram', array(
        'label' => _('Instagram Url'),
        'type' => 'text',
        'section' => 'social_icons',
    ));
    $wp_customize->add_setting('linkedin', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => '#',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('linkedin', array(
        'label' => _('LinkedIn Url'),
        'type' => 'text',
        'section' => 'social_icons',
    ));

    /**
     * Skills Icons
     * 
     */
    $wp_customize->add_section('skills_icons', array(
        'title' => 'Skills Icons',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('skills_title', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => 'BEST SKILL ON',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('skills_title', array(
        'label' => _('Add Title'),
        'type' => 'text',
        'section' => 'skills_icons',
    ));
    $wp_customize->add_setting('icon_1', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'icon_1',
        array(
            'label' => _('Icon 1'),
            'type' => 'image',
            'section' => 'skills_icons',
            'settings' => 'icon_1',
            'button_labels' => array( // All These labels are optional
                'select' => 'Select Icon',
                'remove' => 'Remove Icon',
                'change' => 'Change Icon',
            )
        )
    ));
    $wp_customize->add_setting('icon_2', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'icon_2',
        array(
            'label' => _('Icon 2'),
            'type' => 'image',
            'section' => 'skills_icons',
            'settings' => 'icon_2',
            'button_labels' => array( // All These labels are optional
                'select' => 'Select Icon',
                'remove' => 'Remove Icon',
                'change' => 'Change Icon',
            )
        )
    ));
    $wp_customize->add_setting('icon_3', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'icon_3',
        array(
            'label' => _('Icon 3'),
            'type' => 'image',
            'section' => 'skills_icons',
            'settings' => 'icon_3',
            'button_labels' => array( // All These labels are optional
                'select' => 'Select Icon',
                'remove' => 'Remove Icon',
                'change' => 'Change Icon',
            )
        )
    ));

    /**
     * Footer Settings
     * 
     */
    $wp_customize->add_section('site_footer', array(
        'title' => 'Footer',
        'panel' => 'siblogs_settings',
    ));
    $wp_customize->add_setting('copyright', array(
        'type' => 'theme_mod', //or option
        'capability' => 'edit_theme_options',
        'default' => 'Copyright © 2022. All rights reserved by Pantra Studios',
        'transport' => 'refresh', //postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('copyright', array(
        'label' => _('Cpyright Text'),
        'type' => 'textarea',
        'section' => 'site_footer',
    ));
}
