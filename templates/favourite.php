<?php

/**
 * Template Name: Favourite
 * 
 * The favourite template file for favorite posts
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

get_header();
get_sidebar();
?>
<div class="universal-header padding-y">
    <div class="si-wrapper">
        <div class="universal-header">
            <h1 class="title"><?php the_title(); ?></h1>
            <div class="dec">
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
        <div id="favourite-posts-list">
            <div class="posts-list">
                <?php
                if (!empty($_COOKIE)) :
                    foreach ($_COOKIE as $post_key => $post_id) :
                        if (str_contains($post_key, "fav_post_")) :
                            // Retrieve the post object by id
                            $post = get_post($post_id); ?>
                            <div class="post post-<?= get_the_ID(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="featured-img">
                                        <a href="<?= the_permalink(); ?>">
                                            <?php
                                            the_post_thumbnail();
                                            ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="post-content">
                                    <div class="post-content_header">
                                        <?php the_category(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>">
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                    </a>
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="post-content_footer">
                                        <span class="author">By:
                                            <a href="<?= get_author_posts_url(get_the_ID()) . get_the_author_meta('user_nicename', get_post_field('post_author', get_the_ID())) ?>">
                                                <?php the_author(); ?>
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
                                    </div>
                                </div>
                            </div>
                <?php endif;
                    endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</div>
<section class="page-section">
    <div class="page-content">
        <div class="si-wrapper customizer-content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer();
