<?php

/**
 * The announcement template part file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

$facebook = file_get_contents(get_template_directory_uri() . "/assets/icons/facebook.svg");
$instagram = file_get_contents(get_template_directory_uri() . "/assets/icons/instagram.svg");
$linkedin = file_get_contents(get_template_directory_uri() . "/assets/icons/linkedin.svg");
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
            ?>
            <div class="social-icons">
                <ul class="icons-list">
                    <li class="facebook">
                        <a href="#">
                            <?= $facebook ?>
                        </a>
                    </li>
                    <li class="instagram">
                        <a href="#">
                            <?= $instagram ?>
                        </a>
                    </li>
                    <li class="linkedin">
                        <a href="#">
                            <?= $linkedin ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>