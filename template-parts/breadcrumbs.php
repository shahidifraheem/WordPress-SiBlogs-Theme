<?php

/**
 * The breadcrumbs template part file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

// Check if Yoast SEO is installed and activated.
if (function_exists('yoast_breadcrumb')) :
    yoast_breadcrumb('<nav class="breadcrumbs"><div class="si-wrapper">', '</div></nav>');
else :
?>
    <nav class="breadcrumbs">
        <div class="si-wrapper">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'siblogs'); ?></a>
            <span class="delimiter">&raquo;</span>
            <?php if (is_category()) : ?>
                <span class="delimiter">Category</span>
                <span class="delimiter">&raquo;</span>
                <?php
                // Get the name of the category for the current archive page.
                $category = get_queried_object();
                $category_name = $category->name;
                echo $category_name;
                ?>
                <?php endif;
            if (is_single()) :
                $categories = get_the_category();
                $i = 0;
                if ($categories) :
                    foreach ($categories as $category) :
                        if ($i++ != 0) :
                            echo '<span class="delimiter">&raquo;</span>';
                        endif;
                        printf('<a href="%1$s">%2$s</a>', esc_url(get_category_link($category->term_id)), esc_html($category->name));
                    endforeach; ?>
                    <span class="delimiter">&raquo;</span>
            <?php endif;
            endif; ?>
            <?php if (is_single() || is_page()) : ?>
                <span><?php the_title(); ?></span>
            <?php endif; ?>

            <?php if (is_home()) : ?>
                <span><?php single_post_title(); ?></span>
            <?php endif; ?>

            <?php if (is_author()) : ?>
                <span class="delimiter">Author</span>
                <span class="delimiter">&raquo;</span>
                <span><?php the_author(); ?></span>
            <?php endif; ?>

            <?php if (is_search()) : ?>
                <span class="delimiter">Search</span>
                <span class="delimiter">&raquo;</span>
                <span><?= esc_html(get_search_query()) != "" ? esc_html(get_search_query()) : "?" ?></span>
            <?php endif; ?>

            <?php if (is_404()) : ?>
                <span class="delimiter">Not Found</span>
            <?php endif; ?>
        </div>
    </nav>
<?php endif; ?>