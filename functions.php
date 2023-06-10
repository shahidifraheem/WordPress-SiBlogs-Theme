<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage si_blogs
 * @since SI Blogs 1.0
 */

// This theme requires WordPress 5.3 or later.
// if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
// 	require get_template_directory() . '/inc/back-compat.php';
// }

if (!function_exists('si_blogs_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since SI Blogs 1.0
	 *
	 * @return void
	 */
	function si_blogs_setup()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		register_nav_menus(
			array(
				'si-main-menu' => esc_html__('Main menu', 'siblogs'),
				'si-secondary-menu' => esc_html__('Secondary menu', 'siblogs'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__('Extra small', 'siblogs'),
					'shortName' => esc_html_x('XS', 'Font size', 'siblogs'),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__('Small', 'siblogs'),
					'shortName' => esc_html_x('S', 'Font size', 'siblogs'),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__('Normal', 'siblogs'),
					'shortName' => esc_html_x('M', 'Font size', 'siblogs'),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__('Large', 'siblogs'),
					'shortName' => esc_html_x('L', 'Font size', 'siblogs'),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__('Extra large', 'siblogs'),
					'shortName' => esc_html_x('XL', 'Font size', 'siblogs'),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__('Huge', 'siblogs'),
					'shortName' => esc_html_x('XXL', 'Font size', 'siblogs'),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__('Gigantic', 'siblogs'),
					'shortName' => esc_html_x('XXXL', 'Font size', 'siblogs'),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__('Black', 'siblogs'),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__('Dark gray', 'siblogs'),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__('Gray', 'siblogs'),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__('Green', 'siblogs'),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__('Blue', 'siblogs'),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__('Purple', 'siblogs'),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__('Red', 'siblogs'),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__('Orange', 'siblogs'),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__('Yellow', 'siblogs'),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__('White', 'siblogs'),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__('Purple to yellow', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to purple', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__('Green to yellow', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to green', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__('Red to yellow', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to red', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__('Purple to red', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__('Red to purple', 'siblogs'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');

		// Add support for experimental link color control.
		add_theme_support('experimental-link-color');

		// Add support for experimental cover block spacing.
		add_theme_support('custom-spacing');

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support('custom-units');

		// Add support for exceprts.
		add_post_type_support('page', 'excerpt');

		// Remove feed icon link from legacy RSS widget.
		add_filter('rss_widget_feed_link', '__return_empty_string');
	}
}
add_action('after_setup_theme', 'si_blogs_setup');

include_once "inc/widgets.php";

include_once "inc/customizer.php";

/**
 * Enqueue scripts and styles.
 *
 * @since SI Blogs 1.0
 *
 * @return void
 */
function si_blogs_scripts()
{
	wp_enqueue_style('si-blogs-style', get_template_directory_uri() . '/style.css', '');
	wp_enqueue_style('wp-default', false);

	// Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_register_script(
		'si-blogs-script',
		get_template_directory_uri() . '/assets/js/index.js',
		array('jquery'),
		'',
		true
	);

	wp_enqueue_script('si-blogs-script');
}
add_action('wp_enqueue_scripts', 'si_blogs_scripts');

/**
 * Data viewer
 *
 * @param [array] $data
 * @return Data
 */
function show_data($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

/**
 * Get post views by id
 *
 * @param [int] $id
 * @return Views
 */
function post_views_by_id($id)
{
	if (function_exists('pvc_get_post_views')) {
		$post_views = pvc_get_post_views($id);
		return $post_views;
	}
}

/**
 * Manage post excerpt
 */
function custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function custom_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/**
 * Restrict Custom header code input for administrators
 *
 * @param [type] $field
 * @return void
 */
function restrict_embed_code_field($field)
{
	if (!current_user_can('administrator')) {
		$field['label'] = '';
		$field['type'] = 'hidden';
		$field['value'] = '';
		$field['wrapper']['class'] .= ' acf-hidden';
	}
	return $field;
}
add_filter('acf/prepare_field/name=header_embed_code', 'restrict_embed_code_field');
add_filter('acf/prepare_field/name=footer_embed_code', 'restrict_embed_code_field');

/**
 * Hiding the header and footer fields boxes
 *
 * @return void
 */
function add_custom_admin_css()
{
	if (!current_user_can('administrator')) {
		$custom_css = "
        #acf-group_646242d6090d8, #acf-group_6462419c5f2d7 {
            display: none !important;
        }
    ";
		wp_add_inline_style('wp-admin', $custom_css);
	}
}
add_action('admin_enqueue_scripts', 'add_custom_admin_css');

/**
 * Disable crawler for indexing the draft posts and pages
 *
 * @return void
 */
function draft_robot_tags($robots)
{
	if (is_singular() && is_preview() && in_array(get_post_status(), ['draft', 'auto-draft'])) {
		// Remove the default robot meta tags
		$robots = array(
			'index' => false,
			'follow' => false,
			'max-image-preview' => 'none',
			'max-snippet' => -1,
			'max-video-preview' => -1
		);

		$robots['noindex'] = true;
		$robots['nofollow'] = true;
	}

	return $robots;
}
add_filter('wp_robots', 'draft_robot_tags');

/**
 * Customizer Preview Javascript
 *
 * @return void
 */
function enqueue_customizer_sidebar_script()
{
	// Not working
?>
	<script>
		jQuery(function($) {
				console.log($('.customize-control-range'))
				$('.customize-control-range').append('<span class="range-count">0</span>');
				$('.customize-control-range input[type="range"]').change(function() {
					$(this).next().text = $(this).val();
				});
		});
	</script>
<?php
}
add_action('customize_controls_enqueue_scripts', 'enqueue_customizer_sidebar_script');


include_once "inc/authenticate.php";

include_once "inc/admin-notices.php";
