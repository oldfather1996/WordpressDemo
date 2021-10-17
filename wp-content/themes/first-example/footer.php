<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package First_Project
 */

?>

<footer class="footer">
	<div class="container">
		<div class="footer__header">
			<?php if (is_active_sidebar('footer_top')) : ?>
				<?php dynamic_sidebar('footer_top'); ?>
			<?php endif; ?>
			<div class="footer__header--outside">
				<a href="#"> <i class="footer__header--icon fab fa-facebook-f"></i></a>
				<a href="#"><i class="footer__header--icon fab fa-twitter"></i></a>
				<a href="#"><i class="footer__header--icon fab fa-google-plus-g"></i></a>
				<a href="#"><i class="footer__header--icon fab fa-youtube"></i></a>
			</div>
		</div>
	</div><!-- .site-info -->
	<div class="container">
		<div class="row">
			<div class="footer__bottom"></div>
			<div class="col-fourth mobile__row-2">
				<div class="col-inner">
					<a href="#">
						<p class="footer__bottom--header-text">
							CONTACT US
						</p>
					</a>
					<a href="#">
						<p class="footer__bottom--info-text"><i class="footer__bootom--icon fas fa-map-marker-alt"></i>200 Lincoln Ave, Salinas, CA 93901
						</p>
					</a>
					<a href="#">
						<p class="footer__bottom--info-text"><i class="footer__bootom--icon fas fas fa-phone"></i>023 32423 223</p>
					</a>
					<a href="#">
						<p class="footer__bottom--info-text"><i class="footer__bootom--icon fas fa-envelope"></i>gymax@example.com</p>
					</a>
					<a href="#">
						<p class="footer__bottom--info-text"><i class="footer__bootom--icon fas fa-clock"></i>9:00 - 20:00 All day</p>
					</a>
				</div>
			</div>
			<?php if (is_active_sidebar('footer_bottom')) : ?>
				<?php dynamic_sidebar('footer_bottom'); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="footer__copyright">
		<p>Copyright © 2019 Gymax - Design by ArrowHitech - All Rights Reserved</p>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>