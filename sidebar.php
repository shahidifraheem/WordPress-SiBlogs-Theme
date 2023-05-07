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
            <h3>Newsletter</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, repellat.</p>
            <?= do_shortcode('[mailpoet_form id="1"]') ?>
        </div>
    </div>
</aside>