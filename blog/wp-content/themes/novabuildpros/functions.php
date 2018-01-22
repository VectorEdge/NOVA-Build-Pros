<?php
/**
 * @package WordPress
 * @subpackage twentysixteen
 */

/**
 * Child Theme Functions
 * Add custom code below
*/ 

/* add parent theme css*/
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  // child style ( this loads the css from the child folder after parent-style )
wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
wp_enqueue_style('google-font-sans','https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700', false );
}

function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

