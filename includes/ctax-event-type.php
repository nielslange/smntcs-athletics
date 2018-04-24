<?php
/**
 * Register custom taxonomy event type
 *
 * @since 1.0
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
add_action( 'init', 'register_ctax_event_type', 0 );
function register_ctax_event_type() {

	$labels = array(
		'name'                       => _x( 'Event Types', 'Taxonomy General Name', 'smntcs-athletics' ),
		'singular_name'              => _x( 'Event Type', 'Taxonomy Singular Name', 'smntcs-athletics' ),
		'menu_name'                  => __( 'Event Type', 'smntcs-athletics' ),
		'all_items'                  => __( 'All Event Types', 'smntcs-athletics' ),
		'parent_item'                => __( 'Parent Event Type', 'smntcs-athletics' ),
		'parent_item_colon'          => __( 'Parent Event Type:', 'smntcs-athletics' ),
		'new_item_name'              => __( 'New Event Type Name', 'smntcs-athletics' ),
		'add_new_item'               => __( 'Add New Event Type', 'smntcs-athletics' ),
		'edit_item'                  => __( 'Edit Event Type', 'smntcs-athletics' ),
		'update_item'                => __( 'Update Event Type', 'smntcs-athletics' ),
		'view_item'                  => __( 'View Event Type', 'smntcs-athletics' ),
		'separate_items_with_commas' => __( 'Separate Event Types with commas', 'smntcs-athletics' ),
		'add_or_remove_items'        => __( 'Add or remove Event Types', 'smntcs-athletics' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'smntcs-athletics' ),
		'popular_items'              => __( 'Popular Event Types', 'smntcs-athletics' ),
		'search_items'               => __( 'Search Event Types', 'smntcs-athletics' ),
		'not_found'                  => __( 'Not Found', 'smntcs-athletics' ),
		'no_terms'                   => __( 'No items', 'smntcs-athletics' ),
		'items_list'                 => __( 'Event Types list', 'smntcs-athletics' ),
		'items_list_navigation'      => __( 'Event Types list navigation', 'smntcs-athletics' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_in_menu'               => false,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => array(
			'slug'                   => 'event-type'
		),

	);

	register_taxonomy( 'event_type', 'event', $args );

}