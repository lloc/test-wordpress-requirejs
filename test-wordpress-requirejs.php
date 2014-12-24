<?php

/*
Plugin Name: Test WordPress RequireJS
Plugin URI: http://msls.co/
Description: Proof of concept - Using RequireJS In WordPress
Version: 0.1
Author: Dennis Ploetner
Author URI: http://lloc.de/
*/

namespace REALLOC\test;

function my_enqueue_script() {
	wp_enqueue_script( 'requirejs', plugins_url( '/js/require.js', __FILE__ ), array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\my_enqueue_script' );

function my_script_loader_tag( $tag, $handle, $src ) {
	if ( 'requirejs' == $handle ) {
		$config = plugins_url( '/js/config.js', __FILE__ );
		$tag    = "<script data-main='{$config}' type='text/javascript' src='{$src}'></script>\n";
	}

	return $tag;
}

add_filter( 'script_loader_tag', __NAMESPACE__ . '\\my_script_loader_tag', 10, 3 );
