<?php

/**
 * This will show where if posts not found
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
?>
<section class="no-results">
    <div class="universal-header">
        <?php if (is_search()) : ?>
            <h3 class="page-title title">
                <?php
                printf(
                    esc_html__('Results for "%s"', 'portfolio'),
                    '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
                );
                ?>
            </h3>
        <?php endif; ?>
    </div>
    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <h3 class="title"><?php esc_html_e('Not Found!', 'portfolio'); ?></h3>
            <?php
            printf(
                '<p class="mb-2">' . wp_kses(
                    __('Ready to publish your first post? <div class="universal-btn"><a href="%s">Get started here</a></div>', 'portfolio'),
                    array(
                        'div' => array(
                            'class' => array(),
                        ),
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );
            ?>

        <?php elseif (is_search()) : ?>
            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'portfolio'); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <h3><?php esc_html_e('Not Found!', 'portfolio'); ?></h3>
            <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'portfolio'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>