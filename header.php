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
$bars_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/bars.svg");
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500&display=swap');

		:root {
			--primary-color: #2D93AD;
			--secondary-color: #8a8a8a;
			--white-color: #ffffff;
			--dark-color: #242424;
			--black-color: #000000;
			--svg-color: #ffffff;
			--border-color: #e2e2e2;
			--light-color: #f7f7f7;
			--heading-font: 'Jost', sans-serif;
			--body-font: 'Rubik', sans-serif;
		}

		::selection {
			background-color: var(--primary-color);
			color: var(--white-color);
		}

		body {
			font-family: var(--body-font);
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: var(--heading-font);
			font-weight: 600;
			color: var(--dark-color);
		}

		a {
			color: var(--dark-color);
		}

		a:hover,
		a:hover>*,
		a:hover h1,
		a:hover h2,
		a:hover h3,
		a:hover h4,
		a:hover h5,
		a:hover h6 {
			color: var(--primary-color);
		}

		p {
			font-size: 16px;
			color: var(--dark-color);
		}

		img {
			border-radius: 5px;
		}

		.padding-y {
			padding-top: 15px;
			padding-bottom: 15px;
		}

		.margin-y {
			margin-top: 15px;
			margin-bottom: 15px;
		}

		#announcement {
			background-color: var(--dark-color);
			padding-top: 10px;
			padding-bottom: 10px;
			position: relative;
		}

		#announcement a:not(.gtranslate_wrapper a) {
			color: var(--white-color);
			font-size: 14px;
			text-decoration: underline;
		}

		#announcement a:not(.gtranslate_wrapper a):hover {
			--svg-color: var(--primary-color);
			color: var(--primary-color);
		}

		.si-wrapper {
			width: 100%;
			max-width: 1300px;
			padding-left: 10px;
			padding-right: 10px;
		}

		#si-header .si-wrapper,
		#announcement .si-wrapper {
			max-width: 1900px;
		}

		.primary-footer .si-wrapper,
		.copyright .si-wrapper {
			max-width: 1900px;
		}

		#si-header {
			background-color: var(--white-color);
			box-shadow: 0 0 20px rgba(0, 0, 0, .05);
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.custom-logo {
			max-width: 150px;
			height: 50px;
			-o-object-fit: contain;
			object-fit: contain;
			-o-object-position: left;
			object-position: left;
		}

		#si-header .si-wrapper-content {
			gap: 20px;
		}

		#si-header-navbar {
			margin-right: auto;
		}

		#si-header-navbar.navbar-center {
			margin-left: auto;
			margin-right: auto;
		}


		#si-header-navbar.navbar-right {
			margin-left: auto;
		}

		.si-navbar a {
			display: block;
			font-weight: 500;
			font-family: var(--heading-font);
			padding-left: 15px;
			padding-right: 15px;
		}

		.si-navbar a h3 {
			font-weight: inherit;
		}

		.si-navbar>ul>li>a {
			font-weight: 600;
			text-transform: uppercase;
		}

		.si-navbar .mega-menu {
			background-color: var(--white-color);
			border: 1px solid var(--border-color);
			padding: 20px;
			width: 1024px;
			min-height: 325px;
			border-radius: 30px;
			left: 115%;
		}

		.has-post-grid .mega-menu {
			min-height: 220px;
		}

		.si-navbar .mega-menu-grid {
			padding-left: 20px;
			padding-right: 20px;
			gap: 12px;
		}

		.si-navbar .mega-menu>ul {
			height: 100%;
			width: 160px;
		}

		.si-navbar .mega-menu img {
			width: 100%;
			height: 150px;
			-o-object-fit: cover;
			object-fit: cover;
		}

		.si-navbar .has-sub-menu .sub-menu {
			background-color: var(--white-color);
			border: 1px solid var(--border-color);
			width: 250px;
		}

		.si-navbar .has-sub-menu .sub-menu .sub-menu {
			left: 250px;
			top: 0;
		}

		.si-navbar .has-sub-menu .sub-menu a {
			padding: 10px 20px;
		}

		.si-navbar .has-sub-menu .sub-menu li+li,
		#sidebar-main-menu li+li {
			border-top: 1px solid var(--border-color);
		}

		#sidebar-overlay {
			background-color: #00000045;
		}

		#si-sidebar {
			background-color: var(--white-color);
			width: 320px;
			transition: .3s;
		}

		#sidebar-content {
			padding: 25px;
		}

		.sidebar-header {
			display: flex;
			justify-content: center;
			padding-top: 20px;
		}

		#sidebar-main-menu {
			padding-top: 30px;
			padding-bottom: 50px;
		}

		#sidebar-main-menu .sub-menu a {
			padding-left: 15px;
			padding-right: 15px;
		}

		#sidebar-main-menu .sub-menu {
			background-color: var(--light-color);
			padding-left: 10px;
		}

		.close-sidebar {
			background-color: var(--dark-color);
		}

		.close-sidebar svg path {
			fill: var(--white-color);
		}

		/* width */
		#si-sidebar::-webkit-scrollbar {
			width: 5px;
		}

		/* Track */
		#si-sidebar::-webkit-scrollbar-track {
			background: var(--light-color);
		}

		/* Handle */
		#si-sidebar::-webkit-scrollbar-thumb {
			background: var(--primary-color);
			border-radius: 10px;
		}

		/* Handle on hover */
		#si-sidebar::-webkit-scrollbar-thumb:hover {
			background: var(--primary-color);
		}

		/* Contact Form 7 */
		form>p,
		form>.mailpoet_paragraph:not(.mailpoet_paragraph.last) {
			margin-bottom: 15px !important;
		}

		input:not(input[type="radio"], input[type="checkbox"]),
		select {
			height: 45px;
			padding: 8px 14px !important;
			font-size: 16px;
			border-radius: 25px !important;
		}

		textarea {
			padding: 8px 14px !important;
			font-size: 16px;
			border-radius: 20px !important;
			resize: vertical;
		}

		input[type="radio"],
		input[type="checkbox"] {
			width: 20px;
			height: 20px;
		}

		input[type="submit"],
		form button,
		.universal-btn {
			font-size: 16px !important;
			padding: 8px 30px !important;
			border-radius: 0 !important;
		}

		/* Newsletter */
		#si-sidebar .newsletter {
			background-color: var(--light-color);
			padding: 20px;
			margin-left: -20px;
			margin-right: -20px;
			margin-bottom: -20px;
		}

		.newsletter {
			text-align: center;
		}

		.newsletter p {
			margin-bottom: 10px;
			margin-top: 10px;
		}

		.newsletter .mailpoet_paragraph.last {
			display: flex;
			justify-content: center;
		}

		/** Footer  */
		.secondary-footer {
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.secondary-footer .custom-logo {
			margin-bottom: 10px;
		}

		.newsletter .universal-btn {
			padding-top: 10px !important;
			padding-bottom: 10px !important;
			border-radius: 50px !important;
			font-weight: 500;
		}

		.primary-footer {
			background-color: var(--light-color);
			padding-top: 30px;
			padding-bottom: 30px;
			border-radius: 50px 50px 0 0;
		}

		.primary-footer .si-wrapper-content {
			align-items: start;
		}

		.si-main-grid {
			grid-template-columns: 1fr;
			grid-template-rows: 300px 300px;
		}

		.widget-title {
			font-size: 22px;
			margin-bottom: 10px;
			color: var(--dark-color);
		}

		.main-post-sidebar .widget-title,
		.main-post-sidebar .wp-block-heading {
			color: var(--primary-color);
			margin-bottom: 20px;
			font-size: 22px;
			font-weight: 600;
			gap: 15px;
			white-space: pre;
		}

		.main-post-sidebar .widget-title:after,
		.main-post-sidebar .wp-block-heading:after {
			height: 2px;
			border-radius: 0px;
			background-color: var(--secondary-color);
		}

		.main-post-sidebar .widget>.wp-block-heading {
			margin-bottom: 0px;
		}

		.main-post-sidebar .widget+.widget {
			margin-top: 20px;
		}

		.main-post-sidebar .wp-block-latest-posts,
		.main-post-sidebar .widget_post_views_counter_list_widget {
			padding-bottom: calc(20px + 5px);
		}

		.wrapper-widget {
			padding-left: 10px;
			padding-right: 10px;
		}

		.customizer-content {
			margin-top: 10px;
			margin-bottom: 10px;
		}

		/** Editor content */
		.customizer-content h1,
		.customizer-content h2,
		.customizer-content h3,
		.customizer-content h4,
		.customizer-content h5,
		.customizer-content h6,
		.customizer-content p {
			margin-bottom: 10px;
		}

		.customizer-content a,
		.desc a {
			text-decoration: underline;
		}

		.customizer-content>* {
			margin-bottom: 10px;
		}

		.customizer-content li,
		.desc li {
			list-style: disc;
		}

		.customizer-content li::marker,
		.desc li::marker {
			font-size: 20px;
		}

		.posts-grid {
			display: grid;
			grid-template-columns: 1fr;
			gap: 25px;
		}

		.universal-header {
			margin-bottom: 10px;
		}

		.title {
			font-size: 30px;
			color: var(--dark-color);
		}

		.universal-header .title {
			color: var(--primary-color);
		}

		.desc {
			font-size: 16px;
			margin-top: 10px;
		}

		.sidebar-title {
			font-size: 30px;
			margin-bottom: 30px;
		}

		.page-title {
			text-align: center;
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.page-title .si-wrapper {
			max-width: 800px;
		}

		.page-title p {
			color: var(--secondary-color);
			margin-top: 20px;
		}

		.breadcrumbs {
			padding-top: 10px;
			padding-bottom: 10px;
			color: var(--primary-color);
		}

		.breadcrumbs .delimiter {
			color: var(--secondary-color);
			display: inline-block;
			padding-left: 5px;
			padding-right: 5px;
		}

		.post .featured-img img:not(.single .post .featured-img img) {
			height: 240px;
		}

		.overlay-post .featured-img {
			height: 100%;
		}

		.overlay-post .featured-img img {
			max-height: 550px;
			height: 100%;
		}

		.post-layout-grid .featured-img img {
			height: 260px !important;
		}

		.huge-posts-grid .post {
			width: 100%;
		}

		.post-categories a {
			color: var(--primary-color);
			font-size: 14px;
			font-weight: 500;
		}

		.badge a {
			background-color: var(--primary-color);
			color: var(--white-color) !important;
			padding: 2px 8px;
		}

		.main-post-sidebar {
			font-family: var(--heading-font);
		}

		.widget_post_views_counter_list_widget li+li {
			margin-top: 20px;
		}

		.single-post-title {
			font-size: 22px;
			color: var(--primary-color);
		}

		.single-post .comment-count,
		.single-post .post-views-box {
			margin-left: 10px;
		}

		.author-banner-bg {
			height: 290px;
		}

		.author-wrapper {
			margin-top: -100px;
			margin-bottom: 20px;
			position: relative;
		}

		#author-banner .share {
			height: 50px;
			width: 50px;
			background-color: var(--light-color);
		}

		.author-content {
			background-color: var(--white-color);
			border-radius: 40px;
		}

		.author-avatar img {
			height: 170px;
			width: 170px;
			border-radius: 50%;
			border: 5px solid var(--primary-color);
			-o-object-fit: contain;
			object-fit: contain;
			-o-object-position: center;
			object-position: center;
		}

		.author-name {
			font-size: 35px;
		}

		.author-social svg,
		.site-socialsvg {
			width: 25px;
			height: 25px;
		}

		.author-social .instagram svg,
		.site-social .instagram svg {
			width: calc(25px - 3px);
			height: calc(25px - 3px);
		}

		.author-social path,
		.site-social path {
			fill: var(--secondary-color);
		}

		.author>a,
		.post-tags a {
			text-decoration: underline;
		}

		.post-tags {
			border-right: 1px solid var(--primary-color);
			padding-right: 10px;
			margin-right: 10px;
			line-height: 16px;
		}

		#page-header img {
			max-height: 250px;
		}

		#page-banner img {
			max-height: 300px;
		}

		.archive .main-section {
			margin-bottom: 30px;
		}

		.text-404 {
			font-size: 100px;
			color: var(--primary-color);
		}

		.post-password-form label {
			font-size: 0px;
		}

		.copyright {
			background-color: var(--dark-color);
			padding-top: 15px;
			padding-bottom: 15px;
		}

		.copyright-text {
			font-size: 18px;
			font-weight: 400;
			color: var(--white-color);
		}

		.wp-block-separator {
			margin-top: 20px;
			margin-bottom: 20px;
		}

		#internet-alert {
			font-family: var(--heading-font);
		}

		html.translated-ltr {
			text-align: start;
		}

		html.translated-rtl, html.translated-rtl .contact-widget {
			text-align: end;
		}

		@media screen and (min-width: 640px) {
			.custom-logo {
				max-width: 110px;
			}

			#si-header .si-wrapper-content {
				gap: 40px;
			}

			#si-sidebar {
				width: 375px;
			}

			.breadcrumbs {
				padding-top: 20px;
				padding-bottom: 20px;
			}

			.padding-y {
				padding-top: 30px;
				padding-bottom: 30px;
			}

			.margin-y {
				margin-top: 30px;
				margin-bottom: 30px;
			}

			.si-wrapper {
				padding-left: 20px;
				padding-right: 20px;
			}

			.universal-header {
				margin-bottom: 20px;
			}

			#page-banner img {
				max-height: 500px;
			}

			.single-post-title {
				font-size: 30px;
			}

			.post-layout-grid .posts-grid,
			.posts-grid {
				grid-template-columns: 1fr 1fr;
			}

			.si-main-grid {
				grid-template-columns: 1fr 1fr;
			}

			.si-main-grid .overlay-post:first-child {
				grid-row-start: 1;
				grid-row-end: 3;
			}

			.huge-posts-grid .post {
				width: calc(100% / 2 - 14px);
			}

			.title {
				font-size: 40px;
			}
		}

		@media screen and (min-width: 768px) {
			p {
				font-size: 18px;
			}

			.custom-logo {
				max-width: 110px;
			}

			.padding-y {
				padding-top: 50px;
				padding-bottom: 50px;
			}

			.sidebar-posts .featured-img img {
				height: 200px !important;
			}

			.widget-title,
			.main-post-sidebar .widget-title,
			.main-post-sidebar .wp-block-heading {
				font-size: 25px;
			}

			.newsletter .universal-btn {
				padding-top: 15px !important;
				padding-bottom: 15px !important;
			}

			.author-content {
				gap: 50px;
				padding: 30px;
			}

			#author-main-section .posts-list img,
			#favourite-posts-list .posts-list img {
				height: 300px;
			}

			.posts-grid {
				grid-template-columns: 1fr 1fr 1fr;
			}

			.si-main-grid {
				grid-template-columns: calc(65% - 4px) 35%;
				grid-template-rows: 275px 275px;
			}

			.huge-posts-grid .post {
				width: calc(100% / 3 - 14px);
			}
		}

		@media screen and (min-width: 1024px) {
			#si-header {
				padding-top: 0px;
				padding-bottom: 0px;
			}

			.main-post-container {
				width: calc(70% - 50px);
				padding-right: 50px;
			}

			.main-post-sidebar {
				width: calc(30%);
			}
		}

		@media screen and (min-width: 1440px) {
			.wrapper-widget {
				width: calc(100% / 5);
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
				<div id="si-header-navbar">
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
																						$thumbnail_url = get_the_post_thumbnail_url($post_obj, 'thumbnail');

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
																		$thumbnail_url = get_the_post_thumbnail_url($post_obj, 'thumbnail');

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