<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'top-menu' => __( 'Top Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function my_styles()
{
    wp_register_style('parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('parent-style');
    
    wp_register_style('navigation', get_stylesheet_directory_uri() . '/css/navigation.css', array(), '1.0', 'all');
    wp_enqueue_style('navigation');
}
add_action('wp_enqueue_scripts', 'my_styles');

// FOOTER SCRIPTS
function my_footer_scripts()
{
    wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
    wp_enqueue_script('fontawesome');
    wp_register_script('my-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    wp_enqueue_script('my-scripts');
}
add_action('wp_enqueue_scripts', 'my_footer_scripts');

// Remove Unneeded Features
	remove_theme_support( 'post-formats' );
	remove_post_type_support( 'page' , 'author' );
	remove_post_type_support( 'page' , 'custom-fields' );
	remove_post_type_support( 'post' , 'custom-fields' );
	remove_post_type_support( 'post' , 'comments' );
	remove_post_type_support( 'post' , 'pingbacks' );
	remove_post_type_support( 'post' , 'trackbacks' );

	// Remove Emoji Scripts
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'wp_generator');
	remove_action( 'wp_head', 'wc_generator_tag');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'rsd_link');
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	
	function remove_menu_items(){
	  remove_menu_page( 'edit-comments.php' );
	}
	add_action( 'admin_menu', 'remove_menu_items' );