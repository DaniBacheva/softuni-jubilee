<?php

/**
 * Register a custom post type called "subject".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_register_subject_cpt() {
	$labels = array(
		'name'                  => _x( 'Subjects', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Subject', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Subjects', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Subject', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Subject', 'softuni' ),
		'new_item'              => __( 'New Subject', 'softuni' ),
		'edit_item'             => __( 'Edit Subject', 'softuni' ),
		'view_item'             => __( 'View Subject', 'softuni' ),
		'all_items'             => __( 'All Subjects', 'softuni' ),
		'search_items'          => __( 'Search Subjects', 'softuni' ),
		'parent_item_colon'     => __( 'Parent Subjects:', 'softuni' ),
		'not_found'             => __( 'No Subjects found.', 'softuni' ),
		'not_found_in_trash'    => __( 'No Subjects found in Trash.', 'softuni' ),
		'featured_image'        => _x( 'Subject Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'archives'              => _x( 'Subject archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni' ),
		'insert_into_item'      => _x( 'Insert into Subject', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Subject', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni' ),
		'filter_items_list'     => _x( 'Filter Subjects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni' ),
		'items_list_navigation' => _x( 'Subjects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni' ),
		'items_list'            => _x( 'Subjects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'subject' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'subject', $args );
}

add_action( 'init', 'softuni_register_subject_cpt' );


/**
 * Register taxonomy for our "subject".
 *
 * void return
 */

function softuni_register_subject_category_taxonomy() {
    $labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'softuni' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'softuni' ),
		'search_items'      => __( 'Search Categories', 'softuni' ),
		'all_items'         => __( 'All Categories', 'softuni' ),
		'parent_item'       => __( 'Parent Category', 'softuni' ),
		'parent_item_colon' => __( 'Parent Category:', 'softuni' ),
		'edit_item'         => __( 'Edit Category', 'softuni' ),
		'update_item'       => __( 'Update Category', 'softuni' ),
		'add_new_item'      => __( 'Add New Category', 'softuni' ),
		'new_item_name'     => __( 'New Category Name', 'softuni' ),
		'menu_name'         => __( 'Category', 'softuni' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'category' ),
	);

    register_taxonomy( 'subject-category', 'subject', $args );
}

add_action( 'init', 'softuni_register_subject_category_taxonomy' );


/**
* Explanation
* Metabox Registration: The add_meta_box function creates a metabox for the your_custom_post_type post type.
* Metabox Display: The callback function renders a text input field for entering "Custom Text."
* Data Saving: The save_post action saves the text entered in the metabox when the post is saved.
* Gutenberg Compatibility: Registering the meta field with show_in_rest => true makes it accessible in the REST API, which is useful for integrating with the block editor.
* This setup ensures that your metabox is compatible with both the Classic Editor and Gutenberg. Let me know if you'd like to expand this with specific Gutenberg integrations or additional fields! 

*/
 /**
 * Subject Metabox main function where we'll register metaboxes
 *
 * @return void
 */

function subject_details_metabox() {
    add_meta_box(
        'subject_details_metabox_id',       	// Unique ID for the metabox
        'Subject Details',                  	// Title of the metabox
        'subject_details_metabox_callback', 	// Callback function that renders the metabox
        'subject',        					// Post type where it will appear
        'side',                         		// Context: where on the screen (side, normal, or advanced)
        'default',                       		// Priority: default, high, low
		array(
			'__block_editor_compatible_meta_box' => true,
			'__back_compat_meta_box'             => false,
		)
    );
}
add_action( 'add_meta_boxes', 'subject_details_metabox' );


/**
 * Shows the mark up of the metabox field
 */

function subject_details_metabox_callback( $post ) {
	
    // Add a nonce field for security
    wp_nonce_field( 'subject_details_metabox_nonce_action', 'subject_details_metabox_nonce' );
    $subject_hours = get_post_meta( $post->ID, 'subject_hours', true );
    echo '<label for="subject_hours">Learning Hours: </label>';
    echo '<input type="text" id="subject_hours" name="subject_hours" value="' . esc_attr( $subject_hours ) . '" style="width: 100%;" />';
}

/**
 * Function that is triggered when the save button is clicked
 */

function your_custom_save_metabox( $post_id ) {
    // Check for nonce security
    if ( ! isset( $_POST['subject_details_metabox_nonce'] ) ||
         ! wp_verify_nonce( $_POST['subject_details_metabox_nonce'], 'subject_details_metabox_nonce_action' ) ) {
        return;
    }
    // Check for autosave or bulk edit
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Check user permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
	if ( isset( $_POST['_inline_edit'] ) ) {
		return;
	}
    if ( isset( $_POST['subject_hours'] ) ) {
        update_post_meta( $post_id, 'subject_hours', sanitize_text_field( $_POST['subject_hours'] ) );
    }
}

add_action( 'save_post', 'your_custom_save_metabox' );