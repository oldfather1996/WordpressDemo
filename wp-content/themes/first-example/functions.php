<?php

/**
 * First_Project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package First_Project
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

add_action( 'init', 'lc_custom_post_movie' );
 
// The custom function to register a movie post type
function lc_custom_post_movie() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Movies' ),
    'singular_name'      => __( 'Movie' ),
    'add_new'            => __( 'Add New Movie' ),
    'add_new_item'       => __( 'Add New Movie' ),
    'edit_item'          => __( 'Edit Movie' ),
    'new_item'           => __( 'New Movie' ),
    'all_items'          => __( 'All Movies' ),
    'view_item'          => __( 'View Movie' ),
    'search_items'       => __( 'Search Movies' ),
    // 'featured_image'     => 'Poster',
    // 'set_featured_image' => 'Add Poster'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our movies and movie specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title',  'thumbnail', ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'query_var'         => 'film'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'movie', $args);
}
 
// Hook <strong>lc_custom_post_movie_reviews()</strong> to the init action hook
add_action( 'init', 'lc_custom_post_movie_reviews' );
 
// The custom function to register a movie review post type
function lc_custom_post_movie_reviews() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Movie Reviews' ),
    'singular_name'      => __( 'Movie Review' ),
    'add_new'            => __( 'Add New Movie Review' ),
    'add_new_item'       => __( 'Add New Movie Review' ),
    'edit_item'          => __( 'Edit Movie Review' ),
    'new_item'           => __( 'New Movie Review' ),
    'all_items'          => __( 'All Movie Reviews' ),
    'view_item'          => __( 'View Movie Reviews' ),
    'search_items'       => __( 'Search Movie Reviews' )
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our movie reviews',
    'public'            => true,
    'menu_position'     => 6,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // $args array goes in parameter 2.
  register_post_type( 'review', $args);
}
if (!function_exists('first_example_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function first_example_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on First_Project, use a find and replace
		 * to change 'first-example' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('first-example', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'first-example'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'first_example_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);


		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'first_example_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function first_example_content_width()
{
	$GLOBALS['content_width'] = apply_filters('first_example_content_width', 640);
}
add_action('after_setup_theme', 'first_example_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function first_example_scripts()
{
	$stylesheet_dir_uri = get_stylesheet_directory_uri();
	// var_dump($stylesheet_dir_uri);

	wp_enqueue_style('first-example-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('reset', $stylesheet_dir_uri . '/asset/css/reset.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('slick', $stylesheet_dir_uri . '/asset/css/slick.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('slick-theme', $stylesheet_dir_uri . '/asset/css/slick-theme.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('style', $stylesheet_dir_uri . '/asset/scss/style.css', array(), _S_VERSION, 'all');

	wp_style_add_data('first-example-style', 'rtl', 'replace');

	wp_enqueue_script('first-example-navigation', get_template_directory_uri() . '/asset/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('first-example-slick', get_template_directory_uri() . '/asset/js/slick.js', array(), _S_VERSION, true);
	wp_enqueue_script('first-example-slick-min', get_template_directory_uri() . '/asset/js/slick.min.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'first_example_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
require get_template_directory() . './widget/wp-widget-register.php';
require get_template_directory() . '/widget/class-wp-widget-banner.php';
require get_template_directory() . '/widget/class-wp-widget-slider.php';
require get_template_directory() . '/widget/class-wp-widget-product.php';
require get_template_directory() . '/widget/class-wp-widget-product_hoodie.php';
require get_template_directory() . '/widget/class-wp-widget-slider-about.php';
require get_template_directory() . '/widget/class-wp-widget-brand.php';
require get_template_directory() . '/widget/class-wp-widget-footer-top.php';
require get_template_directory() . '/widget/class-wp-widget-footer-bottom.php';
