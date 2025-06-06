<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage SI_Blogs
 * @since SI Blogs 1.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$secondary_footer_description = get_theme_mod("secondary_footer_description", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem autem impedit veniam voluptatum porro iusto, dicta sit at quaerat maxime.");
$secondary_footer_btn_text = get_theme_mod("secondary_footer_btn_text", "Become a subscriber");
$secondary_footer_btn_arrow = get_theme_mod("secondary_footer_btn_arrow", "&#10142;");
$secondary_footer_btn_url = get_theme_mod("secondary_footer_btn_url");
$secondary_footer_btn_subtitle = get_theme_mod("secondary_footer_btn_subtitle", "Get all the latest posts delivered straight to your inbox.");
$copyright_text = get_theme_mod("copyright_text", "Copyright © 2023. All rights reserved by SiBlogs");

?>
</main>
<footer id="si-footer">
	<div class="secondary-footer">
		<div class="si-wrapper">
			<div class="si-wrapper-content">
				<div class="site-info">
					<?php
					if (has_custom_logo()) {
						the_custom_logo();
					}
					?>
					<?php if ($secondary_footer_description != "") : ?>
						<p><?= $secondary_footer_description ?></p>
					<?php endif; ?>
				</div>
				<div class="newsletter">
					<a href="<?= $secondary_footer_btn_url ?>" class="universal-btn">
						<span><?= $secondary_footer_btn_text ?></span>
						<span class="icon"><?= $secondary_footer_btn_arrow ?></span>
					</a>
					<?php if ($secondary_footer_btn_subtitle != "") : ?>
						<p>
							<small><?= $secondary_footer_btn_subtitle ?></small>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="primary-footer">
		<div class="si-wrapper">
			<div class="si-wrapper-content">
				<?php if (is_active_sidebar('footer-widget-1')) : ?>
					<div class="wrapper-widget">
						<?php
						ob_start();
						dynamic_sidebar('footer-widget-1');
						$widget_1 = ob_get_clean();
						echo $widget_1;
						?>
					</div>
				<?php endif;
				if (is_active_sidebar('footer-widget-2')) : ?>
					<div class="wrapper-widget">
						<?php
						ob_start();
						dynamic_sidebar('footer-widget-2');
						$widget_2 = ob_get_clean();
						echo $widget_2;
						?>
					</div>
				<?php endif;
				if (is_active_sidebar('footer-widget-3')) : ?>
					<div class="wrapper-widget">
						<?php
						ob_start();
						dynamic_sidebar('footer-widget-3');
						$widget_3 = ob_get_clean();
						echo $widget_3;
						?>
					</div>
				<?php endif;
				if (is_active_sidebar('footer-widget-4')) : ?>
					<div class="wrapper-widget">
						<?php
						ob_start();
						dynamic_sidebar('footer-widget-4');
						$widget_4 = ob_get_clean();
						echo $widget_4;
						?>
					</div>
				<?php endif;
				if (is_active_sidebar('footer-widget-5')) : ?>
					<div class="wrapper-widget contact-widget">
						<?php
						ob_start();
						dynamic_sidebar('footer-widget-5');
						$widget_5 = ob_get_clean();
						echo $widget_5;
						?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="si-wrapper">
			<div class="si-wrapper-content">
				<div class="copyright-text">
					<strong><?= $copyright_text ?></strong>
				</div>
				<div class="privacy-policy-box">
					<?php
					if (function_exists('the_privacy_policy_link')) {
						the_privacy_policy_link('<div class="privacy-policy">', '</div>');
					}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="alert-overlay"></div>
<div id="internet-alert">
	<p><strong>Offline! </strong> Please enable internet connection to explore the website.</p>
	<button id="internet-close-alert">&#10006;</button>
</div>
<?php wp_footer(); ?>
<script>
	/**
	 * Checking Internet Connection Status
	 */
	const internetAlert = document.querySelector("#internet-alert");
	const internetCloseAlert = document.querySelector("#internet-close-alert");
	const alertOverlay = document.querySelector("#alert-overlay");
	const links = document.querySelectorAll("a");

	if (!navigator.onLine) {
		links.forEach(link => {
			link.addEventListener("click", function(e) {
				e.preventDefault()
			})
		});
		internetAlert.classList.add("alerting")
		alertOverlay.classList.add("alerting")
		alertOverlay.addEventListener("click", function() {
			internetAlert.classList.add("active")
			setTimeout(() => {
				internetAlert.classList.remove("active")
			}, 100);
		})
		window.addEventListener("click", function() {
			internetAlert.classList.add("alerting")
			alertOverlay.classList.add("alerting")
		})
	}
	internetCloseAlert.addEventListener("click", function(e) {
		e.stopPropagation()
		internetAlert.classList.remove("alerting")
		alertOverlay.classList.remove("alerting")
	})
</script>
<?php if (get_field("footer_embed_code") != "") {
	esc_html(the_field("footer_embed_code"));
} ?>
</body>

</html>