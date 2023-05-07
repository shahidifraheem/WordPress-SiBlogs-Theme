<?php

/**
 * Template Name: About Us
 * 
 * The about template file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

get_header();
get_sidebar(); ?>

<section class="main-section padding-y">
    <div class="si-wrapper">
        <div class="si-wrapper-content">
            <div class="main-content">
                <h1 class="title"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p><?php the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
            <div class="main-img">
                <img src="http://localhost/si-blogs/wp-content/uploads/2023/05/about-hero-right.webp" alt="">
            </div>
        </div>
    </div>
</section>
<?php get_footer();
