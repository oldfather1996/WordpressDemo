<?php

function first_example_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'first-example'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'first-example'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'first_example_widgets_init');


function text_slider()
{
	register_sidebar(array(
		'name'          => 'text-slider',
		'id'            => 'text__banner',
		'before_widget' => '<div class="row">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="fs-60">',
		'after_title'   => '</h1>',
		'before_sub_title' => '<h2 class="fs-40">',
		'after_sub_title' => '</h2>',
		'before_container_inner' => '<div class ="container__inner">',
		'after_container_inner' => '</div>',
		'before_inner' => '<div class="container__inner--title">',
		'after_inner' => '</div>',
		'before_button' => '<div class="slider__button">',
		'after_button' => '<div">'
	));
}

add_action('widgets_init', 'text_slider');

function banner()
{
	register_sidebar(array(
		'name' => 'banner',
		'id' => 'banner',
		'before_widget' => '',
		'after_widget' => ''
	));
}

add_action('widgets_init', 'banner');

function product()
{
	register_sidebar(array(
		'name' => 'product',
		'id' => 'product',
		'before_widget' => '',
		'after_widget' => ''
	));
}

add_action('widgets_init', 'product');

function product_hoodie()
{
	register_sidebar(array(
		'name' => 'product_hoodie',
		'id' => 'product_hoodie',
		'before_widget' => '',
		'after_widget' => ''
	));
}

add_action('widgets_init', 'product_hoodie');

function slider_about()
{
	register_sidebar(array(
		'name' => 'slider_about',
		'id' => 'slider_about',
		'before_widget' => '',
		'after_widget' => ''
	));
}

add_action('widgets_init', 'slider_about');

function brand()
{
	register_sidebar(array(
		'name' => 'brand',
		'id' => 'brand',
		'before_widget' => '',
		'after_widget' => ''
	));
}

add_action('widgets_init', 'brand');

function footer_top()
{
	register_sidebar(array(
		'name' => 'footer_top',
		'id' => 'footer_top',
		'before_widget' => '',
		'after_widget' => ''
	));
}

add_action('widgets_init', 'footer_top');

function footer_bottom()
{
	register_sidebar(array(
		'name' => 'footer_bottom',
		'id' => 'footer_bottom',
		'before_widget' => '',
		'after_widget' => ''
	));
}

add_action('widgets_init', 'footer_bottom');
