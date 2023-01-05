<?php


//Custom post type services
/**
 * Register a custom post type called "Service".
 *
 * @see get_post_type_labels() for label keys.
 */
function cdm_custom_post_service() {
  $labels = array(
    'name'                  => _x( 'service', 'Post type general name', 'codemuseum' ),
    'singular_name'         => _x( 'Service', 'Post type singular name', 'codemuseum' ),
    'menu_name'             => _x( 'Services', 'Admin Menu text', 'codemuseum' ),
    'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'codemuseum' ),
    'add_new'               => __( 'Add New', 'codemuseum' ),
    'add_new_item'          => __( 'Add New Service', 'codemuseum' ),
    'new_item'              => __( 'New Service', 'codemuseum' ),
    'edit_item'             => __( 'Edit Service', 'codemuseum' ),
    'view_item'             => __( 'View Service', 'codemuseum' ),
    'all_items'             => __( 'All Services', 'codemuseum' ),
    'search_items'          => __( 'Search Services', 'codemuseum' ),
    'parent_item_colon'     => __( 'Parent Services:', 'codemuseum' ),
    'not_found'             => __( 'No Services found.', 'codemuseum' ),
    'not_found_in_trash'    => __( 'No Services found in Trash.', 'codemuseum' ),
    'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'codemuseum' ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'codemuseum' ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'codemuseum' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'codemuseum' ),
    'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'codemuseum' ),
    'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'codemuseum' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'codemuseum' ),
    'filter_items_list'     => _x( 'Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'codemuseum' ),
    'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'codemuseum' ),
    'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'codemuseum' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'service' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
  );

  register_post_type( 'service', $args );
}

add_action( 'init', 'cdm_custom_post_service' );


?>