<?php

function test_theme_script_enqueue() {
	wp_enqueue_style( 'customstyle', get_stylesheet_directory_uri() .'/css/theme.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() .'/js/wp_theme.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts','test_theme_script_enqueue');

function wp_theme_setup() {
    add_theme_support('menus');
    register_nav_menu( 'primary', 'Primary Header Navigation');
    register_nav_menu( 'secondary', 'Footer Navigation');

}

add_action( 'init', 'wp_theme_setup');

