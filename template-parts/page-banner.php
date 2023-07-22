<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * The page banner if featured images exists
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

if (get_field('featured_image')) :
    if (has_post_thumbnail()) : ?>
        <div id="page-banner">
            <div class="page-banner-container">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
<?php endif;
endif; ?>