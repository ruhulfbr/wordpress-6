<?php


//Add Theme Title
add_theme_support('title-tag');


//Call Assets files

function cdm_assets_call(){
	//wp_enqueue_style('cdm-style', get_stylesheet_uri());
	wp_register_style('style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('style');

	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.js', [], '3.25', true);
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', [], '3.25', true);
	wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', [], '3.25', true);
}

add_action('wp_enqueue_scripts', 'cdm_assets_call');