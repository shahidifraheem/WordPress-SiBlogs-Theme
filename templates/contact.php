<?php

/**
 * Template Name: Contact Us
 * 
 * The contact template file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

get_header();
get_sidebar();

// Social Icons
$facebook_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/facebook-circle.svg");
$instagram_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/instagram.svg");
$linkedin_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/linkedin.svg");
$twitter_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/twitter.svg");
?>

<section class="contact-section padding-y">
    <div class="si-wrapper">
        <div class="contact-content">
            <div class="universal-header">
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="desc">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
            <div class="si-wrapper-content padding-y">
                <div class="contact-info">
                    <div class="info-box">
                        <h2 class="info-title">Write for us?</h2>
                        <div class="desc">
                            <p>You can email us a topic that should be on this website. Then, you'll surely receive a notification about your topic.</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <h2 class="info-title">Get in tocuh</h2>
                        <a href="mailto:hello@siblogs.com">hello@siblogs.com</a>
                    </div>
                    <div class="info-box">
                        <h2 class="info-title">Social</h2>
                        <ul class="site-social">
                            <li class="facebook">
                                <a href="">
                                    <?= $facebook_icon ?>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="">
                                    <?= $instagram_icon ?>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="">
                                    <?= $twitter_icon ?>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="">
                                    <?= $linkedin_icon ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contact-form">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();
