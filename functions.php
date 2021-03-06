<?php
require_once('wp_bootstrap_navwalker.php');

function register_my_menus() {
	register_nav_menus(
	array(
		'home-menu' => __( 'Menu principal' ),
		'servicios-menu' => __( 'Menu servicios' )
	)
	);
}
add_action( 'init', 'register_my_menus' );


function agregar_estilos_y_js() {

	wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Karla:800italic,700,300,600,800,400|Raleway:800italic,700,300,600,800,400', false ); 
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'autocomplete', get_stylesheet_directory_uri() . '/js/jquery.autocomplete.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'scerini', get_stylesheet_directory_uri() . '/js/integral.js', array( 'bootstrap', 'jquery' ), '1.0', false );
}

add_action( 'wp_enqueue_scripts', 'agregar_estilos_y_js' );


function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	}	
	$content = preg_replace('/[.+]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

function add_taxonomies_to_pages() {
	 register_taxonomy_for_object_type( 'category', 'page' );
	 add_post_type_support( 'page', 'excerpt' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );


add_theme_support( 'post-thumbnails' );

add_image_size( 'homepage-thumb', 540, 225 );


//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

?>