<?php

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

	  // Menu Position Option
	$wp_customize->add_section('cdm_menu_option', array(
	    'title' => __('Menu Position Option', 'alihossain'),
	    'description' => 'If you interested to change your menu position you can do it.'
	));

	$wp_customize->add_setting('cdm_menu_position', array(
	    'default' => 'right_menu',
	));

	$wp_customize-> add_control('cdm_menu_position', array(
	    'label' => 'Menu Position',
	    'description' => 'Select your menu position',
	    'setting' => 'cdm_menu_position',
	    'section' => 'cdm_menu_option',
	    'type' => 'radio',
	    'choices' => array(
	      'left_menu' => 'Left Menu',
	      'right_menu' => 'Right Menu',
	      'center_menu' => 'Center Menu',
	    ),
	));

	  // Footer Option
	$wp_customize->add_section('cdm_footer_option', array(
	    'title' => __('Footer Option', 'alihossain'),
	    'description' => 'If you interested to change or update your footer settings you can do it.'
	));

	$wp_customize->add_setting('cdm_copyright_section', array(
	    'default' => '&copy; Copyright '.date('Y').' | CodeMuseum',
	));

	$wp_customize-> add_control('cdm_copyright_section', array(
	    'label' => 'Copyright Text',
	    'description' => 'If need you can update your copyright text from here',
	    'setting' => 'cdm_copyright_section',
	    'section' => 'cdm_footer_option',
	));
}

add_action('customize_register', 'cdm_customize_register');
