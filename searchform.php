<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$siblogs_unique_id = wp_unique_id('search-form-');

$siblogs_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
if (defined('ICONS_PATH')) {
	$search_icon = file_get_contents(ICONS_PATH . "search.svg");
}
?>
<form role="search" <?php echo $siblogs_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. 
					?> method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<input type="search" id="<?php echo esc_attr($siblogs_unique_id); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search..." />
	<button type="submit" class="search-submit"><?= $search_icon ?></button>
</form>