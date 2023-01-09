<?php

	function cdm_sections_shortcode(){
		vc_map([
		 	'name'        => __('Homepage About Us','codemuseum'),
		 	'description' => 'About Us Section In Homepage',
		 	'base'        => 'cdm_shortcode_about',
		 	'category'    => 'CodeMuseum',
		 	'icon'        => get_template_directory_uri().'/assets/img/icon-1.png',
		 	'params' => [
				[
					// 'group'      => 'Setting',
				 	'param_name' => 'title',
				 	'type'       => 'textfield',
				 	'heading'    => 'Title ',
				 	'value'      => '',
				],

				[
				 	// 'group'      => 'Setting',
					'param_name' => 'about_us_text',
					'heading'    => 'About us Content',
					'type'       => 'textarea',
					'value'      => '',
				],

				[
					'param_name' => 'explore_url',
					'heading'    => 'Explore Url',
					'type'       => 'textfield',
					'value'      => '',
				],

				[
					// 'group'      => 'Setting',
					'param_name' => 'about_img',
					'heading'    => 'Media',
					'type'       => 'attach_image',
					'value'      => '',
				]
		 	],
		]);
	}

	add_action('vc_before_init', 'cdm_sections_shortcode');



//  function consult_intigratewithvc(){

// 	vc_map(array(
// 	 'name'=>__('Heading Title','text-donain'),
// 	 'description'=>'This is Heading Title Addon',
// 	 'base'=>'section_2_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		 array(
// 		 'param_name'=>'title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Title ',
// 		 'value'=>'',
// 		 ),

// 		  array(
// 		 'param_name'=>'sub_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Sub Title ',
// 		 'value'=>'',
// 		 ),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Main Services Section','text-donain'),
// 	 'description'=>'This is Main Services  Addon',
// 	 'base'=>'section_1_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Title',
// 		 'value'=>'',
// 		),
//         array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'sub_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Sub Title',
// 		 'value'=>'',
// 		),


// 		array(
// 		'group'=>'Main Services List',
// 		'type'=>'param_group',
// 		'heading'=>'Card  Items',
// 		'param_name'=>'sec_3_grp',
// 		'params'=>array(
// 			array(
// 				'param_name'=>'select_id',
// 				'heading'=>'Add Id (01.) ',
// 				'type'=>'textfield',
// 				'group'=>'Tbd',
// 			),

// 		   array(
// 				'param_name'=>'sec_title',
// 				'heading'=>'Title',
// 				'type'=>'textfield',
// 				'group'=>'Tbd',
// 			),

// 			array(
// 				'param_name'=>'icon_images',
// 				'heading'=>'Icon',
// 				'type'=>'attach_image',
// 				'group'=>'Tbd',
// 			),

// 			array(
// 				'param_name'=>'item_url',
// 				'heading'=>'Item URL',
// 				'type'=>'textfield',
// 				'group'=>'Tbd',
// 			),

// 		)


// 	 ),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Recent Work Section','text-donain'),
// 	 'description'=>'This is recent Work Addon',
// 	 'base'=>'section_3_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Title',
// 		 'value'=>'',
// 		),
//         array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'sub_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Sub Title',
// 		 'value'=>'',
// 		),
// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'see_all',
// 		 'type'=>'textfield',
// 		 'heading'=>'See All',
// 		 'value'=>'',
// 		),
// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'see_all_url',
// 		 'type'=>'textfield',
// 		 'heading'=>'See All URL',
// 		 'value'=>'',
// 		),

//         array(
// 		 'group'=>'Mobile App',
// 		 'param_name'=>'mobile_app',
// 		 'type'=>'textfield',
// 		 'heading'=>'Mobile App',
// 		 'value'=>'',
// 		),

// 		array(
// 			'group'=>'Mobile App',
// 			'type'=>'param_group',
// 			'heading'=>'Portfolio Work Item',
// 			'param_name'=>'sec_3_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'work_title',
// 					'heading'=>'Title',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_images',
// 					'heading'=>'Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_url',
// 					'heading'=>'URL',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 		array(
// 		 'group'=>'Web Design & Dev.',
// 		 'param_name'=>'web_dev',
// 		 'type'=>'textfield',
// 		 'heading'=>'Web Design & Development',
// 		 'value'=>'',
// 		),

