<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$bars_icon = file_get_contents(get_theme_mod("icons_path_url") . "bars.svg");
// Colors
$selection_color = get_theme_mod("selection_color", "#ffffff");
$selection_bg_color = get_theme_mod("selection_bg_color", "#2D93AD");
$primary_color = get_theme_mod("primary_color", "#2D93AD");
$secondary_color = get_theme_mod("secondary_color", "#8a8a8a");
$white_color = get_theme_mod("white_color", "#ffffff");
$dark_color = get_theme_mod("dark_color", "#242424");
$black_color = get_theme_mod("black_color", "#000000");
$svg_color = get_theme_mod("svg_color", "#ffffff");
$border_color = get_theme_mod("border_color", "#e2e2e2");
$light_color = get_theme_mod("light_color", "#f7f7f7");

// Font Family
$g_font_url = get_theme_mod("g_font_url", "https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500&display=swap");
$g_font_url_urdu = get_theme_mod("g_font_url_urdu", "https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;600;700&display=swap");
$g_font_url_arabic = get_theme_mod("g_font_url_arabic", "https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap");
$g_heading_font = get_theme_mod("g_heading_font", "'Jost', sans-serif");
$g_body_font = get_theme_mod("g_body_font", "'Rubik', sans-serif");
$g_body_urdu = get_theme_mod("g_body_urdu", "'Noto Nastaliq Urdu', serif");
$g_body_arabic = get_theme_mod("g_body_arabic", "'Amiri', serif");

// General
$g_desktop_paragraph = get_theme_mod("g_desktop_paragraph", 18);
$g_mobile_paragraph = get_theme_mod("g_mobile_paragraph", 16);
$g_paragraph_color = get_theme_mod("g_paragraph_color", "#242424");
$headings_color = get_theme_mod("headings_color", "#242424");
$headings_font_weight = get_theme_mod("headings_font_weight", 600);
$links_color = get_theme_mod("links_color", "#242424");
$links_hover_color = get_theme_mod("links_hover_color", "#2D93AD");
$image_roundness = get_theme_mod("image_roundness", 5);
$desktop_section_inner_offsety = get_theme_mod("desktop_section_inner_offsety", 50);
$tablet_section_inner_offsety = get_theme_mod("tablet_section_inner_offsety", 30);
$mobile_section_inner_offsety = get_theme_mod("mobile_section_inner_offsety", 15);
$desktop_section_outer_offsety = get_theme_mod("desktop_section_outer_offsety", 50);
$mobile_section_outer_offsety = get_theme_mod("mobile_section_outer_offsety", 15);
$wrapper_max_width = get_theme_mod("wrapper_max_width", 1300);
$desktop_wrapper_offsetx = get_theme_mod("desktop_wrapper_offsetx", 30);
$mobile_wrapper_offsetx = get_theme_mod("mobile_wrapper_offsetx", 20);

// Announcement
$ancmt_bg_color = get_theme_mod("ancmt_bg_color", "#242424");
$ancmt_text_color = get_theme_mod("ancmt_text_color", "#ffffff");
$ancmt_hover_color = get_theme_mod("ancmt_hover_color", "#2D93AD");
$ancmt_text_size = get_theme_mod("ancmt_text_size", 16);
$ancmt_offsety = get_theme_mod("ancmt_offsety", 10);
$ancmt_links_style = get_theme_mod("ancmt_links_style", "underline");
$ancmt_links_hover_style = get_theme_mod("ancmt_links_hover_style", "underline");
$ancmt_max_width = get_theme_mod("ancmt_max_width", 1900);

// Header
$header_bg_color = get_theme_mod("header_bg_color", "#ffffff");
$header_wrapper_width = get_theme_mod("header_wrapper_width", 1900);
$desktop_header_offsety = get_theme_mod("desktop_header_offsety", 0);
$mobile_header_offsety = get_theme_mod("mobile_header_offsety", 10);
$header_drop_shadow = get_theme_mod("header_drop_shadow", "0 0 20px rgba(0, 0, 0, .05)");
$desktop_header_content_gap = get_theme_mod("desktop_header_content_gap", 20);
$mobile_header_content_gap = get_theme_mod("mobile_header_content_gap", 20);
$dekstop_logo_width = get_theme_mod("dekstop_logo_width", 110);
$dekstop_logo_height = get_theme_mod("dekstop_logo_height", 50);
$mobile_logo_width = get_theme_mod("mobile_logo_width", 110);
$mobile_logo_height = get_theme_mod("mobile_logo_height", 50);
$logo_fill_size = get_theme_mod("logo_fill_size", "contain");
$logo_position = get_theme_mod("logo_position", "left");
$navbar_alignment = get_theme_mod("navbar_alignment", "left");
$header_text_color = get_theme_mod("header_text_color", "#ffffff");
$header_hover_color = get_theme_mod("header_hover_color", "#2D93AD");
$header_links_weight = get_theme_mod("header_links_weight", 500);
$header_links_offsetx = get_theme_mod("header_links_offsetx", 15);
$header_links_font = get_theme_mod("header_links_font", "'Jost', sans-serif");
$header_main_links_weight = get_theme_mod("header_main_links_weight", 600);
$header_main_links_transform = get_theme_mod("header_main_links_transform", "uppercase");
$menu_arrow_size = get_theme_mod("menu_arrow_size", 12);
$menu_arrow_offset_left = get_theme_mod("menu_arrow_offset_left", 8);
$mega_menu_width = get_theme_mod("mega_menu_width", 1024);
$mega_menu_default_height = get_theme_mod("mega_menu_default_height", 325);
$mega_menu_roundness = get_theme_mod("mega_menu_roundness", 25);
$mega_menu_padding = get_theme_mod("mega_menu_padding", 20);
$mega_menu_offset_left = get_theme_mod("mega_menu_offset_left", 5);
$menu_border_width = get_theme_mod("menu_border_width", 1);
$menu_border_color = get_theme_mod("menu_border_color", "#e2e2e2");
$post_grid_mega_menu_height = get_theme_mod("post_grid_mega_menu_height", 220);
$mega_menu_grid_offsetx = get_theme_mod("mega_menu_grid_offsetx", 20);
$mega_menu_grid_gap = get_theme_mod("mega_menu_grid_gap", 12);
$mega_menu_list_width = get_theme_mod("mega_menu_list_width", 160);
$mega_menu_img_height = get_theme_mod("mega_menu_img_height", 150);
$mega_menu_img_size = get_theme_mod("mega_menu_img_size", "cover");
$sub_menu_width = get_theme_mod("sub_menu_width", 250);
$sub_menu_bg = get_theme_mod("sub_menu_bg", "#ffffff");
$sub_menu_links_offsetx = get_theme_mod("sub_menu_links_offsetx", 20);
$sub_menu_links_offsety = get_theme_mod("sub_menu_links_offsety", 10);
$menu_links_border_width = get_theme_mod("menu_links_border_width", 1);
$menu_links_border_color = get_theme_mod("menu_links_border_color", "#e2e2e2");
$desktop_search_width = get_theme_mod("desktop_search_width", 500);
$mobile_search_width = get_theme_mod("mobile_search_width", 300);

