<?php
/*
a function with a hook that register the css + js folder
*/
function test_theme_script_enqueue() {
	wp_enqueue_style( 'customstyle', get_stylesheet_directory_uri() .'/css/theme.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() .'/js/wp_theme.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts','test_theme_script_enqueue');
/*
register or adding the menus
*/
function wp_theme_setup() {
    add_theme_support('menus');

    register_nav_menu( 'primary', 'Primary Header Navigation');
    register_nav_menu( 'secondary', 'Footer Navigation');

}

add_action( 'init', 'wp_theme_setup');
/*
More theme features
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));


/* Register our sidebars and widgetized areas.
*/
function awesome_widgets_init() {
		register_sidebar( array(
						'name'          => 'sidebar','awesome',
						'id'            => 'sidebar-1',
						'before_widget' => '<div>' ,
						'after_widget'  => '</div>',
						'before_title'  => '<h2 class="rounded">',
						'after_title'   => '</h2>',

			));

}
add_action('widgets_init','awesome_widgets_init');
?>
