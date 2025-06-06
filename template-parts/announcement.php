<?php

/**
 * The announcement template part file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if (defined('ICONS_PATH')) {
    $facebook = file_get_contents(ICONS_PATH . "facebook.svg");
    $instagram = file_get_contents(ICONS_PATH . "instagram.svg");
    $linkedin = file_get_contents(ICONS_PATH . "linkedin.svg");
}
$facebook_url = get_theme_mod('facebook', "#");
$instagram_url = get_theme_mod('instagram', "#");
$linkedin_url = get_theme_mod('linkedin', "#");
$show_social_icons = get_theme_mod('show_social_icons', true);
?>
<div id="announcement">
    <div class="si-wrapper">
        <div class="si-wrapper-content">
            <div class="top-links">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'si-secondary-menu',
                        'container' => false,
                        'container_class' => 'top-links',
                        'container_id' => 'top-menu',
                        'menu_class' => 'nav-menu',
                        'menu_id' => 'si-secondary-menu',
                    )
                ); ?>
            </div>
            <?php
            echo do_shortcode("[gtranslate]");
            if ($show_social_icons) : ?>
                <div class="social-icons">
                    <ul class="icons-list">
                        <?php if ($facebook_url != "") : ?>
                            <li class="facebook">
                                <a href="<?= $facebook_url ?>">
                                    <?= $facebook ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($instagram_url != "") : ?>
                            <li class="instagram">
                                <a href="<?= $instagram_url ?>">
                                    <?= $instagram ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($linkedin_url != "") : ?>
                            <li class="linkedin">
                                <a href="<?= $linkedin_url ?>">
                                    <?= $linkedin ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>