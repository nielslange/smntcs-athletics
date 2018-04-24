<?php
// Register custom taxonomy event location
add_action( 'init', 'register_ctax_event_location', 0 );
function register_ctax_event_location() {

	$labels = array(
		'name'                       => _x( 'Event Locations', 'Taxonomy General Name', 'smntcs-athletics' ),
		'singular_name'              => _x( 'Event Location', 'Taxonomy Singular Name', 'smntcs-athletics' ),
		'menu_name'                  => __( 'Event Location', 'smntcs-athletics' ),
		'all_items'                  => __( 'All Event Locations', 'smntcs-athletics' ),
		'parent_item'                => __( 'Parent Event Location', 'smntcs-athletics' ),
		'parent_item_colon'          => __( 'Parent Event Location:', 'smntcs-athletics' ),
		'new_item_name'              => __( 'New Event Location Name', 'smntcs-athletics' ),
		'add_new_item'               => __( 'Add New Event Location', 'smntcs-athletics' ),
		'edit_item'                  => __( 'Edit Event Location', 'smntcs-athletics' ),
		'update_item'                => __( 'Update Event Location', 'smntcs-athletics' ),
		'view_item'                  => __( 'View Event Location', 'smntcs-athletics' ),
		'separate_items_with_commas' => __( 'Separate Event Locations with commas', 'smntcs-athletics' ),
		'add_or_remove_items'        => __( 'Add or remove Event Locations', 'smntcs-athletics' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'smntcs-athletics' ),
		'popular_items'              => __( 'Popular Event Locations', 'smntcs-athletics' ),
		'search_items'               => __( 'Search Event Locations', 'smntcs-athletics' ),
		'not_found'                  => __( 'Not Found', 'smntcs-athletics' ),
		'no_terms'                   => __( 'No items', 'smntcs-athletics' ),
		'items_list'                 => __( 'Event Locations list', 'smntcs-athletics' ),
		'items_list_navigation'      => __( 'Event Locations list navigation', 'smntcs-athletics' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_in_menu'               => 'athletics',
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => array(
			'slug'                   => 'event-location'
		),

	);

	register_taxonomy( 'event_location', 'event', $args );

}