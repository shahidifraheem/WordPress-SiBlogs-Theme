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
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem autem impedit veniam voluptatum porro iusto, dicta sit at quaerat maxime.</p>
				</div>
				<div class="newsletter">
					<a href="#" class="universal-btn">
						<span>Become a subscriber</span>
						<span class="icon">&#10142;</span>
					</a>
					<p>
						<small>Get all the latest posts delivered straight to your inbox.</small>
					</p>
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
					<strong>Copyright &copy; 2023. All Rights Reserved.</strong>
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
<?php wp_footer(); ?>

</body>

</html>