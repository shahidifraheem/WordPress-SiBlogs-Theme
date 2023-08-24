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

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
get_sidebar();

// User info
$user_info = get_userdata(get_post_field('post_author', get_the_ID()));

// Icon
$wishlist_icon = file_get_contents(get_theme_mod("icons_path_url") . "wishlist.svg");

// Get the current post ID
$post_id = get_the_ID();
// Get the category ID of the current post
$category_id = get_the_category($post_id)[0]->cat_ID;

$args = array(
    'post__not_in' => array($post_id),
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'cat' => $category_id
);
$related_posts = new WP_Query($args);
?>
<section id="single-main-section">
    <div class="si-wrapper padding-y">
        <?php if (!isset($_GET['mailpoet_page'])) : ?>
            <div class="post-content_header">
                <div class="badge">
                    <?php the_category(); ?>
                </div>
                <button id="favourite-btn" data-id="<?= get_the_ID(); ?>">
                    <a href="<?php the_permalink("215"); ?>">View all favourite</a>
                    <?= $wishlist_icon ?>
                </button>
            </div>
        <?php endif; ?>
        <h1 class="post-title single-post-title"><?php the_title(); ?></h1>
        <?php if (!isset($_GET['mailpoet_page'])) : ?>
            <div class="post-content_footer">
                <?php if (has_tag()) : ?>
                    <div class="post-tags">
                        <?php the_tags(); ?>
                    </div>
                <?php endif; ?>
                <span class="author">By:
                    <a href="<?= site_url() . "/author/" . $user_info->user_nicename; ?>">
                        <?= $user_info->display_name ?>
                    </a>
                </span>
                <span class="symbol">&#9866;</span>
                <span class="date"><?= get_the_date(); ?></span>
                <?php if (get_comments_number() != 0) : ?>
                    <div class="comment-count">
                        <svg fill="var(--primary-color)" width="15px" height="15px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <title>comment</title>
                            <path d="M16.5 1.853c-8.133 0-14.75 5.663-14.75 12.624 0.045 2.863 1.132 5.465 2.896 7.45l-0.010-0.012c-0.608 2.418-1.844 4.491-3.525 6.104l-0.004 0.004c-0.22 0.225-0.355 0.534-0.355 0.873 0 0.691 0.56 1.252 1.252 1.252 0.089 0 0.175-0.009 0.259-0.027l-0.008 0.001c3.458-0.576 6.524-1.93 9.121-3.877l-0.054 0.039c1.547 0.517 3.328 0.816 5.179 0.817h0c8.133 0 14.75-5.664 14.75-12.625s-6.617-12.624-14.75-12.624zM16.5 24.602c-0.015 0-0.034 0-0.052 0-1.77 0-3.465-0.321-5.030-0.908l0.099 0.032c-0.045-0.011-0.1-0.020-0.155-0.025l-0.005-0c-0.085-0.025-0.182-0.041-0.283-0.045l-0.002-0c-0.074 0.005-0.142 0.016-0.207 0.033l0.008-0.002c-0.1 0.013-0.19 0.035-0.275 0.068l0.008-0.003c-0.079 0.039-0.146 0.081-0.209 0.129l0.003-0.002c-0.064 0.033-0.118 0.067-0.169 0.105l0.003-0.002c-1.371 1.186-3 2.115-4.789 2.69l-0.098 0.027c0.896-1.391 1.555-3.025 1.872-4.778l0.012-0.082c0.005-0.031-0.005-0.060-0.002-0.092 0.002-0.028 0.003-0.060 0.003-0.093 0-0.311-0.107-0.597-0.286-0.824l0.002 0.003c-0.019-0.023-0.025-0.051-0.046-0.073-1.617-1.608-2.626-3.826-2.652-6.28l-0-0.005c0-5.582 5.495-10.124 12.25-10.124s12.25 4.542 12.25 10.124-5.496 10.125-12.25 10.125z"></path>
                        </svg>
                        <span><?= get_comments_number(); ?></span>
                    </div>
                <?php endif; ?>
                <?php if (get_theme_mod('show_post_views') || is_user_logged_in() && current_user_can('administrator')) : ?>
                    <div class="post-views-box">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z" fill="var(--primary-color)" />
                        </svg>
                        <?= post_views_by_id(get_the_ID()); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (has_excerpt()) : ?>
            <div class="post-axcerpt">
                <?php the_excerpt(); ?>
            </div>
        <?php endif; ?>
        <div id="main-container">
            <div class="main-post-container">
                <div class="featured-img">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                </div>
                <div class="customizer-content">
                    <?php the_content(); ?>
                </div>
                <div class="single-comment-form padding-y">
                    <?php
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                    ?>
                </div>
            </div>
            <?php if (is_active_sidebar('sidebar')) : ?>
                <div class="main-post-sidebar">
                    <?php
                    ob_start();
                    dynamic_sidebar('sidebar');
                    $sidebar = ob_get_clean();
                    echo $sidebar;
                    ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($related_posts->have_posts()) : ?>
            <div id="related-posts padding-y">
                <div class="universal-header">
                    <h1 class="title">Related Posts</h1>
                </div>
                <div class="posts-grid">
                    <?php
                    while ($related_posts->have_posts()) : $related_posts->the_post();
                        get_template_part('template-parts/content');
                    endwhile;
                    ?>
                </div>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>

<?php
get_footer();
