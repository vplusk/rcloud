<?php
/*
* scripts and styles
*/

add_theme_support( 'post-thumbnails' );

function load_style_script() {	
	wp_enqueue_script('jquery-my', get_template_directory_uri() . '/js/jquery-1.11.2.js');
	wp_enqueue_script('modern', get_template_directory_uri() . '/js/modernizr.custom.41035.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js');
	wp_enqueue_script('slimscroll', get_template_directory_uri() . '/js/jquery.slimscroll.min.js');
	wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/owl.carousel/owl.carousel.min.js');
	wp_enqueue_script('map-script', get_template_directory_uri() . '/js/map.js');

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('main-css', get_template_directory_uri() . '/css/screen.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/owl.carousel/assets/owl.carousel.css');
	wp_enqueue_style('fullpage-css', get_template_directory_uri() . '/css/jquery.fullPage.css');
	
}

/*
* loading styles and scripts
*/

add_action('wp_enqueue_scripts', 'load_style_script');

/*
* adding widgets
*/
register_nav_menus(array(
	'header_left' => 'header left',
	'header_right' => 'header right',
	'footer_menu' => 'footer_menu'
));

/*
* styling form
*/


/*
* social icons
*/

register_sidebar(array(
	'name' => 'Иконки в футере',
	'id' => 'icons_footer',
	'description' => 'Используте виджет Текст для добавления ссылок в социальных сетях',
	'before_widget' => '',
	'after_widget' => '')
);

register_sidebar(array(
	'name' => 'Контакты в футере',
	'id' => 'contacts_footer',
	'description' => 'Используте виджет Текст для добавления контактов',
	'before_widget' => '',
	'after_widget' => '')
);

register_sidebar(array(
	'name' => 'Контакты на странице контактов',
	'id' => 'contacts_page_block',
	'description' => 'Используте виджет Текст для добавления контактов',
	'before_widget' => '',
	'after_widget' => '')
);