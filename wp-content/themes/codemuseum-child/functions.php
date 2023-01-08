<?php

function cdm_child_assets_call(){
	wp_enqueue_style('cdm-child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'cdm_child_assets_call');


/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_book_init() {
	$labels = array(
		'name'                  => _x( 'Books', 'Post type general name', 'codemuseum' ),
		'singular_name'         => _x( 'Book', 'Post type singular name', 'codemuseum' ),
		'menu_name'             => _x( 'Books', 'Admin Menu text', 'codemuseum' ),
		'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'codemuseum' ),
		'add_new'               => __( 'Add New', 'codemuseum' ),
		'add_new_item'          => __( 'Add New Book', 'codemuseum' ),
		'new_item'              => __( 'New Book', 'codemuseum' ),
		'edit_item'             => __( 'Edit Book', 'codemuseum' ),
		'view_item'             => __( 'View Book', 'codemuseum' ),
		'all_items'             => __( 'All Books', 'codemuseum' ),
		'search_items'          => __( 'Search Books', 'codemuseum' ),
		'parent_item_colon'     => __( 'Parent Books:', 'codemuseum' ),
		'not_found'             => __( 'No books found.', 'codemuseum' ),
		'not_found_in_trash'    => __( 'No books found in Trash.', 'codemuseum' ),
		'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'codemuseum' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'codemuseum' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'codemuseum' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'codemuseum' ),
		'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'codemuseum' ),
		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'codemuseum' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'codemuseum' ),
		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'codemuseum' ),
		'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'codemuseum' ),
		'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'codemuseum' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'book', $args );
}

add_action( 'init', 'wpdocs_codex_book_init' );