<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package First_Project
 */

get_header();
?>

<div class="slider">
	<div class="slider--banner">
		<div class="container slider__content">
			<?php if (is_active_sidebar('text__banner')) : ?>
				<?php dynamic_sidebar('text__banner'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>
<div class="container">
	<div class="container__banner">
		<?php if (is_active_sidebar('banner')) : ?>
			<?php dynamic_sidebar('banner'); ?>
		<?php endif; ?>
	</div>
</div>
<div class="container">
	<div class="product">
		<div class="product--text">
			<p>TOP SALLERS</p>
			<p>FEATURED</p>
			<p>MOST REVIEWS</p>
		</div>
		<div id="product_1" class="product__items row" ;>
			<?php if (is_active_sidebar('product')) : ?>
				<?php dynamic_sidebar('product'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="container__border">
		<div class="row">
			<div class="slider_about">
				<?php
				$args = array('post_type' => 'movie', 'post_per_page' => 3);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) : $loop->the_post();
				?>
					<div class="slider_about__item">
						<p class="slider_about__text-heading">
							<?php echo get_post_meta($post->ID, '_text_heading', true) ?>
						</p>
						<img src='<?php echo get_the_post_thumbnail_url() ?>' .class="slider_about__img">
						<p class="slider_about__text-desc">
							<?php echo get_post_meta($post->ID, '_text_description', true) ?>
						</p>
						<p class="slider_about__text-name">
							<?php echo get_post_meta($post->ID, '_text_name', true) ?>
						</p>
						<p class="slider_about__text-wish">
							<?php echo get_post_meta($post->ID, '_text_wish', true) ?>
						</p>

					</div>
				<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="container__brand">
		<div class="row">
			<?php if (is_active_sidebar('brand')) : ?>
				<?php dynamic_sidebar('brand'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php
get_sidebar();
get_footer();
