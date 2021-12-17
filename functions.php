<?php

add_action( 'wp_enqueue_scripts', 'arch_style' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );


function arch_style() {
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() .'/normalize.css' );
    wp_enqueue_style( 'magnific-style', get_template_directory_uri() .'/assets/libs/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
}

function arch_scripts() {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'magnific-script', get_template_directory_uri() .'/assets/libs/jquery.magnific-popup.min.js' , array('jquery'), null);
    wp_enqueue_script( 'slick-script', get_template_directory_uri() .'/assets/js/slick.min.js' , array('jquery'), null);
    wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/script.js' , array('jquery'), null);
}