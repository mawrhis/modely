<?php

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php') ) . '</a></p></div>';
	});
	
	add_filter('template_include', function($template) {
		return get_stylesheet_directory() . '/static/no-timber.html';
	});
	
	return;
}

Timber::$dirname = array('templates', 'views');

class StarterSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		parent::__construct();
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function add_to_context( $context ) {
		$context['foo'] = 'bar';
		$context['stuff'] = 'I am a value set in your functions.php file';
		$context['notes'] = 'These values are available everytime you call Timber::get_context();';
		$context['menu'] = new TimberMenu(3);
		$context['menu2'] = new TimberMenu(6);
		$context['site'] = $this;
		return $context;
	}

	function myfoo( $text ) {
		$text .= ' bar!';
		return $text;
	}

	function add_to_twig( $twig ) {
		/* this is where you can add your own functions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		$twig->addFilter('myfoo', new Twig_SimpleFilter('myfoo', array($this, 'myfoo')));
		return $twig;
	}

}

new StarterSite();

/**
 * Category ID on Menu 
 * 
 * @author Bill Erickson
 * @link http://www.billerickson.net/code/category-id-on-menu-items
 *
 * @param array $classes
 * @param object $item
 * @return array $classes
 */
// function be_category_id_on_menu( $classes, $item ) {
//   if( $item->object !== 'page' )
	
// 	$itemid[] = $item->object_id;
// 	$categoryid[] = get_the_category( $item->object_id );	
// 	$classes[] = 'menu-item-category666-' . $categoryid;
// 	$classes[] = 'menu-item-id-' . $item->object_id;
// 	$classes[] = 'menu-item-i122d-' . $itemid;
// 	return $classes;
// }
// add_filter( 'nav_menu_css_class', 'be_category_id_on_menu', 10, 2 );


// function be_category_id_on_menu( $classes, $item ) {
//   if( $item->object !== 'category' )
// 		return $classes;
		
// 	$classes[] = 'menu-item-category-' . $item->object_id;
// 	return $classes;
// }
// add_filter( 'nav_menu_css_class', 'be_category_id_on_menu', 10, 2 );





function myplugin_settings() {  
// Add tag metabox to page
register_taxonomy_for_object_type('post_tag', 'page'); 
// Add category metabox to page
register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );


