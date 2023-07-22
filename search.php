<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
get_sidebar();

?>
<section class="search-section padding-y">
	<div class="si-wrapper">
		<div class="universal-header">
			<h1 class="title">
				<?php
				printf(
					esc_html__('Results for "%s"', 'sibogs'),
					'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
				);
				?>
			</h1>
			<p>
				<?php
				printf(
					esc_html(
						_n(
							'We found %d result for your search.',
							'We found %d results for your search.',
							(int) $wp_query->found_posts,
							'sibogs'
						)
					),
					(int) $wp_query->found_posts
				);
				?>
			</p>
		</div>
		<?php if (have_posts()) : ?>
			<div class="posts-grid">
				<?php
				while (have_posts()) : the_post();
					get_template_part('template-parts/content');
				endwhile;
				?>
			</div>
		<?php
		else :
			get_template_part('template-parts/content-none');
		endif; ?>
	</div>
</section>
<?php
get_footer();
