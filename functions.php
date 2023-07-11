<?php

if (!function_exists('ferie_setup')) {
	function ferie_setup()
	{
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus([
			'menu-1' => esc_html__('Primary', 'ferie'),
		]);
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]);
	}
}
add_action('after_setup_theme', 'ferie_setup');

function ferie_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ferie_content_width', 640);
}
add_action('after_setup_theme', 'ferie_content_width', 0);

function ferie_widgets_init()
{
	register_sidebar([
		'name' => esc_html__('Sidebar', 'ferie'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'ferie'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	]);
}
add_action('widgets_init', 'ferie_widgets_init');

function add_file_types_to_uploads($file_types){

	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );

	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function ferie_scripts()
{
  wp_enqueue_style('ferie-sanitize', get_template_directory_uri().'/css/sanitize.css');
	wp_enqueue_style('ferie-style', get_stylesheet_uri(),array(), filemtime( get_stylesheet_directory() . '/style.css' ));
	if(is_front_page() || is_home() || is_page('en')) {
		wp_enqueue_style('slick-style','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css','','','');
		wp_enqueue_style('slick-theme','https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick-theme.min.css','','','');
	}

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js','','',true);
	wp_enqueue_script('ofi',get_template_directory_uri().'/js/ofi.min.js','','',true);
	wp_enqueue_script('ferie-scripts', get_template_directory_uri().'/js/scripts.js', '',filemtime( get_stylesheet_directory() . '/js/scripts.js' ),true);
	if(is_front_page() || is_home() || is_page('en')) {
		wp_enqueue_script('progressbar01','https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.js','','',true);
		wp_enqueue_script('progressbar02','https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js','','',true);
		wp_enqueue_script('slick-js','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js','','',true);
		wp_enqueue_script('top-scripts', get_template_directory_uri().'/js/top.js', '','',true);
	}
	if(is_page('faq')) {
		wp_enqueue_script('faq-scripts', get_template_directory_uri().'/js/faq.js', '','',true);
	}
}
add_action('wp_enqueue_scripts', 'ferie_scripts');

//incフォルダからインクルード
require get_template_directory().'/inc/reset.php';
require get_template_directory().'/inc/device_if.php';
require get_template_directory().'/inc/body_class.php';
require get_template_directory().'/inc/hide_author.php';
require get_template_directory().'/inc/get_form_id.php';
require get_template_directory().'/inc/acf_add_options_page.php';
require get_template_directory().'/inc/change_posts_archive.php';
require get_template_directory().'/inc/default_post.php';
require get_template_directory().'/inc/excerpt.php';
require get_template_directory().'/inc/form_validation.php';
require get_template_directory().'/inc/include_my_php.php';
require get_template_directory().'/inc/only_publish.php';
require get_template_directory().'/inc/is_parent_slug.php';
require get_template_directory().'/inc/wp_nav.php';
