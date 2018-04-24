<?php
/*
Plugin Name:  SMNTCS Athletics
Plugin URI:   https://github.com/nielslange/smntcs-athletics
Description:  Manage results of sport events
Version:      1.0
Author:       Niels Lange
Author URI:   https://nielslange.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  smntcs-athletics
Domain Path:  /languages
*/

// Avoid direct plugin access
if ( ! defined( 'ABSPATH' ) ) { die( '¯\_(ツ)_/¯' ); }

// Load custom post types and custom taxonomies
include_once dirname( __FILE__ ) . '/includes/cpt-event.php';
include_once dirname( __FILE__ ) . '/includes/ctax-event-location.php';
include_once dirname( __FILE__ ) . '/includes/ctax-event-type.php';
include_once dirname( __FILE__ ) . '/includes/ctax-event-terrain.php';
include_once dirname( __FILE__ ) . '/includes/cpt-result.php';
include_once dirname( __FILE__ ) . '/includes/ctax-result-class.php';

function debug($data) {
	print('<pre>');
	print_r($data);
	print('</pre>');
}

// Load text domain
add_action( 'plugins_loaded', 'smntcs_athletics_plugins_loaded' );
function smntcs_athletics_plugins_loaded() {
	load_plugin_textdomain( 'smntcs-athletics', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

// Create custom menu
add_action( 'admin_menu', 'smntcs_athletics_admin_menu' );
function smntcs_athletics_admin_menu() {

	// Create custom parent menu item
	$page_title  = 'Athletics';
	$menu_title  = 'Athletics';
	$capability  = 'manage_options';
	$menu_slug   = 'athletics';
	$function    = null;
	$icon_url    = 'dashicons-awards';
	$position    = 4;
	add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

	// Add custom submenu item 'All Events'
	$parent_slug = 'athletics';
	$page_title  = 'All Events';
	$menu_title  = 'All Events';
	$capability  = 'read';
	$menu_slug   = 'edit.php?post_type=event';
	$function    = false;
	//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

	// Add custom submenu item 'Add Event'
	$parent_slug = 'athletics';
	$page_title  = 'Add Event';
	$menu_title  = 'Add Event';
	$capability  = 'read';
	$menu_slug   = 'post-new.php?post_type=event';
	$function    = false;
	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

	// Add custom submenu item 'Event Locations'
	$parent_slug = 'athletics';
	$page_title  = 'Event Locations';
	$menu_title  = 'Event Locations';
	$capability  = 'read';
	$menu_slug   = 'edit-tags.php?taxonomy=event_location&post_type=event';
	$function    = false;
	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

	// Add custom submenu item 'Event Types'
	$parent_slug = 'athletics';
	$page_title  = 'Event Types';
	$menu_title  = 'Event Types';
	$capability  = 'read';
	$menu_slug   = 'edit-tags.php?taxonomy=event_type&post_type=event';
	$function    = false;
	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

	// Add custom submenu item 'Event Types'
	$parent_slug = 'athletics';
	$page_title  = 'Event Terrains';
	$menu_title  = 'Event Terrains';
	$capability  = 'read';
	$menu_slug   = 'edit-tags.php?taxonomy=event_terrain&post_type=event';
	$function    = false;
	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

	// Add custom submenu item 'All Results'
	$parent_slug = 'athletics';
	$page_title  = 'All Results';
	$menu_title  = 'All Results';
	$capability  = 'read';
	$menu_slug   = 'edit.php?post_type=result';
	$function    = false;
	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

	// Add custom submenu item 'Add Result'
	$parent_slug = 'athletics';
	$page_title  = 'Add Result';
	$menu_title  = 'Add Result';
	$capability  = 'read';
	$menu_slug   = 'post-new.php?post_type=result';
	$function    = false;
	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

	// Add custom submenu item 'Result Classes'
	$parent_slug = 'athletics';
	$page_title  = 'Result Classes';
	$menu_title  = 'Result Classes';
	$capability  = 'read';
	$menu_slug   = 'edit-tags.php?taxonomy=result_class&post_type=result';
	$function    = false;
	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

}

add_action( 'admin_head', 'menu_highlight' );
function menu_highlight() {

	global $parent_file, $submenu_file, $post_type, $current_screen;

	//debug($current_screen);
	//die();

	if ( $post_type == 'event') {

		if ( isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'event_location' ) {
			$parent_file = 'athletics';
			$submenu_file = 'edit-tags.php?taxonomy=event_location&post_type=event';
		} elseif ( isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'event_type' ) {
			$parent_file = 'athletics';
			$submenu_file = 'edit-tags.php?taxonomy=event_type&post_type=event';
		} elseif ( isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'event_terrain' ) {
			$parent_file = 'athletics';
			$submenu_file = 'edit-tags.php?taxonomy=event_terrain&post_type=event';
		} elseif ( isset($current_screen->action) && $current_screen->action == 'add' ) {
			$parent_file = 'athletics';
			$submenu_file = 'post-new.php?post_type=event';
		} else {
			$parent_file = 'athletics';
			$submenu_file = 'edit.php?post_type=event';
		}

	} elseif ( $post_type == 'result' ) {

		if ( isset($_GET['taxonomy']) && $_GET['taxonomy'] == 'result_class' ) {
			$parent_file = 'athletics';
			$submenu_file = 'edit-tags.php?taxonomy=result_class&post_type=result';
		} elseif ( isset($current_screen->action) && $current_screen->action == 'add' ) {
			$parent_file = 'athletics';
			$submenu_file = 'post-new.php?post_type=result';
		} else {
			$parent_file = 'athletics';
			$submenu_file = 'edit.php?post_type=result';
		}

	}

}