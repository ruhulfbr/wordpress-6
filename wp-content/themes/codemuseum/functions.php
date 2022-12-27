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


//Wp customizer
function cdm_customize_register($wp_customize){
	$wp_customize->add_section('cdm_header_area',[
		'title' => __('Header Area', 'codemuseum'),
		'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	]);

	$wp_customize->add_setting( 'cdm_logo' , [
	    'default'   => get_bloginfo('template_directory').'/assets/img/logo.png'
	]);

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cdm_logo', [
		'label'       => __( 'Logo Upload', 'codemuseum' ),
		'description' => 'Site Main Logo',
		'section'     => 'cdm_header_area',
		'settings'    => 'cdm_logo'
	]));
}

add_action('customize_register', 'cdm_customize_register');