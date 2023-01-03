<?php

//Call Assets files

//Import google font
function cdm_google_fonts() {
	wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'cdm_google_fonts' );

//Import icon cdns
function cdm_fontawsome_icon_cdn() {
	wp_enqueue_style( 'fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', false );
	wp_enqueue_style( 'google_icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', false );
}

add_action( 'wp_enqueue_scripts', 'cdm_fontawsome_icon_cdn' );

function cdm_assets_call(){
	//wp_enqueue_style('cdm-style', get_stylesheet_uri());

	// Libraries Stylesheet
	wp_register_style('animate', get_template_directory_uri().'/assets/lib/animate/animate.min.css');
	wp_enqueue_style('animate');

	wp_register_style('owlcarousel', get_template_directory_uri().'/assets/lib/owlcarousel/assets/owl.carousel.min.css');
	wp_enqueue_style('owlcarousel');

	//Main stylesheet
	wp_register_style('bootstarp', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('bootstarp');

	wp_register_style('style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('style');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', NULL, NULL, true);
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');

	wp_enqueue_script('wow', get_template_directory_uri().'/assets/lib/wow/wow.min.js', NULL, NULL, true);
	wp_enqueue_script('easing', get_template_directory_uri().'/assets/lib/easing/easing.min.js', NULL, NULL, true);
	wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/lib/waypoints/waypoints.min.js', NULL, NULL, true);
	wp_enqueue_script('owlcarousel', get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js', NULL, NULL, true);
	wp_enqueue_script('counterup', get_template_directory_uri().'/assets/lib/counterup/counterup.min.js', NULL, NULL, true);
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', NULL, NULL, true);
	wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', NULL, NULL, true);
}

add_action('wp_enqueue_scripts', 'cdm_assets_call');