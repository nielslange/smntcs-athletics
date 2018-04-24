<?php
/**
 * Register custom post type result
 *
 * @since 1.0
 * @see https://developer.wordpress.org/reference/functions/register_post_type/
 */
add_action( 'init', 'register_cpt_result', 0 );
function register_cpt_result() {

	$labels = array(
		'name'                  => _x( 'Results', 'Post Type General Name', 'smntcs-athletics' ),
		'singular_name'         => _x( 'Result', 'Post Type Singular Name', 'smntcs-athletics' ),
		'menu_name'             => __( 'Results', 'smntcs-athletics' ),
		'name_admin_bar'        => __( 'Result', 'smntcs-athletics' ),
		'archives'              => __( 'Result Archives', 'smntcs-athletics' ),
		'attributes'            => __( 'Result Attributes', 'smntcs-athletics' ),
		'parent_item_colon'     => __( 'Parent Result:', 'smntcs-athletics' ),
		'all_items'             => __( 'All Results', 'smntcs-athletics' ),
		'add_new_item'          => __( 'Add New Result', 'smntcs-athletics' ),
		'add_new'               => __( 'Add New Result', 'smntcs-athletics' ),
		'new_item'              => __( 'New Result', 'smntcs-athletics' ),
		'edit_item'             => __( 'Edit Result', 'smntcs-athletics' ),
		'update_item'           => __( 'Update Result', 'smntcs-athletics' ),
		'view_item'             => __( 'View Result', 'smntcs-athletics' ),
		'view_items'            => __( 'View Results', 'smntcs-athletics' ),
		'search_items'          => __( 'Search Result', 'smntcs-athletics' ),
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
		'label'                 => __( 'Results', 'smntcs-athletics' ),
		'description'           => __( 'Results Description', 'smntcs-athletics' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'result_class' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'result', $args );
}