// 		array(
// 			'group'=>'Web Design & Dev.',
// 			'type'=>'param_group',
// 			'heading'=>'Portfolio Work Item',
// 			'param_name'=>'sec_4_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'work_title1',
// 					'heading'=>'Title',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_images1',
// 					'heading'=>'Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_url1',
// 					'heading'=>'URL',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 		array(
// 			'group'=>'Offshore Dev.',
// 			'param_name'=>'offshore_dev',
// 			'type'=>'textfield',
// 			'heading'=>'Offshore Development',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Offshore Dev.',
// 			'type'=>'param_group',
// 			'heading'=>'Portfolio Work Item',
// 			'param_name'=>'sec_5_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'work_title2',
// 					'heading'=>'Title',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_imagesod',
// 					'heading'=>'Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_url2',
// 					'heading'=>'URL',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),
// 			)
// 		),

// 		array(
// 			'group'=>'Graphic',
// 			'param_name'=>'graphic_design',
// 			'heading'=>'Graphic Design',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Graphic',
// 			'type'=>'param_group',
// 			'heading'=>'Portfolio Work Item',
// 			'param_name'=>'sec_6_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'work_title3',
// 					'heading'=>'Title',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_imagesgp',
// 					'heading'=>'Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_url3',
// 					'heading'=>'URL',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),
// 			)
// 		),

// 	),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Why Chosse Us Section','text-donain'),
// 	 'description'=>'This is Why Chosse Us Addon',
// 	 'base'=>'section_4_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Title',
// 		 'value'=>'',
// 		),
//         array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'sub_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Sub Title',
// 		 'value'=>'',
// 		),

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'shape_image',
// 		 'type'=>'attach_image',
// 		 'heading'=>'Shape Image',
// 		 'value'=>'',
// 		),

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'shape_content',
// 		 'type'=>'textfield',
// 		 'heading'=>'Shape Content',
// 		 'value'=>'',
// 		),

// 		array(
// 			'group'=>'Expertise',
// 			'param_name'=>'ex_title',
// 			'heading'=>'Title',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Expertise',
// 			'param_name'=>'ex_image',
// 			'heading'=>'Image',
// 			'type'=>'attach_image',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Expertise',
// 			'param_name'=>'ex_content',
// 			'heading'=>'Content',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Expertise',
// 			'param_name'=>'ex_shape_content',
// 			'type'=>'textfield',
// 			'heading'=>'Shape Content',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Trust',
// 			'param_name'=>'tru_title',
// 			'heading'=>'Title',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Trust',
// 			'param_name'=>'tru_image',
// 			'heading'=>'Image',
// 			'type'=>'attach_image',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Trust',
// 			'param_name'=>'tru_content',
// 			'heading'=>'Content',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Trust',
// 			'param_name'=>'tru_shape_content',
// 			'type'=>'textfield',
// 			'heading'=>'Shape Content',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Work Force',
// 			'param_name'=>'work_title',
// 			'heading'=>'Title',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Work Force',
// 			'param_name'=>'work_image',
// 			'heading'=>'Image',
// 			'type'=>'attach_image',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Work Force',
// 			'param_name'=>'work_content',
// 			'heading'=>'Content',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Work Force',
// 			'param_name'=>'work_shape_content',
// 			'type'=>'textfield',
// 			'heading'=>'Shape Content',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Dedication',
// 			'param_name'=>'ded_title',
// 			'heading'=>'Item Title',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Dedication',
// 			'param_name'=>'ded_image',
// 			'heading'=>'Image',
// 			'type'=>'attach_image',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Dedication',
// 			'param_name'=>'ded_content',
// 			'heading'=>'Content',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Dedication',
// 			'param_name'=>'ded_shape_content',
// 			'heading'=>'Shape Content',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),

// 	),

// 	));

// 	vc_map(array(
// 	 'name'=>__('We Work Client Section','text-donain'),
// 	 'description'=>'This is We Work Client Addon',
// 	 'base'=>'section_5_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Title',
// 		 'value'=>'',
// 		),
//         array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'sub_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Sub Title',
// 		 'value'=>'',
// 		),

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'we_love_text',
// 		 'type'=>'textfield',
// 		 'heading'=>'Bottom Text ',
// 		 'value'=>'',
// 		),

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'we_love_link_text',
// 		 'type'=>'textfield',
// 		 'heading'=>'Bottom Link Text',
// 		 'value'=>'',
// 		),

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'we_love_link_url',
// 		 'type'=>'textfield',
// 		 'heading'=>'Bottom Link URL',
// 		 'value'=>'',
// 		),

