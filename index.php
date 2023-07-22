<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 9,
    'paged' => $paged,
    'post_status' => 'publish'
);
$query = new WP_Query($args);
?>
<section class="posts-section padding-y">
    <div class="si-wrapper">
        <?php if ($query->have_posts()) : ?>
            <div class="posts-grid">
                <?php
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('template-parts/content');
                endwhile;
                ?>
            </div>
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format' => '?paged=%#%',
                    'current' => max(1, $paged),
                    'total' => $query->max_num_pages,
                    'prev_text' => __('&laquo; Previous'),
                    'next_text' => __('Next &raquo;')
                ));
                ?>
            </div>
        <?php
        else :
            get_template_part('template-parts/content-none');
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>