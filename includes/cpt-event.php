<?php
/**
 * Register custom post type event
 * 
 * @since 1.0
 * @see https://developer.wordpress.org/reference/functions/register_post_type/
 */
add_action( 'init', 'register_cpt_event', 0 );
function register_cpt_event() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'smntcs-athletics' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'smntcs-athletics' ),
		'menu_name'             => __( 'Events', 'smntcs-athletics' ),
		'name_admin_bar'        => __( 'Event', 'smntcs-athletics' ),
		'archives'              => __( 'Event Archives', 'smntcs-athletics' ),
		'attributes'            => __( 'Event Attributes', 'smntcs-athletics' ),
		'parent_item_colon'     => __( 'Parent Event:', 'smntcs-athletics' ),
		'all_items'             => __( 'All Events', 'smntcs-athletics' ),
		'add_new_item'          => __( 'Add New Event', 'smntcs-athletics' ),
		'add_new'               => __( 'Add New Event', 'smntcs-athletics' ),
		'new_item'              => __( 'New Event', 'smntcs-athletics' ),
		'edit_item'             => __( 'Edit Event', 'smntcs-athletics' ),
		'update_item'           => __( 'Update Event', 'smntcs-athletics' ),
		'view_item'             => __( 'View Event', 'smntcs-athletics' ),
		'view_items'            => __( 'View Events', 'smntcs-athletics' ),
		'search_items'          => __( 'Search Event', 'smntcs-athletics' ),
		'not_found'             => __( 'Not found', 'smntcs-athletics' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'smntcs-athletics' ),
		'featured_image'        => __( 'Featured Image', 'smntcs-athletics' ),
		'set_featured_image'    => __( 'Set featured image', 'smntcs-athletics' ),
		'remove_featured_image' => __( 'Remove featured image', 'smntcs-athletics' ),
		'use_featured_image'    => __( 'Use as featured image', 'smntcs-athletics' ),
		'insert_into_item'      => __( 'Insert into item', 'smntcs-athletics' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'smntcs-athletics' ),
		'items_list'            => __( 'Items list', 'smntcs-athletics' ),
		'items_list_navigation' => __( 'Items list navigation', 'smntcs-athletics' ),
		'filter_items_list'     => __( 'Filter items list', 'smntcs-athletics' ),
	);

	$args = array(
		'label'                 => __( 'Events', 'smntcs-athletics' ),
		'description'           => __( 'Events Description', 'smntcs-athletics' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'event_location', 'event_type', 'event_terrain' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => 'athletics',
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'event', $args );
}