// 		array(
// 		'group'=>'We Work Images List',
// 		'type'=>'param_group',
// 		'heading'=>'Slider Items',
// 		'param_name'=>'sec_6_grp',
// 		'params'=>array(
// 			array(
// 				'param_name'=>'select_id',
// 				'heading'=>'Add Id (01.) ',
// 				'type'=>'textfield',
// 				'group'=>'Tbd',
// 			),

// 			array(
// 				'param_name'=>'logo_image',
// 				'heading'=>'Client Logo Image',
// 				'type'=>'attach_image',
// 				'group'=>'Tbd',
// 			),

// 			array(
// 				'param_name'=>'logo_url',
// 				'heading'=>'Client Logo URL',
// 				'type'=>'textfield',
// 				'group'=>'Tbd',
// 			),

// 		)

// 	 ),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Testimonial Section','text-donain'),
// 	 'description'=>'This is Testimonial Addon',
// 	 'base'=>'section_6_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Title',
// 		 'value'=>'',
// 		),
//         array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'sub_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Sub Title',
// 		 'value'=>'',
// 		),

// 		array(
// 		'group'=>'Testimonial Slider List',
// 		'type'=>'param_group',
// 		'heading'=>'Slider Items',
// 		'param_name'=>'sec_7_grp',
// 		'params'=>array(
// 			array(
// 				'param_name'=>'select_id',
// 				'heading'=>'Add Id (01.) ',
// 				'type'=>'textfield',
// 				'group'=>'Tbd',
// 			),

// 			array(
// 				'param_name'=>'profile_name',
// 				'heading'=>'Profile Name ',
// 				'type'=>'textfield',
// 				'group'=>'Tbd',
// 			),

// 			array(
// 				'param_name'=>'profile_image',
// 				'heading'=>'Profile Image',
// 				'type'=>'attach_image',
// 				'group'=>'Tbd',
// 			),

// 			array(
// 				'param_name'=>'desc_content',
// 				'heading'=>'Description Content',
// 				'type'=>'textarea',
// 				'group'=>'Tbd',
// 			),

// 		)

// 	 ),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Social & Subscribe Section','text-donain'),
// 	 'description'=>'This is Social & Subscribe Addon',
// 	 'base'=>'section_7_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 		 'group'=>'Subscribe setting',
// 		 'param_name'=>'content',
// 		 'type'=>'textarea_html',
// 		 'heading'=>'Shortcode',
// 		 'value'=>'',
// 		),

// 		array(
// 			'group'=>'Social',
// 			'type'=>'param_group',
// 			'heading'=>'Sicial Items',
// 			'param_name'=>'sec_8_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'social_title',
// 					'heading'=>'Social Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'social_icon_name',
// 					'heading'=>'Fontawesome Icon Name',
// 					'placeholder'=>'facebook',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'social_url',
// 					'heading'=>'Social URL',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 	)

// 	));

// 	vc_map(array(
// 	 'name'=>__('Dev. Skill Matrix Section','text-donain'),
// 	 'description'=>'This is Dev. Skill Matrix Addon',
// 	 'base'=>'section_8_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 		 'group'=>'Setting',
// 		 'param_name'=>'core_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Core Expertise Title',
// 		 'value'=>'',
// 		),

//         array(
// 		 'group'=>'Web Dev.',
// 		 'param_name'=>'web_dev',
// 		 'type'=>'textfield',
// 		 'heading'=>'Web Development Title',
// 		 'value'=>'',
// 		),

// 		array(
// 			'group'=>'Web Dev.',
// 			'type'=>'param_group',
// 			'heading'=>'Web Development Items',
// 			'param_name'=>'sec_3_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'progress_title1',
// 					'heading'=>'Progress Title',
// 					'type'=>'textfield',
// 					'description'=>'Multiple skill name Will be Comma Separate, ex: HTML, CSS',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'progress_value1',
// 					'heading'=>'Progress Value',
// 					'type'=>'textfield',
// 					'description'=>' Type only number value, ex: 10',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 		array(
// 		 'group'=>'CMS',
// 		 'param_name'=>'cms_dev',
// 		 'type'=>'textfield',
// 		 'heading'=>'Content Management System (CMS) Title',
// 		 'value'=>'',
// 		),

