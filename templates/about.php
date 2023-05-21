<?php

/**
 * Template Name: About Us
 * 
 * The about template file
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

get_header();
get_sidebar();
$banner_image = get_field('banner_image');
$cards_section = get_field('cards_section');
$newsletter = get_field('newsletter');
?>

<section class="main-section padding-y">
    <div class="si-wrapper">
        <div class="si-wrapper-content">
            <div class="main-content">
                <h1 class="title"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <div class="desc">
                        <?php the_excerpt(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="main-img">
                <?php if (isset($banner_image) || $banner_image != "") : ?>
                    <img src="<?= $banner_image['url'] ?>" alt="<?= $banner_image['url'] ?>">
                <?php else :
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if (isset($cards_section) && !empty($cards_section)) : ?>
    <section class="about-section padding-y">
        <div class="si-wrapper">
            <div class="universal-header">
                <?php if ($cards_section["title"] != "") : ?>
                    <h2 class="title"><?= $cards_section["title"] ?></h2>
                <?php endif;
                if ($cards_section["description"] != "") :  ?>
                    <div class="desc">
                        <p><?= $cards_section["description"] ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <?php
            $card_1 = $cards_section["card_1"];
            $card_2 = $cards_section["card_2"];
            $card_3 = $cards_section["card_3"];
            ?>
            <div class="cards-grid">
                <?php if (isset($card_1) && !empty($card_1)) : ?>
                    <div class="card">
                        <?php if ($card_1["title"] != "") : ?>
                            <h3 class="normal-title"><?= $card_1["title"] ?></h3>
                        <?php endif;
                        if ($card_1["description"] != "") : ?>
                            <p><?= $card_1["description"] ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif;
                if (isset($card_2) && !empty($card_2)) : ?>
                    <div class="card">
                        <?php if ($card_2["title"] != "") : ?>
                            <h3 class="normal-title"><?= $card_2["title"] ?></h3>
                        <?php endif;
                        if ($card_2["description"] != "") : ?>
                            <p><?= $card_2["description"] ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif;
                if (isset($card_3) && !empty($card_3)) : ?>
                    <div class="card">
                        <?php if ($card_3["title"] != "") : ?>
                            <h3 class="normal-title"><?= $card_3["title"] ?></h3>
                        <?php endif;
                        if ($card_3["description"] != "") : ?>
                            <p><?= $card_3["description"] ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<section class="newsletter-section padding-y">
    <div class="si-wrapper">
        <div class="si-wrapper-content">
            <div class="newsletter-content">
                <?php if ($newsletter["title"] != "") : ?>
                    <h3 class="normal-title"><?= $newsletter["title"] ?></h3>
                <?php endif;
                if ($newsletter["description"] != "") : ?>
                    <div class="desc">
                        <p><?= $newsletter["description"] ?></p>
                    </div>
                <?php endif; ?>
                <?= do_shortcode('[mailpoet_form id="1"]') ?>
            </div>
            <?php if (isset($newsletter["image"]) && !empty($newsletter["image"])) : ?>
                <div class="newsletter-img">
                    <img src="<?= $newsletter["image"]["url"]; ?>" alt="<?= $newsletter["image"]["alt"]; ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer();
