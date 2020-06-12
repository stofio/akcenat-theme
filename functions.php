<?php

// Add scripts and stylesheets
function myTheme_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/css/jquery.js', array(), '3.5.1' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.5.0' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/css/bootstrap.js', array(), '4.5.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/fontawsome.css' );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/css/fontawsome.js' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'navbar', get_template_directory_uri() . '/js/navbar.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'myTheme_scripts' );

?>