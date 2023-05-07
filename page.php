<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
get_header();
get_sidebar();

?>
<section class="page-section">
	<div class="site-page">
		<div class="si-wrapper customizer-content">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php
get_footer();
