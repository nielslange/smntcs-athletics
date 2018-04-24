<?php
/**
 * Register custom taxonomy result class
 *
 * @since 1.0
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
add_action( 'init', 'register_ctax_result_class', 0 );
function register_ctax_result_class() {

	$labels = array(
		'name'                       => _x( 'Result Classs', 'Taxonomy General Name', 'smntcs-athletics' ),
		'singular_name'              => _x( 'Result Class', 'Taxonomy Singular Name', 'smntcs-athletics' ),
		'menu_name'                  => __( 'Result Class', 'smntcs-athletics' ),
		'all_items'                  => __( 'All Result Classs', 'smntcs-athletics' ),
		'parent_item'                => __( 'Parent Result Class', 'smntcs-athletics' ),
		'parent_item_colon'          => __( 'Parent Result Class:', 'smntcs-athletics' ),
		'new_item_name'              => __( 'New Result Class Name', 'smntcs-athletics' ),
		'add_new_item'               => __( 'Add New Result Class', 'smntcs-athletics' ),
		'edit_item'                  => __( 'Edit Result Class', 'smntcs-athletics' ),
		'update_item'                => __( 'Update Result Class', 'smntcs-athletics' ),
		'view_item'                  => __( 'View Result Class', 'smntcs-athletics' ),
		'separate_items_with_commas' => __( 'Separate Result Classs with commas', 'smntcs-athletics' ),
		'add_or_remove_items'        => __( 'Add or remove Result Classs', 'smntcs-athletics' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'smntcs-athletics' ),
		'popular_items'              => __( 'Popular Result Classs', 'smntcs-athletics' ),
		'search_items'               => __( 'Search Result Classs', 'smntcs-athletics' ),
		'not_found'                  => __( 'Not Found', 'smntcs-athletics' ),
		'no_terms'                   => __( 'No items', 'smntcs-athletics' ),
		'items_list'                 => __( 'Result Classs list', 'smntcs-athletics' ),
		'items_list_navigation'      => __( 'Result Classs list navigation', 'smntcs-athletics' ),
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
			'slug'                   => 'result-class'
		),

	);

	register_taxonomy( 'result_class', 'result', $args );

}