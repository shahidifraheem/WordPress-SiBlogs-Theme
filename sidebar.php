<?php

/**
 * The template for displaying the sidebar
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
$close = file_get_contents(get_template_directory_uri() . "/assets/icons/close.svg");
$sidebar_newsletter_title = get_theme_mod("sidebar_newsletter_title", "Newsletter");
$sidebar_newsletter_description = get_theme_mod("sidebar_newsletter_description", "Inbio is a personal siblogs template. You can customize all.'");

?>
<div id="sidebar-overlay"></div>
<aside id="si-sidebar">
    <div id="sidebar-content">
        <button class="close-sidebar"><?= $close ?></button>
        <div class="sidebar-header">
            <div class="site-logo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                }
                ?>
            </div>
        </div>
        <nav class="sidebar-nav">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'si-main-menu',
                    'menu_class' => 'sidebar-menu',
                    'container' => false,
                    'menu_id' => 'sidebar-main-menu',
                )
            ); ?>
        </nav>
        <div class="newsletter">
            <?php if ($sidebar_newsletter_title != "") : ?>
                <h3><?= $sidebar_newsletter_title ?></h3>
            <?php endif;
            if ($sidebar_newsletter_description != "") : ?>
                <p><?= $sidebar_newsletter_description ?></p>
            <?php endif; ?>
            <?= do_shortcode('[mailpoet_form id="1"]') ?>
        </div>
    </div>
</aside>