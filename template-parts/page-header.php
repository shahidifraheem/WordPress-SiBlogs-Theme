<?php

/**
 * The page header template part file later this will be used for ads purpose
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

$obj = get_queried_object();
if (is_archive()) {
    $page_header = get_field('page_header', $obj);
} else {
    $page_header = get_field('page_header');
}
if (!empty($page_header['image'])) :
?>
    <div id="page-header" <?= isset($page_header) ? "style='background-color:" . $page_header['background_color'] . "'" : ""; ?>>
        <div class="si-wrapper padding-y">
            <a href="<?= $page_header['url'] ?>">
                <img src="<?= $page_header['image']['url'] ?>" alt="<?= isset($page_header['image']['alt']) ? $page_header['image']['alt'] : ""  ?>">
            </a>
        </div>
    </div>
<?php endif; ?>