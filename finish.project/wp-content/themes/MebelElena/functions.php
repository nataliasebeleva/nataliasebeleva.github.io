<?php 

function mebelelena_scripts() {
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css' );

	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css' );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	

	wp_enqueue_style( 'mebelelena-styles', get_stylesheet_uri() );



	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', '', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',  '', true );


	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', '', true );

	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', '', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', '', true );

	
}
add_action( 'wp_enqueue_scripts', 'mebelelena_scripts' ); //подключение стилей и скриптов



//  add_action('init', 'my_custom_init'); //регистрация типов постов

// function my_custom_init(){
// 	register_post_type('pictures', array(
// 		'labels'             => array(
// 			'name'               => 'О компании', // Основное название типа записи
// 			'singular_name'      => 'Запись', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новую',
// 			'add_new_item'       => 'Добавить новую',
// 			'edit_item'          => 'Редактировать Запись',
// 			'new_item'           => 'Новая',
// 			'view_item'          => 'Посмотреть запись',
// 			'search_items'       => 'Найти запись',
// 			'not_found'          =>  'Записей не найдено',
// 			'not_found_in_trash' => 'В корзине записей не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'О компании'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => null,
// 		'supports'           => array(
// 								// 'title',
// 								// 'editor',
// 								// 'author',
// 								'thumbnail',
// 								// 'excerpt',
// 								// 'comments'
// 								)
// 	) );
// }


add_theme_support( 'post-thumbnails' ); //поддержка превьюшек для постов


//если есть функция добавления превьюшек(картинок), то обрезать их указанного размера; true - если картинка не помещается - обрезать
if (function_exists('add_image_size')) { 
	add_image_size('big-pictures', 460, 413, true);
};

register_nav_menus( array(
	'menu-1' => esc_html__( 'menu', 'mebelelena' ),
) );


