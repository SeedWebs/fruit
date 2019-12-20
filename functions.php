<?php
/**
 * Override seed_setup()
 */
/* 
function fruit_setup() {
	add_theme_support( 'custom-logo', array(
		'width'       => 200,
		'height'      => 200,
		'flex-width' => true,
		) );
}
add_action( 'after_setup_theme', 'fruit_setup', 11);
*/

/**
 * Enqueue scripts and styles.
 */
function fruit_scripts() {

	wp_enqueue_style('fruit', get_theme_file_uri('/css/style.css'), array(), filemtime(get_theme_file_path('/css/style.css')));
	wp_enqueue_script( 'fruit', get_stylesheet_directory_uri('/js/main.js'), array(), filemtime(get_theme_file_path('/js/main.js')), true);
	
}
add_action( 'wp_enqueue_scripts', 'fruit_scripts' , 20 );