// 		array(
// 			'group'=>'CMS',
// 			'type'=>'param_group',
// 			'heading'=>'Content Management System (CMS) Items',
// 			'param_name'=>'sec_4_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'progress_title2',
// 					'heading'=>'Progress Title',
// 					'type'=>'textfield',
// 					'description'=>'Multiple skill name Will be Comma Separate, ex: HTML, CSS',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'progress_value2',
// 					'heading'=>'Progress Value',
// 					'type'=>'textfield',
// 					'description'=>' Type only number value, ex: 10',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 		array(
// 			'group'=>'E commerce',
// 			'param_name'=>'e_commerce',
// 			'type'=>'textfield',
// 			'heading'=>'E Commerce Title',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'E commerce',
// 			'type'=>'param_group',
// 			'heading'=>'E Commerce Items',
// 			'param_name'=>'sec_5_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'progress_title3',
// 					'heading'=>'Progress Title',
// 					'type'=>'textfield',
// 					'description'=>'Multiple skill name Will be Comma Separate, ex: HTML, CSS',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'progress_value3',
// 					'heading'=>'Progress Value',
// 					'type'=>'textfield',
// 					'description'=>' Type only number value, ex: 10',
// 					'group'=>'Tbd',
// 				),
// 			)
// 		),

// 		array(
// 			'group'=>'Php Fram.',
// 			'param_name'=>'php_framework',
// 			'heading'=>'Php Framework Title',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Php Fram.',
// 			'type'=>'param_group',
// 			'heading'=>'Php Framework Items',
// 			'param_name'=>'sec_6_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'progress_title4',
// 					'heading'=>'Progress Title',
// 					'type'=>'textfield',
// 					'description'=>'Multiple skill name Will be Comma Separate, ex: HTML, CSS',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'progress_value4',
// 					'heading'=>'Progress Value',
// 					'type'=>'textfield',
// 					'description'=>' Type only number value, ex: 10',
// 					'group'=>'Tbd',
// 				),
// 			)
// 		),

// 		array(
// 			'group'=>'Graphics Mult.',
// 			'param_name'=>'graphics_multimedia',
// 			'heading'=>'Graphics & Multimedia Title',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Graphics Mult.',
// 			'type'=>'param_group',
// 			'heading'=>'Graphics & Multimedia Items',
// 			'param_name'=>'sec_7_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'progress_title5',
// 					'heading'=>'Progress Title',
// 					'type'=>'textfield',
// 					'description'=>'Multiple skill name Will be Comma Separate, ex: HTML, CSS',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'progress_value5',
// 					'heading'=>'Progress Value',
// 					'type'=>'textfield',
// 					'description'=>' Type only number value, ex: 10',
// 					'group'=>'Tbd',
// 				),
// 			)
// 		),

// 		array(
// 			'group'=>'Mob. App Web',
// 			'param_name'=>'mobile_app_web',
// 			'heading'=>'Mobile App & Web Title',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),

// 		array(
// 			'group'=>'Mob. App Web',
// 			'type'=>'param_group',
// 			'heading'=>'Mobile App Web Items',
// 			'param_name'=>'sec_8_grp',
// 			'params'=>array(
// 			array(
// 					'param_name'=>'progress_title6',
// 					'heading'=>'Skill Name',
// 					'type'=>'textfield',
// 					'description'=>'Multiple skill name Will be Comma Separate, ex: HTML, CSS',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'progress_value6',
// 					'heading'=>'Progress Value',
// 					'type'=>'textfield',
// 					'description'=>' Type only number value, ex: 10',
// 					'group'=>'Tbd',
// 				),
// 			)
// 		),

// 	),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Office Gallery Section','text-donain'),
// 	 'description'=>'This is Office Gallery Addon',
// 	 'base'=>'section_9_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		// Service title

