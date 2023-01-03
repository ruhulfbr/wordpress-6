<?php


//Add Theme Title
add_theme_support('title-tag');


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


//Register menu
register_nav_menu('main_menu', __('Main Menu', 'codemuseum') );


// Walker Menu Properties
function cdm_nav_description( $item_output, $item, $args){
  if( !empty ($item->description)){
    $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'cdm_nav_description', 10, 3);