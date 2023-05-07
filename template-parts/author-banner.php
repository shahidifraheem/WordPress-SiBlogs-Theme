<?php
/**
 * The author info banner template part file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

$obj = get_queried_object();

// Default Info
$author_bio = get_the_author_meta('description');
$author_email = get_the_author_meta('user_email');
$author_website = get_the_author_meta('user_url');
$author_registration = get_the_author_meta('user_registered');
$author_role = $obj->roles[0];

// Custom Info
$author_info = get_field('author_info', $obj);
$facebook = $author_info['facebook'];
$twitter = $author_info['twitter'];
$instagram = $author_info['instagram'];
$linkedin = $author_info['linkedin'];

// Social Icons
$facebook_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/facebook-circle.svg");
$instagram_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/instagram.svg");
$linkedin_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/linkedin.svg");
$twitter_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/twitter.svg");
$mail_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/mail.svg");
$internet_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/internet.svg");
$badge_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/badge.svg");
$share_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/share.svg");
$date_icon = file_get_contents(get_template_directory_uri() . "/assets/icons/date.svg");


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
                            <div class="verify-badge" title="Verified Person">
                                <?= $badge_icon ?>
                            </div>
                        <?php endif; ?>
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
                        <?php if ($facebook != "") : ?>
                            <li class="facebook">
                                <a href="<?= $facebook ?>">
                                    <?= $facebook_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($instagram != "") : ?>
                            <li class="instagram">
                                <a href="<?= $instagram ?>">
                                    <?= $instagram_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($twitter != "") : ?>
                            <li class="twitter">
                                <a href="<?= $twitter ?>">
                                    <?= $twitter_icon ?>
                                </a>
                            </li>
                        <?php endif;
                        if ($linkedin != "") : ?>
                            <li class="linkedin">
                                <a href="<?= $linkedin ?>">
                                    <?= $linkedin_icon ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>