// 		array(
// 			'group'=>'Gallery Setting',
// 			'type'=>'attach_images',
// 			'heading'=>'Upload Gallery Images',
// 			'param_name'=>'gallery_images',
// 			'description'=>'Select images from media library.',
// 			'dependency' => array(
// 				'element' => 'source',
// 				'value' => 'media_library',
// 			),
// 		),

// 	),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Heading Title Border','text-donain'),
// 	 'description'=>'This is Heading Title Border Addon',
// 	 'base'=>'section_10_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		 array(
// 		 'param_name'=>'title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Title ',
// 		 'value'=>'',
// 		 ),
// 		 array(
// 		 'param_name'=>'sub_title',
// 		 'type'=>'textfield',
// 		 'heading'=>'Sub Title ',
// 		 'value'=>'',
// 		 ),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Partnership Section','text-donain'),
// 	 'description'=>'This is Partnership Addon',
// 	 'base'=>'section_11_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Partnership Setting',
// 			'param_name'=>'column_value',
// 			"class" => "",
// 			'heading'=>'Choose Layout Style',
// 			'type'=>'dropdown',
// 			'description'=>'3/4 Column & Icon top/Left Style Change',
// 			'value' => array(
// 			esc_html__( 'Select Column', 'js_composer' ) => 'select-column',
// 			esc_html__( 'column-3', 'js_composer' ) => 'column-3',
// 			esc_html__( 'column-4', 'js_composer' ) => 'column-4',
// 		),
// 		),

// 		 array(
// 			'group'=>'Partnership Setting',
// 			'type'=>'param_group',
// 			'heading'=>'Partnership Item',
// 			'param_name'=>'sec_11_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'partnership_title',
// 					'heading'=>'Partnership Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'partnership_icon_name',
// 					'heading'=>'Fontawesome Icon Name',
// 					'type'=>'textfield',
// 					'description'=>'Type Only Fontawesome 5 Icon Name ex: facebook',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'partnership_desc',
// 					'heading'=>'Description Text',
// 					'type'=>'textarea',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'partnership_seemore',
// 					'heading'=>'See More Text',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'partnership_lessmore',
// 					'heading'=>'See Less Text',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Partner Gallery Section','text-donain'),
// 	 'description'=>'This is Partner Gallery Addon',
// 	 'base'=>'section_12_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Partner Gallery Setting',
// 			'type'=>'param_group',
// 			'heading'=>'Partner Gallery Item',
// 			'param_name'=>'sec_12_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'gallery_title',
// 					'heading'=>'Gallery Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'gallery_image',
// 					'heading'=>'Upload Gallery Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Our Skills','text-donain'),
// 	 'description'=>'This is Our Skill Addon',
// 	 'base'=>'section_13_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'btn_title_1',
// 			'heading'=>'Button Title 1',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'btn_title_1_url',
// 			'heading'=>'Button Title 1 URL',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'btn_title_2',
// 			'heading'=>'Button Title 2',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'btn_title_2_url',
// 			'heading'=>'Button Title 2 URL',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'btn_title_3',
// 			'heading'=>'Button Title 3',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'btn_title_3_url',
// 			'heading'=>'Button Title 3 URL',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Skills',
// 			'type'=>'param_group',
// 			'heading'=>'Skills Item',
// 			'param_name'=>'sec_13_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'skill_title',
// 					'heading'=>'Skill Title Name',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'skill_value',
// 					'heading'=>'Skill Value Name',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 					'description'=>'Value Must be Only Number ex: 25',
// 				),

// 				array(
// 					'param_name'=>'skill_icon_image',
// 					'heading'=>'Upload Icon Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Our Portfolio Showcase','text-donain'),
// 	 'description'=>'This is Mobile Showcase Addon',
// 	 'base'=>'section_14_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'title',
// 			'heading'=>'Title Text',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'desc_content',
// 			'heading'=>'Description Content',
// 			'type'=>'textarea_html',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'portfolio_cat_item',
// 			"class" => "",
// 			'heading'=>'Choose Portfolio Category',
// 			'type'=>'dropdown',
// 			'description'=>'Choose Portfolio Post Items',
// 			'value' => array(
// 				esc_html__( 'Select Portfolio Category', 'js_composer' ) => 'select-portfolio-category',
// 				esc_html__( 'mobile-app', 'js_composer' ) => 'mobile-app',
// 				esc_html__( 'web-design-development', 'js_composer' ) => 'web-design-development',
// 				esc_html__( 'offshore-development', 'js_composer' ) => 'offshore-development',
// 				esc_html__( 'graphic-design', 'js_composer' ) => 'graphic-design',
// 		    ),

