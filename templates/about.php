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
                    <div class="desc">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="main-img">
                <img src="http://localhost/si-blogs/wp-content/uploads/2023/05/about-hero-right.webp" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-section padding-y">
    <div class="si-wrapper">
        <div class="universal-header">
            <h2 class="title">Fast Facts</h2>
            <div class="desc">
                <p>We're impartial and independent, and every day we create distinctive, world-class programmes and content</p>
            </div>
        </div>
        <div class="cards-grid">
            <div class="card">
                <h3 class="normal-title">10 million</h3>
                <p>Articles have been public around the world (as of Sept. 30, 2021)</p>
            </div>
            <div class="card">
                <h3 class="normal-title">1000,00</h3>
                <p>Articles have been public around the world (as of Sept. 30, 2021)</p>
            </div>
            <div class="card">
                <h3 class="normal-title">225+</h3>
                <p>Articles have been public around the world (as of Sept. 30, 2021)</p>
            </div>
        </div>
    </div>
</section>
<section class="newsletter-section padding-y">
    <div class="si-wrapper">
        <div class="si-wrapper-content">
            <div class="newsletter-content">
                <h2 class="title">Join our newsletter</h2>
                <div class="desc">
                    <p>Read and share new perspectives on just about any topic. Everyone's welcome</p>
                </div>
                <?= do_shortcode('[mailpoet_form id="1"]') ?>
            </div>
            <div class="newsletter-img">
                <img src="http://localhost/si-blogs/wp-content/uploads/2023/05/SVG-subcrib.webp" alt="">
            </div>
        </div>
    </div>
</section>

<?php get_footer();
