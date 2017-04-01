<?php
	function add_theme_scripts() {
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	    wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array ( 'jquery' ), 1.1, true);
	    wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', array ( 'jquery' ), 1.1, true);
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>