// Sub Headers
$page_header_height = get_theme_mod("page_header_height", 250);
$desktop_page_banner_height = get_theme_mod("desktop_page_banner_height", 500);
$mobile_page_banner_height = get_theme_mod("mobile_page_banner_height", 300);
$title_color = get_theme_mod("title_color", "#242424");
$universal_title_color = get_theme_mod("universal_title_color", "#2D93AD");
$dekstop_universal_header_offset_bottom = get_theme_mod("dekstop_universal_header_offset_bottom", 20);
$mobile_universal_header_offset_bottom = get_theme_mod("mobile_universal_header_offset_bottom", 10);
$desktop_title_size = get_theme_mod("desktop_title_size", 40);
$mobile_title_size = get_theme_mod("mobile_title_size", 30);
$description_size = get_theme_mod("description_size", 16);
$description_offset_top = get_theme_mod("description_offset_top", 10);
$page_title_align = get_theme_mod("page_title_align", "center");
$page_title_offsety = get_theme_mod("page_title_offsety", 20);
$page_description_offset_top = get_theme_mod("page_description_offset_top", 20);
$page_description_color = get_theme_mod("page_description_color", "#8a8a8a");
$page_title_wrapper_width = get_theme_mod("page_title_wrapper_width", 800);

// Sidebar
$sidebar_overlay_color = get_theme_mod("sidebar_overlay_color", "#00000045");
$sidebar_bg_color = get_theme_mod("sidebar_bg_color", "#ffffff");
$desktop_sidebar_width = get_theme_mod("desktop_sidebar_width", 375);
$mobile_sidebar_width = get_theme_mod("mobile_sidebar_width", 320);
$sidebar_logo_offset_top = get_theme_mod("sidebar_logo_offset_top", 20);
$sidebar_logo_align = get_theme_mod("sidebar_logo_align", "start");
$sidebar_logo_width = get_theme_mod("sidebar_logo_width", 110);
$sidebar_logo_height = get_theme_mod("sidebar_logo_height", 50);
$sidebar_inner_offset = get_theme_mod("sidebar_inner_offset", 20);
$sidebar_icon_box_size = get_theme_mod("sidebar_icon_box_size", 32);
$sidebar_icon_size = get_theme_mod("sidebar_icon_size", 20);
$sidebar_icon_bg = get_theme_mod("sidebar_icon_bg", "#242424");
$sidebar_icon_color = get_theme_mod("sidebar_icon_color", "#ffffff");
$sidebar_menu_offset_top = get_theme_mod("sidebar_menu_offset_top", 30);
$sidebar_menu_offset_bottom = get_theme_mod("sidebar_menu_offset_bottom", 50);
$sub_menu_offsetx = get_theme_mod("sub_menu_offsetx", 15);
$sub_menu_offset_left = get_theme_mod("sub_menu_offset_left", 10);
$sidebar_newsletter_bg = get_theme_mod("sidebar_newsletter_bg", "#f7f7f7");
$sidebar_newsletter_inner_offset = get_theme_mod("sidebar_newsletter_inner_offset", 20);
$sidebar_newsletter_offsetx = get_theme_mod("sidebar_newsletter_offsetx", 20);
$sidebar_newsletter_offset_bottom = get_theme_mod("sidebar_newsletter_offset_bottom", 20);
$sidebar_newsletter_description_offsety = get_theme_mod("sidebar_newsletter_description_offsety", 10);
$sidebar_newsletter_text_align = get_theme_mod("sidebar_newsletter_text_align", "center");
$sidebar_newsletter_button_align = get_theme_mod("sidebar_newsletter_button_align", "center");
$sidebar_scroll_width = get_theme_mod("sidebar_scroll_width", 5);
$sidebar_scrollbar_bg = get_theme_mod("sidebar_scrollbar_bg", "#f7f7f7");
$sidebar_scrollbar_thumb_color = get_theme_mod("sidebar_scrollbar_thumb_color", "#2D93AD");
$sidebar_scrollbar_thumb_hover_color = get_theme_mod("sidebar_scrollbar_thumb_hover_color", "#2D93AD");

// Form
$form_fields_space = get_theme_mod("form_fields_space", 10);
$form_fields_offsetx = get_theme_mod("form_fields_offsetx", 8);
$form_fields_offsety = get_theme_mod("form_fields_offsety", 14);
$form_fields_height = get_theme_mod("form_fields_height", 45);
$form_fields_roundness = get_theme_mod("form_fields_roundness", 25);
$form_fields_text_size = get_theme_mod("form_fields_text_size", 16);
$form_textarea_roundness = get_theme_mod("form_textarea_roundness", 20);
$form_textarea_resize = get_theme_mod("form_textarea_resize", "vertical");
$checkbox_radio_size = get_theme_mod("checkbox_radio_size", 20);
$button_text_size = get_theme_mod("button_text_size", 16);
$button_offsetx = get_theme_mod("button_offsetx", 30);
$button_offsety = get_theme_mod("button_offsety", 8);
$button_roundness = get_theme_mod("button_roundness", 0);

// Breadcrumbs
$breadcrumbs_dekstop_offsety = get_theme_mod("breadcrumbs_dekstop_offsety", 20);
$breadcrumbs_mobile_offsety = get_theme_mod("breadcrumbs_mobile_offsety", 10);
$breadcrumbs_text_color = get_theme_mod("breadcrumbs_text_color", "#2D93AD");
$delimiter_offsetx = get_theme_mod("delimiter_offsetx", 5);
$delimiter_color = get_theme_mod("delimiter_color", "#8a8a8a");

// Editor
$editor_content_offsety = get_theme_mod("editor_content_offsety", 10);
$editor_offset_bottom = get_theme_mod("editor_offset_bottom", 10);
$editor_links = get_theme_mod("editor_links", "underline");
$editor_lists_style = get_theme_mod("editor_lists_style", "disc");
$editor_lists_marker_size = get_theme_mod("editor_lists_marker_size", 20);
$editor_sparator_offsety = get_theme_mod("editor_sparator_offsety", 20);

// Widgets
$widget_font_family = get_theme_mod("widget_font_family", "'Jost', sans-serif");
$widget_desktop_width = get_theme_mod("widget_desktop_width", 30);
$widgets_offsety = get_theme_mod("widgets_offsety", 20);
$widget_sidebar_title = get_theme_mod("widget_sidebar_title", 30);
$widget_sidebar_title_color = get_theme_mod("widget_sidebar_title_color", "#2D93AD");
$widget_sidebar_title_offset_bottom = get_theme_mod("widget_sidebar_title_offset_bottom", 30);
$desktop_widget_title_size = get_theme_mod("desktop_widget_title_size", 25);
$mobile_widget_title_size = get_theme_mod("mobile_widget_title_size", 22);
$widget_title_font_weight = get_theme_mod("widget_title_font_weight", 600);
$widget_title_gap = get_theme_mod("widget_title_gap", 15);
$widget_title_wrap = get_theme_mod("widget_title_wrap", "pre");
$widget_title_offset_bottom = get_theme_mod("widget_title_offset_bottom", 20);
$widget_title_line_height = get_theme_mod("widget_title_line_height", 2);
$widget_title_line_roundness = get_theme_mod("widget_title_line_roundness", 0);
$widget_title_line_bg = get_theme_mod("widget_title_line_bg", "#8a8a8a");
$widget_latest_post_offset_bottom = get_theme_mod("widget_latest_post_offset_bottom", 25);
$widget_post_view_lists_offsety = get_theme_mod("widget_post_view_lists_offsety", 20);

