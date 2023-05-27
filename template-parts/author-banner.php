<?php

/**
 * The author info banner template part file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

$obj = get_queried_object();
// Get the user ID
$author_id = get_the_author_meta('ID');

// Default Info
$author_bio = get_the_author_meta('description');
$author_email = get_the_author_meta('user_email');
$author_website = get_the_author_meta('user_url');
$author_registration = get_the_author_meta('user_registered');

// Get the social media links using Yoast SEO user meta keys
$facebook_url = get_the_author_meta('facebook');
$instagram_url = get_the_author_meta('instagram');
$linkedin_url = get_the_author_meta('linkedin');
$twitter_url = get_the_author_meta('twitter');
$myspace_url = get_the_author_meta('myspace');
$pinterest_url = get_the_author_meta('pinterest');
$soundcloud_url = get_the_author_meta('soundcloud');
$youtube_url = get_the_author_meta('youtube');
$wikipedia_url = get_the_author_meta('wikipedia');
$mastodon_url = get_the_author_meta('mastodon');

// Get Current Author role
$author_role = $obj->roles[0];

// Custom Info
$author_info = get_field('author_info', $obj);

// Social Icons
$facebook_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/facebook-circle.svg");
$instagram_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/instagram.svg");
$linkedin_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/linkedin.svg");
$twitter_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/twitter.svg");
$myspace_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/myspace.svg");
$pinterest_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/pinterest.svg");
$soundcloud_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/soundcloud.svg");
$youtube_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/youtube.svg");
$wikipedia_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/wikipedia.svg");
$mastodon_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/mastodon.svg");
$mail_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/mail.svg");
$internet_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/internet.svg");
$share_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/share.svg");
$date_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/date.svg");
$badge_admin = file_get_contents(get_template_directory_uri() . "/assets/icons/badge-admin.svg");
$badge_editor = file_get_contents(get_template_directory_uri() . "/assets/icons/badge-editor.svg");
$badge_author = file_get_contents(get_template_directory_uri() . "/assets/icons/badge-author.svg");
$badge_contributor = file_get_contents(get_template_directory_uri() . "/assets/icons/badge-contributor.svg");


if (isset($author_info)) :
?>
    <style>
        .author-banner-bg {
            <?php if ($author_info['cover'] != "") : ?>background-image: url('<?= $author_info['cover']; ?>');
            <?php else : ?>background-color: <?= $author_info['cover_background']; ?>;
            <?php endif; ?>
        }
    </style>
    <div id="author-banner">
        <div class="author-banner-bg"></div>
        <div class="si-wrapper author-wrapper">
            <button class="share" title="Share link to anywhere" data-url="<?php the_permalink(); ?>" data-title="<?php the_author(); ?>" <?= isset($author_bio) ? "data-description='" . $author_bio . "'" : "" ?>>
                <?= $share_icon ?>
            </button>
            <div class="author-content">
                <div class="author-avatar">
                    <?php if (!empty($author_info['avatar'])) : ?>
                        <img src="<?= $author_info['avatar']['url'] ?>" alt="<?= $author_info['avatar']['alt'] ?>">
                    <?php else : ?>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/avatar.png" alt="User Avatar" width="100px">
                    <?php endif; ?>
                </div>
                <div class="author-detail">
                    <div class="author-detail-header">
                        <h1 class="author-name"><?php the_author(); ?></h1>
                        <?php if ($author_role === "administrator") : ?>
                            <div class="verify-badge" title="Verified Administrator">
                                <?= $badge_admin ?>
                            </div>
                        <?php elseif ($author_role === "editor" || $author_role === "wpseo_editor") : ?>
                            <div class="verify-badge" title="<?= $author_role === "wpseo_editor" ? "Verified SEO Editor" : "Verified Editor" ?>">
                                <?= $badge_editor ?>
                            </div>
                        <?php elseif ($author_role === "author" || $author_role === "wpseo_manager") : ?>
                            <div class="verify-badge" title="<?= $author_role === "wpseo_manager" ? "Verified SEO Manager" : "Verified Author" ?>">
                                <?= $badge_author ?>
                            </div>
                        <?php elseif ($author_role === "contributor") : ?>
                            <div class="verify-badge" title="Verified Contributor">
                                <?= $badge_contributor ?>
                            </div>
                        <?php else :
                            echo "";
                        endif; ?>
                    </div>
                    <?php if ($author_bio != "") : ?>
                        <div class="desc">
                            <p><?= $author_bio; ?></p>
                        </div>
                    <?php endif;
                    if ($author_website != "") : ?>
                        <div class="author-website">
                            <div class="icon">
                                <?= $internet_icon ?>
                            </div>
                            <a href="<?= $author_website; ?>"><?= $author_website; ?></a>
                        </div>
                        <?php endif;
                    if (is_user_logged_in() && current_user_can("administrator")) :
                        if ($author_email != "") : ?>
                            <div class="author-email">
                                <div class="icon">
                                    <?= $mail_icon ?>
                                </div>
                                <a href="mailto:<?= $author_email; ?>"><?= $author_email; ?></a>
                            </div>
                        <?php endif;
                    endif;
                    if (is_user_logged_in() && current_user_can("administrator")) :
                        if ($author_registration != "") : ?>
                            <div class="author-registration">
                                <div class="icon">
                                    <?= $date_icon ?>
                                </div>
                                <time datetime="<?= $author_registration; ?>"><?= $author_registration; ?></time>
                            </div>
                    <?php endif;
                    endif; ?>
                    <ul class="author-social">
                        <?php if ($facebook_url != "") : ?>
                            <li class="facebook">
                                <a href="<?= $facebook_url ?>">
                                    <?= $facebook_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($instagram_url != "") : ?>
                            <li class="instagram">
                                <a href="<?= $instagram_url ?>">
                                    <?= $instagram_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($twitter_url != "") : ?>
                            <li class="twitter">
                                <a href="<?= $twitter_url ?>">
                                    <?= $twitter_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($linkedin_url != "") : ?>
                            <li class="linkedin">
                                <a href="<?= $linkedin_url ?>">
                                    <?= $linkedin_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($youtube_url != "") : ?>
                            <li class="youtube">
                                <a href="<?= $youtube_url ?>">
                                    <?= $youtube_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($pinterest_url != "") : ?>
                            <li class="pinterest">
                                <a href="<?= $pinterest_url ?>">
                                    <?= $pinterest_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($soundcloud_url != "") : ?>
                            <li class="pinterest">
                                <a href="<?= $soundcloud_url ?>">
                                    <?= $soundcloud_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($myspace_url != "") : ?>
                            <li class="myspace">
                                <a href="<?= $myspace_url ?>">
                                    <?= $myspace_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($wikipedia_url != "") : ?>
                            <li class="wikipedia">
                                <a href="<?= $wikipedia_url ?>">
                                    <?= $wikipedia_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($mastodon_url != "") : ?>
                            <li class="mastodon">
                                <a href="<?= $mastodon_url ?>">
                                    <?= $mastodon_icon ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
