<?php

function add_css() {
	wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri() . '/css/mystyle.css', array(), false, 'all');
	wp_enqueue_style('style');

	wp_register_style('navstyle', get_template_directory_uri() . '/css/nav-menu.css', array(), false, 'all');
	wp_enqueue_style('navstyle');

	wp_register_style('slider', get_template_directory_uri() . '/css/slider.css', array(), false, 'all');
	wp_enqueue_style('slider');
}

add_action('wp_enqueue_scripts', 'add_css');

function add_script() {
	wp_enqueue_script('jquery');

	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', 'jquery', false, true);
	wp_enqueue_script('popper');

	wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');

	if (is_front_page() || is_home()) {
		wp_register_script('myscript', get_template_directory_uri() . '/js/myscript.js', array(), false, true);
		wp_enqueue_script('myscript');

		wp_register_script('content', get_template_directory_uri() . '/js/content.js', array(), false, true);
		wp_enqueue_script('content');
	}
}

add_action('wp_enqueue_scripts', 'add_script');

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'extra-menu' => __('Extra Menu')
		)
	);
}

add_action('init', 'register_my_menus');

// Add body IDs
function motivation_get_body_id() {
	$id = 'main_body';
	return $id;
}

add_filter('init', 'motivation_get_body_id');

function wpmu_register_widgets() {
	
}

add_theme_support( 'post-thumbnails' );

add_action('widgets_init', 'wpmu_register_widgets');

global $article_side;
$article_side="right";