// General Styles
$post_tags_offsetx = get_theme_mod("post_tags_offsetx", 10);
$post_tags_line_height = get_theme_mod("post_tags_line_height", 16);
$post_tags_divider_width = get_theme_mod("post_tags_divider_width", 1);
$post_tags_divider_color = get_theme_mod("post_tags_divider_color", "#2D93AD");
$archive_main_section_offset_bottom = get_theme_mod("archive_main_section_offset_bottom", 30);
$desktop_single_post_title_size = get_theme_mod("desktop_single_post_title_size", 30);
$mobile_single_post_title_size = get_theme_mod("mobile_single_post_title_size", 22);
$single_posts_title_color = get_theme_mod("single_posts_title_color", "#2D93AD");
$post_meta_offsetx = get_theme_mod("post_meta_offsetx", 10);
$text_404_size = get_theme_mod("text_404_size", 100);
$text_404_color = get_theme_mod("text_404_color", "#2D93AD");
$post_password_label_size = get_theme_mod("post_password_label_size", 0);
$internet_alert_font_family = get_theme_mod("internet_alert_font_family", "'Jost', sans-serif");

// Home Settings
$main_grid_gap = get_theme_mod("main_grid_gap", 4);
$desktop_main_grid_column = get_theme_mod("desktop_main_grid_column", "calc(65% - 4px) 35%");
$mobile_main_grid_column = get_theme_mod("mobile_main_grid_column", "1fr");
$desktop_main_posts_height = get_theme_mod("desktop_main_posts_height", 275);
$mobile_main_posts_height = get_theme_mod("mobile_main_posts_height", 300);
$dekstop_posts_column = get_theme_mod("dekstop_posts_column", 3);
$tablet_posts_column = get_theme_mod("tablet_posts_column", 2);
$dekstop_huge_posts_column = get_theme_mod("dekstop_huge_posts_column", 3);
$tablet_huge_posts_column = get_theme_mod("tablet_huge_posts_column", 2);
$mobile_posts_column = get_theme_mod("mobile_posts_column", "1fr");
$posts_grid_gap = get_theme_mod("posts_grid_gap", 25);
$post_default_img_height = get_theme_mod("post_default_img_height", 240);
$overlay_post_max_height = get_theme_mod("overlay_post_max_height", 550);
$post_grid_layout_img_height = get_theme_mod("post_grid_layout_img_height", 260);
$category_link_size = get_theme_mod("category_link_size", 14);
$category_link_thickness = get_theme_mod("category_link_thickness", 500);
$category_link_color = get_theme_mod("category_link_color", "#2D93AD");
$badge_bg_color = get_theme_mod("badge_bg_color", "#2D93AD");
$badge_text_color = get_theme_mod("badge_text_color", "#ffffff");
$badge_inner_offsetx = get_theme_mod("badge_inner_offsetx", 8);
$badge_inner_offsety = get_theme_mod("badge_inner_offsety", 2);
$posts_container_width = get_theme_mod("posts_container_width", 70);
$posts_container_offset_right = get_theme_mod("posts_container_offset_right", 50);
$posts_sidebar_container_width = get_theme_mod("posts_sidebar_container_width", 30);

// Author
$author_banner_height = get_theme_mod("author_banner_height", 290);
$author_wrapper_offset_top = get_theme_mod("author_wrapper_offset_top", 100);
$author_wrapper_offset_bottom = get_theme_mod("author_wrapper_offset_bottom", 20);
$author_wrapper_bg = get_theme_mod("author_wrapper_bg", "#ffffff");
$author_wrapper_roundness = get_theme_mod("author_wrapper_roundness", 40);
$desktop_author_wrapper_inner_offset = get_theme_mod("desktop_author_wrapper_inner_offset", 30);
$mobile_author_wrapper_inner_offset = get_theme_mod("mobile_author_wrapper_inner_offset", 20);
$desktop_author_wrapper_gap = get_theme_mod("desktop_author_wrapper_gap", 50);
$mobile_author_wrapper_gap = get_theme_mod("mobile_author_wrapper_gap", 25);
$author_avatar_size = get_theme_mod("author_avatar_size", 170);
$author_avatar_roundness = get_theme_mod("author_avatar_roundness", 50);
$author_avatar_outline_width = get_theme_mod("author_avatar_outline_width", 5);
$author_avatar_outline_color = get_theme_mod("author_avatar_outline_color", "#2D93AD");
$author_avatar_fill_style = get_theme_mod("author_avatar_fill_style", "cover");
$author_avatar_position = get_theme_mod("author_avatar_position", "center");
$author_name_size = get_theme_mod("author_name_size", 35);
$author_icons_size = get_theme_mod("author_icons_size", 25);
$author_icons_color = get_theme_mod("author_icons_color", "#8a8a8a");
$share_button_size = get_theme_mod("share_button_size", 50);
$share_button_bg = get_theme_mod("share_button_bg", "#f7f7f7");
$share_button_color = get_theme_mod("share_button_color", "#242424");
$author_links_style = get_theme_mod("author_links_style", "underline");
$desktop_author_posts_list_img_height = get_theme_mod("desktop_author_posts_list_img_height", 300);

