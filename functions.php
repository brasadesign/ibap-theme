<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function xango_child_load_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'xango-child-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), null, 'all' );

	wp_enqueue_style( 'xango-child-sourcesans', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,900italic,900,700italic,700,600italic,600,400italic', array(), null, 'all' );

}

add_action( 'wp_enqueue_scripts', 'xango_child_load_scripts', 99999 );

