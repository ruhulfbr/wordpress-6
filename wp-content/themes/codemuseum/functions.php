<?php


/*
* My Theme Function
*/

// ALl Default theme function here
include_once('inc/default.php');


// Theme CSS and jQuery File calling
include_once('inc/enqueue.php');


//Theme Function
include_once('inc/theme_function.php');


// Menu Register
include_once('inc/menu_register.php');


// Widgets Register
include_once('inc/widgets_register.php');


// Custom post type register
include_once('inc/custom_post_type.php');



// Short Code
include_once('inc/shortcode.php');

// WP Bekrey ShortCode
include_once('inc/bekrey_shortcode.php');

// WP Bekrey Short Code
include_once('inc/bekrey_shortcode_elements.php');





 function wporg_add_custom_box() {
        $screens = [ 'service' ];
        foreach ( $screens as $screen ) {
            add_meta_box(
                'wporg_box_id',                 // Unique ID
                'Pricing',      // Box title
                'wporg_custom_box_html',  // Content callback, must be of type callable
                $screen                            // Post type
            );
        }
    }
    function wporg_custom_box_html( $post ) {
        $value = get_post_meta( $post->ID, 'service_price', true );
        ?>
        <label for="ems_product_price">Price</label>
        <input type="text" name="ems_product_price" id="ems_product_price" class="postbox" value="<?= $value ?>" placeholder="Price">
        <?php
    }
    add_action( 'add_meta_boxes', 'wporg_add_custom_box' );
    function wporg_save_postdata( $post_id ) {
        if ( array_key_exists( 'ems_product_price', $_POST ) ) {
            update_post_meta(
                $post_id,
                'service_price',
                $_POST['ems_product_price']
            );
        }
    }
    add_action( 'save_post', 'wporg_save_postdata' );



add_filter( 'wpex_gallery_metabox_post_types', function( $types ) {
	$types[] = 'service';
	return $types;
});



add_action( 'add_meta_boxes', 'cxc_media_uploader_meta_box' );
function cxc_media_uploader_meta_box() {
	add_meta_box( 'cxc-media-field', 'Media Field', 'cxc_media_uploader_meta_box_func', 'service', 'normal', 'high' );
}


function cxc_media_uploader_meta_box_func( $post ) {

	$banner_img = get_post_meta( $post->ID, 'cxc_post_banner_img', true );
	?>
	<table cellspacing="10" cellpadding="10">
		<tr>
			<td>Banner Image</td>
			<td>
				<?php echo cxc_multi_media_uploader_field( 'cxc_post_banner_img', $banner_img ); ?>
			</td>
		</tr>
	</table>
	<?php

}
function cxc_multi_media_uploader_field( $name, $value = '' ) {

	$image = '">Add Media';
	$image_str = '';
	$image_size = 'full';
	$display = 'none';
	$value = explode( ',', $value );

	if ( !empty( $value ) ) {
		foreach ( $value as $values ) {
			if ( $image_attributes = wp_get_attachment_image_src( $values, $image_size ) ) {
				$image_str .= '<li data-attechment-id=' . $values . '><a href="' . $image_attributes[0] . '" target="_blank"><img src="' . $image_attributes[0] . '" /></a><i class="dashicons dashicons-no delete-img"></i></li>';
			}
		}
	}

	if($image_str){
		$display = 'inline-block';
	}
	return '<div class="cxc-multi-upload-medias"><ul>' . $image_str . '</ul><a href="#" class="cxc_multi_upload_image_button button' . $image . '</a><input type="hidden" class="attechments-ids ' . $name . '" name="' . $name . '" id="' . $name . '" value="' . esc_attr( implode( ',', $value ) ) . '" /><a href="#" class="cxc_multi_remove_image_button button" style="display:inline-block;display:' . $display . '">Remove media</a></div>';

}

// Save Meta Box values.
add_action( 'save_post', 'cxc_meta_box_save' );

function cxc_meta_box_save( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
		return;
	}

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}
	
	if( isset( $_POST['cxc_post_banner_img'] ) ){
		update_post_meta( $post_id, 'cxc_post_banner_img', $_POST['cxc_post_banner_img'] );
	}
}


function cxc_add_admin_media_scripts() {
	
	wp_enqueue_style( 'admin-custom-style', get_template_directory_uri().'/assets/css/custom.css', false, '1.1', 'all' );
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	wp_enqueue_script('admin-custom-script', get_template_directory_uri().'/assets/js/custom.js', NULL, NULL, true);

}
add_action( 'admin_enqueue_scripts', 'cxc_add_admin_media_scripts' );


function service_custom_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_image' => 'Image',
        'title' => 'Title',
        'comments' => '<span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span>',
        'date' => 'Date'
     );
    return $columns;
}
add_filter('manage_service_posts_columns' , 'service_custom_columns');

function service_custom_columns_data( $column, $post_id ) {
    switch ( $column ) {
    case 'featured_image':
        the_post_thumbnail( 'thumbnail' );
        break;
    }
}
add_action( 'manage_service_posts_custom_column' , 'service_custom_columns_data', 10, 2 ); 