// Footer
$secondary_footer_logo_width = get_theme_mod("secondary_footer_logo_width", 110);
$secondary_footer_logo_height = get_theme_mod("secondary_footer_logo_height", 50);
$secondary_footer_logo_offset_bottom = get_theme_mod("secondary_footer_logo_offset_bottom", 10);
$desktop_secondary_footer_btn_inner_offsety = get_theme_mod("desktop_secondary_footer_btn_inner_offsety", 15);
$mobile_secondary_footer_btn_inner_offsety = get_theme_mod("mobile_secondary_footer_btn_inner_offsety", 10);
$secondary_footer_btn_roundness = get_theme_mod("secondary_footer_btn_roundness", 50);
$secondary_footer_btn_weight = get_theme_mod("secondary_footer_btn_weight", 500);
$secondary_footer_offsety = get_theme_mod("secondary_footer_offsety", 30);
$primary_footer_width = get_theme_mod("primary_footer_width", 1900);
$primary_footer_roundness = get_theme_mod("primary_footer_roundness", 50);
$primary_footer_bg = get_theme_mod("primary_footer_bg", "#f7f7f7");
$primary_footer_offsety = get_theme_mod("primary_footer_offsety", 30);
$email_roundness = get_theme_mod("email_roundness", 50);
$email_bg_color = get_theme_mod("email_bg_color", "#2d93ad");
$email_text_color = get_theme_mod("email_text_color", "#ffffff");
$email_arrow_bg = get_theme_mod("email_arrow_bg", "#242424");
$email_arrow_color = get_theme_mod("email_arrow_color", "#ffffff");
$primary_footer_column_offsetx = get_theme_mod("primary_footer_column_offsetx", 10);
$footer_widget_title_size = get_theme_mod("footer_widget_title_size", 22);
$footer_widget_title_offset_bottom = get_theme_mod("footer_widget_title_offset_bottom", 10);
$footer_widget_title_color = get_theme_mod("footer_widget_title_color", "#242424");
$copyright_bg = get_theme_mod("copyright_bg", "#242424");
$copyright_offsety = get_theme_mod("copyright_offsety", 15);
$copyright_text_size = get_theme_mod("copyright_text_size", 18);
$copyright_font_weight = get_theme_mod("copyright_font_weight", 400);
$copyright_text_color = get_theme_mod("copyright_text_color", "#ffffff");

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<style>
		<?php if ($g_font_url != "") : ?>@import url(<?= $g_font_url ?>);
		<?php endif;
		/* Loading Urdu Fonts */
		if ($g_font_url_urdu != "") : ?>@import url(<?= $g_font_url_urdu ?>);
		<?php endif;
		/* Loading Arabic Fonts */
		if ($g_font_url_arabic != "") : ?>@import url(<?= $g_font_url_arabic ?>);

		<?php endif; ?>:root {
			--primary-color: <?= $primary_color ?>;
			--secondary-color: <?= $secondary_color ?>;
			--white-color: <?= $white_color ?>;
			--dark-color: <?= $dark_color ?>;
			--black-color: <?= $black_color ?>;
			--svg-color: <?= $svg_color ?>;
			--border-color: <?= $border_color ?>;
			--light-color: <?= $light_color ?>;
			--heading-font: <?= $g_heading_font ?>;
			--body-font: <?= $g_body_font ?>;
			--urdu-font: <?= $g_body_urdu ?>;
			--arabic-font: <?= $g_body_arabic ?>;
		}

		::selection {
			background-color: <?= $selection_bg_color ?>;
			color: <?= $selection_color ?>;
		}

		body {
			font-family: <?= $g_body_font ?>;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: <?= $g_heading_font ?>;
			font-weight: <?= $headings_font_weight ?>;
			color: <?= $headings_color ?>;
		}

		html.translated-rtl[lang="ur"] * {
			font-family: <?= $g_body_urdu ?>;
		}

		html.translated-rtl[lang="ar"] * {
			font-family: <?= $g_body_arabic ?>;
		}

		a {
			color: <?= $links_color ?>;
		}

		a:hover,
		a:hover>*,
		a:hover h1,
		a:hover h2,
		a:hover h3,
		a:hover h4,
		a:hover h5,
		a:hover h6 {
			color: <?= $links_hover_color ?>;
		}

		p,
		.customizer-content li {
			font-size: <?= $g_mobile_paragraph ?>px;
			color: <?= $g_paragraph_color ?>;
		}

		img {
			border-radius: <?= $image_roundness ?>px;
		}

		.padding-y {
			padding-top: <?= $mobile_section_inner_offsety ?>px;
			padding-bottom: <?= $mobile_section_inner_offsety ?>px;
		}

		.margin-y {
			margin-top: <?= $mobile_section_outer_offsety ?>px;
			margin-bottom: <?= $mobile_section_outer_offsety ?>px;
		}

		#announcement {
			background-color: <?= $ancmt_bg_color ?>;
			padding-top: <?= $ancmt_offsety ?>px;
			padding-bottom: <?= $ancmt_offsety ?>px;
		}

		#announcement a:not(.gtranslate_wrapper a) {
			color: <?= $ancmt_text_color ?>;
			font-size: <?= $ancmt_text_size ?>px;
			text-decoration: <?= $ancmt_links_style ?>;
		}

		#announcement a:not(.gtranslate_wrapper a):hover {
			--svg-color: var(--primary-color);
			color: <?= $ancmt_links_hover_style ?>;
		}

		.si-wrapper {
			width: 100%;
			max-width: <?= $wrapper_max_width ?>px;
			padding-left: <?= $mobile_wrapper_offsetx ?>px;
			padding-right: <?= $mobile_wrapper_offsetx ?>px;
		}

		#si-header .si-wrapper,
		#announcement .si-wrapper {
			max-width: <?= $header_wrapper_width ?>px;
		}

		.primary-footer .si-wrapper,
		.copyright .si-wrapper {
			max-width: 1900px;
		}

		#si-header {
			background-color: <?= $header_bg_color ?>;
			box-shadow: <?= $header_drop_shadow ?>;
			padding-top: <?= $mobile_header_offsety ?>px;
			padding-bottom: <?= $mobile_header_offsety ?>px;
		}

		.custom-logo {
			max-width: <?= $mobile_logo_width ?>px;
			height: <?= $mobile_logo_height ?>px;
			-o-object-fit: <?= $logo_fill_size ?>;
			object-fit: <?= $logo_fill_size ?>;
			-o-object-position: <?= $logo_position ?>;
			object-position: <?= $logo_position ?>;
		}

		#si-header .si-wrapper-content {
			gap: <?= $mobile_header_content_gap ?>px;
		}

		.si-navbar a {
			display: block;
			font-weight: <?= $header_links_weight ?>;
			font-family: <?= $header_links_font ?>;
			padding-left: <?= $header_links_offsetx ?>px;
			padding-right: <?= $header_links_offsetx ?>px;
		}

		.si-navbar a h3 {
			font-weight: inherit;
		}

		.si-navbar>ul>li>a {
			font-weight: <?= $header_main_links_weight ?>;
			text-transform: <?= $header_main_links_transform ?>;
		}

		.si-navbar .mega-menu {
			background-color: var(--white-color);
			border: <?= $menu_border_width ?>px solid <?= $menu_border_color ?>;
			padding: <?= $mega_menu_padding ?>px;
			width: <?= $mega_menu_width ?>px;
			min-height: <?= $mega_menu_default_height ?>px;
			border-radius: <?= $mega_menu_roundness ?>px;
			left: <?= $mega_menu_offset_left ?>px;
		}

		.has-post-grid .mega-menu {
			min-height: <?= $mega_menu_default_height ?>px;
		}

		.si-navbar .mega-menu-grid {
			padding-left: <?= $mega_menu_grid_offsetx ?>px;
			padding-right: <?= $mega_menu_grid_offsetx ?>px;
			gap: <?= $mega_menu_grid_gap ?>px;
		}

		.si-navbar .mega-menu>ul {
			height: 100%;
			width: <?= $mega_menu_list_width ?>px;
		}

		.si-navbar .mega-menu img {
			width: 100%;
			height: <?= $mega_menu_img_height  ?>px;
			-o-object-fit: <?= $mega_menu_img_size ?>;
			object-fit: <?= $mega_menu_img_size ?>;
		}

		.si-navbar .has-sub-menu .sub-menu {
			background-color: <?= $sub_menu_bg ?>;
			border: <?= $menu_border_width ?>px solid <?= $menu_border_color ?>;
			width: <?= $sub_menu_width ?>px;
		}

		.si-navbar .has-sub-menu .sub-menu .sub-menu {
			left: <?= $sub_menu_width ?>px;
			top: 0;
		}

		.si-navbar .has-sub-menu .sub-menu a {
			padding: <?= $sub_menu_links_offsety ?>px <?= $sub_menu_links_offsetx ?>px;
		}

		.si-navbar .has-sub-menu .sub-menu li+li,
		#sidebar-main-menu li+li {
			border-top: <?= $menu_links_border_width ?>px solid <?= $menu_links_border_color ?>;
		}

		#sidebar-overlay {
			background-color: <?= $sidebar_overlay_color ?>;
		}

		#si-sidebar {
			background-color: <?= $sidebar_bg_color ?>;
			width: <?= $desktop_sidebar_width ?>px;
			transition: .3s;
		}

		#sidebar-content {
			padding: <?= $sidebar_inner_offset ?>px;
		}

		.sidebar-header {
			display: flex;
			justify-content: <?= $sidebar_logo_align ?>;
			padding-top: <?= $sidebar_logo_offset_top ?>px;
		}

		#sidebar-main-menu {
			padding-top: <?= $sidebar_menu_offset_top ?>px;
			padding-bottom: <?= $sidebar_menu_offset_bottom ?>px;
		}

		#sidebar-main-menu .sub-menu a {
			padding-left: <?= $sub_menu_links_offsetx ?>px;
			padding-right: <?= $sub_menu_links_offsetx ?>px;
		}

		#sidebar-main-menu .sub-menu {
			background-color: var(--light-color);
			padding-left: <?= $sub_menu_offset_left ?>px;
		}

		.close-sidebar {
			background-color: <?= $sidebar_icon_bg ?>;
			width: <?= $sidebar_icon_box_size ?>px;
			height: <?= $sidebar_icon_box_size ?>px;
		}

		.close-sidebar svg {
			width: <?= $sidebar_icon_size ?>px;
		}

		.close-sidebar svg path {
			fill: <?= $sidebar_icon_color ?>;
		}

		/* width */
		#si-sidebar::-webkit-scrollbar {
			width: <?= $sidebar_scroll_width ?>px;
		}

		/* Track */
		#si-sidebar::-webkit-scrollbar-track {
			background: <?= $sidebar_scrollbar_bg ?>;
		}

		/* Handle */
		#si-sidebar::-webkit-scrollbar-thumb {
			background: <?= $sidebar_scrollbar_thumb_color ?>;
			border-radius: <?= $sidebar_scroll_width ?>px;
		}

		/* Handle on hover */
		#si-sidebar::-webkit-scrollbar-thumb:hover {
			background: <?= $sidebar_scrollbar_thumb_hover_color ?>;
		}

		/* Contact Form 7 */
		form>p,
		form>.mailpoet_paragraph:not(.mailpoet_paragraph.last) {
			margin-bottom: <?= $form_fields_space ?>px !important;
		}

		input:not(input[type="radio"], input[type="checkbox"], input[type="submit"]),
		select {
			height: <?= $form_fields_height ?>px;
			padding: <?= $form_fields_offsety ?>px <?= $form_fields_offsetx ?>px !important;
			font-size: <?= $form_fields_text_size ?>px;
			border-radius: <?= $form_fields_roundness ?>px !important;
		}

		textarea {
			padding: <?= $form_fields_offsety ?>px <?= $form_fields_offsetx ?>px !important;
			font-size: <?= $form_fields_text_size ?>px;
			border-radius: <?= $form_textarea_roundness ?>px !important;
			resize: <?= $form_textarea_resize ?>;
		}

		input[type="radio"],
		input[type="checkbox"] {
			width: <?= $checkbox_radio_size ?>px;
			height: <?= $checkbox_radio_size ?>px;
		}

		input[type="submit"],
		form button,
		.universal-btn {
			font-size: <?= $button_text_size ?>px !important;
			padding: <?= $button_offsety ?>px <?= $button_offsetx ?>px !important;
			border-radius: <?= $button_roundness ?> !important;
		}

		/* Newsletter */
		#si-sidebar .newsletter {
			background-color: <?= $sidebar_newsletter_bg ?>;
			padding: <?= $sidebar_newsletter_inner_offset ?>px;
			margin-left: -<?= $sidebar_newsletter_offsetx ?>px;
			margin-right: -<?= $sidebar_newsletter_offsetx ?>px;
			margin-bottom: -<?= $sidebar_newsletter_offset_bottom ?>px;
		}

		.newsletter {
			text-align: <?= $sidebar_newsletter_text_align ?>;
		}

		.newsletter p {
			margin-bottom: <?= $sidebar_newsletter_description_offsety ?>px;
			margin-top: <?= $sidebar_newsletter_description_offsety ?>px;
		}

		.newsletter .mailpoet_paragraph.last {
			display: flex;
			justify-content: <?= $sidebar_newsletter_button_align ?>;
		}

		/* Breadcrumbs */
		.breadcrumbs {
			padding-top: <?= $breadcrumbs_mobile_offsety ?>px;
			padding-bottom: <?= $breadcrumbs_mobile_offsety ?>px;
			color: <?= $breadcrumbs_text_color ?>;
		}

		.breadcrumbs .delimiter {
			display: inline-block;
			color: <?= $delimiter_color ?>;
			padding-left: <?= $delimiter_offsetx ?>px;
			padding-right: <?= $delimiter_offsetx ?>px;
		}

		/* Editor Content Style  */
		.customizer-content {
			margin-top: <?= $editor_content_offsety ?>px;
			margin-bottom: <?= $editor_content_offsety ?>px;
		}

		/** Editor content */
		.customizer-content h1,
		.customizer-content h2,
		.customizer-content h3,
		.customizer-content h4,
		.customizer-content h5,
		.customizer-content h6,
		.customizer-content p {
			margin-bottom: <?= $editor_offset_bottom ?>px;
		}

		.customizer-content a,
		.desc a {
			text-decoration: <?= $editor_links ?>;
		}

		.customizer-content>* {
			margin-bottom: 10px;
		}

		.customizer-content li,
		.desc li {
			list-style: <?= $editor_lists_style ?>;
		}

		.customizer-content li::marker,
		.desc li::marker {
			font-size: <?= $editor_lists_marker_size ?>px;
		}

		.wp-block-separator {
			margin-top: <?= $editor_sparator_offsety ?>px;
			margin-bottom: <?= $editor_sparator_offsety ?>px;
		}

		/* Sub Headers */
		#page-header img {
			max-height: <?= $page_header_height ?>px;
		}

		#page-banner img {
			max-height: <?= $mobile_page_banner_height ?>px;
		}

		.universal-header {
			margin-bottom: <?= $mobile_universal_header_offset_bottom ?>px;
		}

		.title {
			font-size: <?= $mobile_title_size ?>px;
			color: <?= $title_color ?>;
		}

		.universal-header .title {
			color: <?= $universal_title_color ?>;
		}

		.desc {
			font-size: <?= $description_size ?>px;
			margin-top: <?= $description_offset_top ?>px;
		}

		.page-title {
			text-align: <?= $page_title_align ?>;
			padding-top: <?= $page_title_offsety ?>px;
			padding-bottom: <?= $page_title_offsety ?>px;
		}

		.page-title .si-wrapper {
			max-width: <?= $page_title_wrapper_width ?>px;
		}

		.page-title p {
			color: <?= $page_description_color ?>;
			margin-top: <?= $page_description_offset_top ?>px;
		}

		/* Home Page */
		.si-main-grid {
			gap: <?= $main_grid_gap ?>px;
			grid-template-columns: <?= $mobile_main_grid_column ?>;
			grid-template-rows: <?= $mobile_main_posts_height ?>px <?= $mobile_main_posts_height ?>px;
		}

		.posts-grid {
			grid-template-columns: <?= $mobile_posts_column ?>;
			gap: <?= $posts_grid_gap ?>px;
		}

		.post .featured-img img:not(.single .post .featured-img img) {
			height: <?= $post_default_img_height ?>px;
		}

		.overlay-post .featured-img img {
			max-height: <?= $overlay_post_max_height ?>px;
			height: 100%;
		}

		.post-layout-grid .featured-img img {
			height: <?= $post_grid_layout_img_height ?>px !important;
		}

		.post-categories a {
			color: v<?= $category_link_color ?>;
			font-size: <?= $category_link_size ?>px;
			font-weight: <?= $category_link_thickness ?>;
		}

		.badge a {
			background-color: <?= $badge_bg_color ?>;
			color: <?= $badge_text_color ?> !important;
			padding: <?= $badge_inner_offsety ?>px <?= $badge_inner_offsetx ?>px;
		}


		/** Widgets Style */
		.main-post-sidebar {
			font-family: <?= $widget_font_family ?>;
		}

		.sidebar-title {
			font-size: <?= $widget_sidebar_title ?>px;
			margin-bottom: <?= $widget_sidebar_title_offset_bottom ?>px;
		}

		.main-post-sidebar .widget-title,
		.main-post-sidebar .wp-block-heading {
			color: <?= $widget_sidebar_title_color ?>;
			margin-bottom: <?= $mobile_widget_title_size ?>px;
			font-size: <?= $mobile_widget_title_size ?>px;
			font-weight: <?= $widget_title_font_weight ?>;
			gap: <?= $widget_title_gap ?>px;
			white-space: <?= $widget_title_wrap ?>;
		}

		.main-post-sidebar .widget-title:after,
		.main-post-sidebar .wp-block-heading:after {
			height: <?= $widget_title_line_height ?>px;
			border-radius: <?= $widget_title_line_roundness ?>px;
			background-color: <?= $widget_title_line_bg ?>;
		}

		.main-post-sidebar .widget+.widget {
			margin-top: <?= $widgets_offsety ?>px;
		}

		.main-post-sidebar .wp-block-latest-posts,
		.main-post-sidebar .widget_post_views_counter_list_widget {
			padding-bottom: <?= $widget_latest_post_offset_bottom ?>px;
		}

		.widget_post_views_counter_list_widget li+li {
			margin-top: <?= $widget_post_view_lists_offsety ?>px;
		}

		/* Author Page */
		.author-banner-bg {
			height: <?= $author_banner_height ?>px;
		}

		.author-wrapper {
			margin-top: -<?= $author_wrapper_offset_top ?>px;
			margin-bottom: <?= $author_wrapper_offset_bottom ?>px;
			position: relative;
		}

		#author-banner .share {
			height: <?= $share_button_size ?>px;
			width: <?= $share_button_size ?>px;
			background-color: <?= $share_button_bg ?>;
		}

		#author-banner .share svg {
			fill: <?= $share_button_color ?>;
		}

		.author-content {
			background-color: <?= $author_wrapper_bg ?>;
			border-radius: <?= $author_wrapper_roundness ?>px;
			gap: <?= $mobile_author_wrapper_gap ?>px;
			padding: <?= $mobile_author_wrapper_inner_offset ?>px;
		}

		.author-avatar img {
			height: <?= $author_avatar_size ?>px;
			width: <?= $author_avatar_size ?>px;
			border-radius: <?= $author_avatar_roundness . "%" ?>;
			border: <?= $author_avatar_outline_width ?>px solid <?= $author_avatar_outline_color ?>;
			-o-object-fit: <?= $author_avatar_fill_style ?>;
			object-fit: <?= $author_avatar_fill_style ?>;
			-o-object-position: <?= $author_avatar_position ?>;
			object-position: <?= $author_avatar_position ?>;
		}

		.author-name {
			font-size: <?= $author_name_size ?>px;
		}

		.author-social svg,
		.site-social svg {
			width: <?= $author_icons_size ?>px;
			height: <?= $author_icons_size ?>px;
		}

		.author-social .instagram svg,
		.site-social .instagram svg {
			width: calc(<?= $author_icons_size ?>px - 5px);
			height: calc(<?= $author_icons_size ?>px - 5px);
		}

		.author-social path,
		.site-social path {
			fill: <?= $author_icons_color ?>;
		}

		.author>a,
		.post-tags a {
			text-decoration: <?= $author_links_style ?>;
		}

		/** General Pages */
		.post-tags {
			padding-right: <?= $post_tags_offsetx ?>px;
			margin-right: <?= $post_tags_offsetx ?>px;
			line-height: <?= $post_tags_line_height ?>px;
		}

		.archive .main-section {
			margin-bottom: <?= $archive_main_section_offset_bottom ?>px;
		}

		.single-post-title {
			font-size: <?= $mobile_single_post_title_size ?>px;
			color: <?= $single_posts_title_color ?>;
		}

		.single-post .comment-count,
		.single-post .post-views-box {
			margin-left: <?= $post_meta_offsetx ?>px;
		}

		.text-404 {
			font-size: <?= $text_404_size ?>px;
			color: <?= $text_404_color ?>;
		}

		.post-password-form label {
			font-size: <?= $post_password_label_size ?>px;
		}

		#internet-alert {
			font-family: <?= $internet_alert_font_family ?>;
		}

		/** Footer  */
		.secondary-footer {
			padding-top: <?= $secondary_footer_offsety ?>px;
			padding-bottom: <?= $secondary_footer_offsety ?>px;
		}

		.secondary-footer .custom-logo {
			margin-bottom: <?= $secondary_footer_logo_offset_bottom ?>px;
			width: <?= $secondary_footer_logo_width ?>px;
			height: <?= $secondary_footer_logo_height ?>px;
		}

		.newsletter .universal-btn {
			padding-top: <?= $mobile_secondary_footer_btn_inner_offsety ?>px !important;
			padding-bottom: <?= $mobile_secondary_footer_btn_inner_offsety ?>px !important;
			border-radius: <?= $secondary_footer_btn_roundness ?>px !important;
			font-weight: <?= $secondary_footer_btn_weight ?>;
		}

		.primary-footer {
			background-color: <?= $primary_footer_bg ?>;
			padding-top: <?= $primary_footer_offsety ?>px;
			padding-bottom: <?= $primary_footer_offsety ?>px;
			border-radius: <?= $primary_footer_roundness ?>px <?= $primary_footer_roundness ?>px 0 0;
		}

		.primary-footer .si-wrapper-content {
			align-items: start;
		}

		.wrapper-widget {
			padding-left: <?= $primary_footer_column_offsetx ?>px;
			padding-right: <?= $primary_footer_column_offsetx ?>px;
		}

		.widget-title {
			font-size: <?= $footer_widget_title_size ?>px;
			margin-bottom: <?= $footer_widget_title_offset_bottom ?>px;
			color: <?= $footer_widget_title_color ?>;
		}

		.copyright {
			background-color: <?= $copyright_bg ?>;
			padding-top: <?= $copyright_offsety ?>px;
			padding-bottom: <?= $copyright_offsety ?>px;
		}

		.copyright-text {
			font-size: <?= $copyright_text_size ?>px;
			font-weight: <?= $copyright_font_weight ?>;
			color: <?= $copyright_text_color ?>;
		}

		@media screen and (min-width: 425px) {
			.si-search.active input {
				width: <?= $mobile_search_width ?>px !important;
			}
		}

		@media screen and (min-width: 640px) {
			#si-header .si-wrapper-content {
				gap: <?= $desktop_header_content_gap ?>px;
			}

			#si-sidebar {
				width: <?= $mobile_sidebar_width ?>px;
			}

			.breadcrumbs {
				padding-top: <?= $breadcrumbs_dekstop_offsety ?>px;
				padding-bottom: <?= $breadcrumbs_dekstop_offsety ?>px;
			}

			.padding-y {
				padding-top: <?= $tablet_section_inner_offsety ?>px;
				padding-bottom: <?= $tablet_section_inner_offsety ?>px;
			}

			.margin-y {
				margin-top: <?= $desktop_section_outer_offsety ?>px;
				margin-bottom: <?= $desktop_section_outer_offsety ?>px;
			}

			.si-wrapper {
				padding-left: <?= $desktop_wrapper_offsetx ?>px;
				padding-right: <?= $desktop_wrapper_offsetx ?>px;
			}

			.universal-header {
				margin-bottom: <?= $dekstop_universal_header_offset_bottom ?>px;
			}

			#page-banner img {
				max-height: <?= $desktop_page_banner_height ?>px;
			}

			.single-post-title {
				font-size: <?= $desktop_single_post_title_size ?>px;
			}

			.post-layout-grid .posts-grid,
			.posts-grid {
				grid-template-columns: repeat(<?= $tablet_posts_column ?>, 1fr);
			}

			.si-main-grid .overlay-post:first-child {
				grid-row-start: 1;
				grid-row-end: 3;
			}

			.huge-posts-grid .post {
				width: calc(100% / <?= $tablet_huge_posts_column ?> - 14px);
			}

			.title {
				font-size: <?= $desktop_title_size ?>px;
			}

			.post-tags {
				border-right: <?= $post_tags_divider_width ?>px solid <?= $post_tags_divider_color ?>;
			}
		}

		@media screen and (min-width: 768px) {
			p, .customizer-content li {
				font-size: <?= $g_desktop_paragraph ?>px;
			}

			.custom-logo {
				max-width: <?= $dekstop_logo_width ?>px;
				height: <?= $dekstop_logo_height ?>;
			}

			.padding-y {
				padding-top: <?= $desktop_section_inner_offsety ?>px;
				padding-bottom: <?= $desktop_section_inner_offsety ?>px;
			}

			.si-search.active input {
				width: <?= $desktop_search_width ?>px !important;
			}

			.sidebar-posts .featured-img img {
				height: 200px !important;
			}

			.widget-title,
			.main-post-sidebar .widget-title,
			.main-post-sidebar .wp-block-heading {
				font-size: <?= $desktop_widget_title_size ?>px;
			}

			.newsletter .universal-btn {
				padding-top: <?= $desktop_secondary_footer_btn_inner_offsety ?>px !important;
				padding-bottom: <?= $desktop_secondary_footer_btn_inner_offsety ?>px !important;
			}

			.author-content {
				gap: <?= $desktop_author_wrapper_gap ?>px;
				padding: <?= $desktop_author_wrapper_inner_offset ?>px;
			}

			#author-main-section .posts-list img,
			#favourite-posts-list .posts-list img {
				height: <?= $desktop_author_posts_list_img_height ?>px;
			}

			.posts-grid {
				grid-template-columns: repeat(<?= $dekstop_posts_column ?>, 1fr);
			}

			.si-main-grid {
				grid-template-columns: <?= $desktop_main_grid_column ?>;
				grid-template-rows: <?= $desktop_main_posts_height ?>px <?= $desktop_main_posts_height ?>px;
			}

			.huge-posts-grid .post {
				width: calc(100% / <?= $dekstop_huge_posts_column ?> - 14px);
			}
		}

		@media screen and (min-width: 1024px) {
			#si-header {
				padding-top: <?= $desktop_header_offsety ?>px;
				padding-bottom: <?= $desktop_header_offsety ?>px;
			}

			.main-post-container {
				width: calc(<?= $posts_container_width . "%" ?> - <?= $posts_container_offset_right ?>px);
				padding-right: <?= $posts_container_offset_right ?>px;
			}

			.main-post-sidebar {
				width: calc(<?= $posts_sidebar_container_width . "%" ?>);
			}
		}
	</style>
	<?php
	/**
	 * Header Custom Code
	 */
	if (get_field("header_embed_code") != "") {
		esc_html(the_field("header_embed_code"));
	} ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e('Skip to content', 'siblogs');
		?>
	</a>
	<?php get_template_part("template-parts/announcement"); ?>
	<header id="si-header">
		<div class="si-wrapper">
			<div class="si-wrapper-content">
				<div class="toggle-box">
					<button class="toggle-sidebar">
						<?= $bars_icon ?>
					</button>
				</div>
				<div class="site-logo">
					<?php
					if (has_custom_logo()) {
						the_custom_logo();
					}
					?>
				</div>
				<div id="si-header-navbar" <?= $navbar_alignment == "center" ? "class='navbar-center'" : "";
											$navbar_alignment == "right" ? "class='navbar-right'" : "" ?>>
					<nav class="si-navbar">
						<?php
						$menu_name = 'si-main-menu';
						if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) :
							$menu = wp_get_nav_menu_object($locations[$menu_name]);
							if ($menu && !is_wp_error($menu) && $menu_items = wp_get_nav_menu_items($menu->term_id)) :
						?>
								<ul>
									<?php foreach ($menu_items as $menu_item) :
										if ($menu_item->menu_item_parent == 0) : ?>
											<li <?= $menu_item->classes[0] ? "class='" . $menu_item->classes[0] . "'" : "" ?>>
												<a href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a>
												<?php

												if ($menu_item->classes[0] == "has-grid-menu") : ?>
													<div class="mega-menu">
														<ul class="mega-menu-list">
															<?php
															$sub_items = array();
															foreach ($menu_items as $sub_item) :
																if ($sub_item->menu_item_parent == $menu_item->ID) :
																	$sub_items[] = $sub_item;
																endif;
															endforeach;
															if (!empty($sub_items)) : $i = 1;
																foreach ($sub_items as $sub_item) : ?>
																	<li <?php if ($sub_item->classes[0]) : ?> class="<?php echo $sub_item->classes[0];
																														if ($i++ == 1) {
																															echo " active";
																														} ?>" <?php endif; ?>>
																		<a href="<?= $sub_item->url ?>"><?= $sub_item->title ?></a>
																		<?php
																		// Reterieving sub inner items
																		$sub_inner_items = array();
																		foreach ($menu_items as $sub_inner_item) :
																			if ($sub_inner_item->menu_item_parent == $sub_item->ID) :
																				$sub_inner_items[] = $sub_inner_item;
																			endif;
																		endforeach;

																		if (!empty($sub_inner_items)) : ?>
																			<div class="mega-menu-grid">
																				<?php foreach ($sub_inner_items as $sub_inner_item) :
																					if ('post_type' === $sub_inner_item->type) :
																						// Retrieve the post object for this menu item
																						$post_obj = get_post($sub_inner_item->object_id);

																						// Get the post thumbnail URL
																						$thumbnail_url = get_the_post_thumbnail_url($post_obj, 'full');

																						// Get post date
																						$post_date = get_the_date('', $post_obj);
																				?>
																						<div class="mega-menu-item">
																							<a href="<?= $sub_inner_item->url ?>" class="menu-post">
																								<?php if ($thumbnail_url != "") : ?>
																									<div class="featured-img">
																										<img src="<?= $thumbnail_url ?>" alt="<?= $sub_inner_item->title ?>">
																									</div>
																								<?php endif; ?>
																								<div class="details">
																									<h3><?= $sub_inner_item->title ?></h3>
																									<span class="date"><?= $post_date ?></span>
																								</div>
																							</a>
																						</div>
																					<?php else : ?>
																						<a href="<?= $sub_inner_item->url ?>"><?= $sub_inner_item->title ?></a>
																					<?php endif; ?>
																				<?php endforeach; ?>
																			</div>
																		<?php endif; ?>
																	</li>
															<?php endforeach;
															endif; ?>
														</ul>
													</div>
												<?php elseif ($menu_item->classes[0] == "has-post-grid") : ?>
													<?php
													$sub_items = array();
													foreach ($menu_items as $sub_item) :
														if ($sub_item->menu_item_parent == $menu_item->ID) :
															$sub_items[] = $sub_item;
														endif;
													endforeach;
													if (!empty($sub_items)) : ?>
														<div class="mega-menu">
															<div class="mega-menu-grid">
																<?php foreach ($sub_items as $sub_item) :
																	if ('post_type' === $sub_item->type) :
																		// Retrieve the post object for this menu item
																		$post_obj = get_post($sub_item->object_id);

																		// Get the post thumbnail URL
																		$thumbnail_url = get_the_post_thumbnail_url($post_obj, 'full');

																		// Get post date
																		$post_date = get_the_date('', $post_obj);
																?>
																		<div class="mega-menu-item">
																			<a href="<?= $sub_item->url ?>" class="menu-post">
																				<?php if ($thumbnail_url != "") : ?>
																					<div class="featured-img">
																						<img src="<?= $thumbnail_url ?>" alt="<?= $sub_item->title ?>">
																					</div>
																				<?php endif; ?>
																				<div class="details">
																					<h3><?= $sub_item->title ?></h3>
																					<span class="date"><?= $post_date ?></span>
																				</div>
																			</a>
																		</div>
																	<?php else : ?>
																		<a href="<?= $sub_item->url ?>"><?= $sub_item->title ?></a>
																	<?php endif; ?>
																<?php endforeach; ?>
															</div>
														</div>
													<?php endif; ?>
												<?php elseif ($menu_item->classes[0] == "has-sub-menu") : ?>
													<?php
													// Reterieving sub items
													$sub_items = array();
													foreach ($menu_items as $sub_item) :
														if ($sub_item->menu_item_parent == $menu_item->ID) :
															$sub_items[] = $sub_item;
														endif;
													endforeach;

													if (!empty($sub_items)) : ?>
														<ul class="sub-menu">
															<?php foreach ($sub_items as $sub_item) : ?>
																<li <?= $sub_item->classes[0] ? "class='" . $sub_item->classes[0] . "'" : "" ?>>
																	<a href="<?= $sub_item->url ?>"><?= $sub_item->title ?></a>
																	<?php
																	// Reterieving sub inner items
																	$sub_inner_items = array();
																	foreach ($menu_items as $sub_inner_item) :
																		if ($sub_inner_item->menu_item_parent == $sub_item->ID) :
																			$sub_inner_items[] = $sub_inner_item;
																		endif;
																	endforeach;

																	if (!empty($sub_inner_items)) : ?>
																		<ul class="sub-menu">
																			<?php foreach ($sub_inner_items as $sub_inner_item) : ?>
																				<li <?= $sub_inner_item->classes[0] ? "class='" . $sub_inner_item->classes[0] . "'" : "" ?>>
																					<a href="<?= $sub_inner_item->url ?>"><?= $sub_inner_item->title ?></a>
																					<?php
																					// Reterieving sub inner items
																					$sub_inner_sub_items = array();
																					foreach ($menu_items as $sub_inner_sub_item) :
																						if ($sub_inner_sub_item->menu_item_parent == $sub_inner_item->ID) :
																							$sub_inner_sub_items[] = $sub_inner_sub_item;
																						endif;
																					endforeach;

																					if (!empty($sub_inner_sub_items)) : ?>
																						<ul class="sub-menu">
																							<?php foreach ($sub_inner_sub_items as $sub_inner_sub_item) : ?>
																								<li <?= $sub_inner_sub_item->classes[0] ? "class='" . $sub_inner_sub_item->classes[0] . "'" : "" ?>>
																									<a href="<?= $sub_inner_sub_item->url ?>"><?= $sub_inner_sub_item->title ?></a>
																								</li>
																							<?php endforeach; ?>
																						</ul>
																					<?php endif; ?>
																				</li>
																			<?php endforeach; ?>
																		</ul>
																	<?php endif; ?>
																</li>
															<?php endforeach; ?>
														</ul>
													<?php endif; ?>
												<?php else : ?>
													<!-- Sub menu not available -->
												<?php endif; ?>
											</li>
									<?php endif;
									endforeach; ?>
								</ul>
						<?php endif;
						endif; ?>
					</nav>
				</div>
				<div class="si-search">
					<?= get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>
	<main id="content" class="content">
		<?php
		if (!is_front_page()) {
			include_once "template-parts/page-header.php";
			if (is_author()) {
				include_once "template-parts/author-banner.php";
			}
			include_once "template-parts/page-banner.php";

			$breadcsumbs = get_field('breadcrumbs');
			if (is_page()) {
				if (isset($breadcsumbs)) {
					include_once "template-parts/breadcrumbs.php";
				}
			} else {
				include_once "template-parts/breadcrumbs.php";
			}
		}
		?>
		<?php if (!is_front_page() && !is_archive() && !is_singular() && !is_search()) : ?>
			<div class="page-title">
				<div class="si-wrapper">
					<h1 class="title">
						<?php if (is_home()) :
							single_post_title();
						elseif (is_archive()) :
							single_cat_title();
						else :
							the_title();
						endif; ?>
					</h1>
					<?php if (has_excerpt()) : ?>
						<p><?php the_excerpt(); ?></p>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>