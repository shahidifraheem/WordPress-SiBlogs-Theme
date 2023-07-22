<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register widget area.
 *
 * @since SI Blogs 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function si_blogs_widgets_init()
{

    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'siblogs'),
            'id'            => 'sidebar',
            'description'   => esc_html__('Add widgets here to appear in your sidebar of post and category.', 'siblogs'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer widget 1', 'siblogs'),
            'id'            => 'footer-widget-1',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'siblogs'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer widget 2', 'siblogs'),
            'id'            => 'footer-widget-2',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'siblogs'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer widget 3', 'siblogs'),
            'id'            => 'footer-widget-3',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'siblogs'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer widget 4', 'siblogs'),
            'id'            => 'footer-widget-4',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'siblogs'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Footer widget 5', 'siblogs'),
            'id'            => 'footer-widget-5',
            'description'   => esc_html__('Add widgets here to appear in your footer.', 'siblogs'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'si_blogs_widgets_init');
