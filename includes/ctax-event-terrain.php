<?php
/**
 * Register custom taxonomy event terrain
 *
 * @since 1.0
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
add_action( 'init', 'register_ctax_event_terrain', 0 );
function register_ctax_event_terrain() {

	$labels = array(
		'name'                       => _x( 'Event Terrains', 'Taxonomy General Name', 'smntcs-athletics' ),
		'singular_name'              => _x( 'Event Terrain', 'Taxonomy Singular Name', 'smntcs-athletics' ),
		'menu_name'                  => __( 'Event Terrain', 'smntcs-athletics' ),
		'all_items'                  => __( 'All Event Terrains', 'smntcs-athletics' ),
		'parent_item'                => __( 'Parent Event Terrain', 'smntcs-athletics' ),
		'parent_item_colon'          => __( 'Parent Event Terrain:', 'smntcs-athletics' ),
		'new_item_name'              => __( 'New Event Terrain Name', 'smntcs-athletics' ),
		'add_new_item'               => __( 'Add New Event Terrain', 'smntcs-athletics' ),
		'edit_item'                  => __( 'Edit Event Terrain', 'smntcs-athletics' ),
		'update_item'                => __( 'Update Event Terrain', 'smntcs-athletics' ),
		'view_item'                  => __( 'View Event Terrain', 'smntcs-athletics' ),
		'separate_items_with_commas' => __( 'Separate Event Terrains with commas', 'smntcs-athletics' ),
		'add_or_remove_items'        => __( 'Add or remove Event Terrains', 'smntcs-athletics' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'smntcs-athletics' ),
		'popular_items'              => __( 'Popular Event Terrains', 'smntcs-athletics' ),
		'search_items'               => __( 'Search Event Terrains', 'smntcs-athletics' ),
		'not_found'                  => __( 'Not Found', 'smntcs-athletics' ),
		'no_terms'                   => __( 'No items', 'smntcs-athletics' ),
		'items_list'                 => __( 'Event Terrains list', 'smntcs-athletics' ),
		'items_list_navigation'      => __( 'Event Terrains list navigation', 'smntcs-athletics' ),
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
			'slug'                   => 'event-terrain'
		),

	);

	register_taxonomy( 'event_terrain', 'event', $args );

}