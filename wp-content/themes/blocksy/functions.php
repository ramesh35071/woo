<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';

function load_css(){
	wp_enqueue_style('style-css',get_template_directory_uri() . '/style.css',array(),false,'all');

}
add_action('wp_enqueue_scripts', 'load_css');





