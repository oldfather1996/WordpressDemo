<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package First_Project
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="header">
		<div class="container">
			<div class="container--inner row">
				<div class="container__logo">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
					if (has_custom_logo()) {
						echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
					?>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'        => 'container--nav_menu',
					)
				);
				?>
				<div class="container__icon">
					<div class="container__icon--inside">
						<a href=""> <i class="fas fa-search"></i></a>
						<p>|</p>
						<a href=""> <i class="fas fa-shopping-basket"></i></a>
						<p>|</p>
						<a href=""> <i class="fas fa-user"></i></a>
					</div>
				</div>
			</div>

			<!-- menu mobile nav -->

			<div class="container__mobile--nav row">
				<ul class="mobile--nav">
					<li><a href="#">Home </a>
						<i id="mobile-menu" class="fas fa-bars"></i>
					</li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Classes</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
				<div class="container__logo">
					<img src="../asset/image/header/logo.png" alt="">
				</div>
				<div class="container__icon">
					<div class="container__icon--inside">
						<a href="#"> <i class="fas fa-search"></i></a>
						<p></p>
						<a href="#"> <i class="fas fa-shopping-basket"></i></a>
						<p></p>
						<a href="#"> <i class="fas fa-user"></i></a>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div>

	</div>
</body>