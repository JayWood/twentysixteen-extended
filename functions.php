<?php

include_once 'includes/customizer.php';

function twe_enqueue_scripts() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twe_enqueue_scripts' );
