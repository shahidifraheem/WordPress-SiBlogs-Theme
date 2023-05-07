<?php

/**
 * The breadcrumbs template part file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
?>
<nav class="breadcrumbs">
    <div class="si-wrapper">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'siblogs'); ?></a>
        <span class="delimiter">&raquo;</span>
        <?php if (is_category()) : ?>
            <span class="delimiter">Category</span>
            <span class="delimiter">&raquo;</span>
            <?php
            $categories = get_the_category();
            $i = 0;
            if ($categories) :
                foreach ($categories as $category) :
                    if ($i++ == 0) :
                        $sub_category = get_term($category->cat_ID, 'category');
                        if ($sub_category->parent) :
                            //Parent category
                            $parent_category = get_term($sub_category->parent, 'category');
                            $parent_category_name = $parent_category->name;
                            printf('<a href="%1$s">%2$s</a>', esc_url(get_category_link($sub_category->parent)), esc_html($parent_category_name));

                            echo '<span class="delimiter">&raquo;</span>';

                            // Sub category
                            if ($category->name == single_cat_title()) :
                                echo $category->name;
                            endif;
                        else :
                            // Defualt category
                            if ($category->name == single_cat_title()) :
                                echo $category->name;
                            endif;
                        endif;
                    endif;
                endforeach;
            endif;
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