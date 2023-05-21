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

$contact = get_field("contact_info");
if (isset($contact) || !empty($contact)) :
?>
    <section class="contact-section padding-y">
        <div class="si-wrapper">
            <div class="contact-content">
                <div class="universal-header">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <?php if (has_excerpt()) : ?>
                        <div class="desc">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="si-wrapper-content padding-y">
                    <div class="contact-info">
                        <div class="info-box">
                            <?php if ($contact["info_title"] != "") : ?>
                                <h2 class="info-title"><?= $contact["info_title"] ?></h2>
                            <?php endif;
                            if ($contact["description"] != "") : ?>
                                <div class="desc">
                                    <p><?= $contact["description"] ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="info-box">
                            <?php if ($contact["email_title"] != "") : ?>
                                <h2 class="info-title"><?= $contact["email_title"] ?></h2>
                            <?php endif;
                            if ($contact["email"] != "") : ?>
                                <a href="mailto:<?= $contact["email"] ?>"><?= $contact["email"] ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="info-box">
                            <?php if ($contact["social_title"] != "") : ?>
                                <h2 class="info-title"><?= $contact["social_title"] ?></h2>
                            <?php endif; ?>
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
<?php endif;
get_footer();
