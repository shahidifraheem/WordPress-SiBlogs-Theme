<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
get_header();
get_sidebar();
?>
<div class="not-found padding-y">
	<div class="si-wrapper">
		<div class="si-wrapper-content">
			<div class="text-404">
				404
			</div>
			<div class="content-404">
				<div class="universal-header">
					<h1 class="title">Page Not Found!</h1>
					<div class="desc">
						<p><?php esc_html_e("We're sorry, but we can't find the page you were looking for. It's probably some thing we've done wrong but now we know about it and we'll try to fix it. In the meantime, try one of these options:", 'siblogs'); ?></p>
					</div>
				</div>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