// 		),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Our Capabilities','text-donain'),
// 	 'description'=>'This is Our Capabilities Addon',
// 	 'base'=>'section_15_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'title',
// 			'heading'=>'Title Text',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'desc_content',
// 			'heading'=>'Description Content',
// 			'type'=>'textarea',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Android',
// 			'param_name'=>'table_heading1',
// 			'heading'=>'Table Heading',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Android',
// 			'type'=>'param_group',
// 			'heading'=>'Table Items',
// 			'param_name'=>'sec_3_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'table_title1',
// 					'heading'=>'Table Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'table_desc1',
// 					'heading'=>'Table description',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 		array(
// 			'group'=>'ISO/Iphone & Ipad',
// 			'param_name'=>'table_heading2',
// 			'heading'=>'Table Heading',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'ISO/Iphone & Ipad',
// 			'type'=>'param_group',
// 			'heading'=>'Table Items',
// 			'param_name'=>'sec_4_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'table_title2',
// 					'heading'=>'Table Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'table_desc2',
// 					'heading'=>'Table description',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 		array(
// 			'group'=>'Mobile-OWA',
// 			'param_name'=>'table_heading3',
// 			'heading'=>'Table Heading',
// 			'type'=>'textfield',
// 			'value'=>'',
// 		),
// 		array(
// 			'group'=>'Mobile-OWA',
// 			'type'=>'param_group',
// 			'heading'=>'Table Items',
// 			'param_name'=>'sec_5_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'table_title3',
// 					'heading'=>'Table Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'table_desc3',
// 					'heading'=>'Table description',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('Clients Says ','text-donain'),
// 	 'description'=>'This is Clients Says Addon',
// 	 'base'=>'section_16_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'title',
// 			'heading'=>'Title Text',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('How We Do Section','text-donain'),
// 	 'description'=>'This is How We Do Addon',
// 	 'base'=>'section_17_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'title',
// 			'heading'=>'Title Text',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'review_title',
// 			'heading'=>'Review Title Text',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'review_desc_content',
// 			'heading'=>'Review Description Content',
// 			'type'=>'textarea',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'review_image',
// 			'heading'=>'Upload Review Icon Image',
// 			'type'=>'attach_image',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Works',
// 			'type'=>'param_group',
// 			'heading'=>'Work Items',
// 			'param_name'=>'sec_17_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'work_title',
// 					'heading'=>'Work Item Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_desc',
// 					'heading'=>'Work Item Description',
// 					'type'=>'textarea',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'work_image',
// 					'heading'=>'Upload Work Item Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 	 ),

// 	));

// 	vc_map(array(
// 	 'name'=>__('All the features-clutter Section','text-donain'),
// 	 'description'=>'This is Features Clutter Addon',
// 	 'base'=>'section_18_base',
// 	 'category'=>'Tbd',
// 	 'icon'=> get_template_directory_uri().'/assets/images/icons/favicon.png',
// 	 'params'=>array(

// 		array(
// 			'group'=>'Setting',
// 			'param_name'=>'title',
// 			'heading'=>'Title Text',
// 			'type'=>'textfield',
// 			'value' =>'',
// 		),

// 		array(
// 			'group'=>'Features Items',
// 			'type'=>'param_group',
// 			'heading'=>'features Items',
// 			'param_name'=>'sec_18_grp',
// 			'params'=>array(
// 				array(
// 					'param_name'=>'feature_title',
// 					'heading'=>'Features Item Title ',
// 					'type'=>'textfield',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'feature_desc',
// 					'heading'=>'Feature Item Description',
// 					'type'=>'textarea',
// 					'group'=>'Tbd',
// 				),

// 				array(
// 					'param_name'=>'feature_image',
// 					'heading'=>'Upload Feature Item Image',
// 					'type'=>'attach_image',
// 					'group'=>'Tbd',
// 				),

// 			)
// 		),

// 	 ),

// 	));

//  }

// add_action('vc_before_init','consult_intigratewithvc');
