<?php
add_action('after_setup_theme', 'uncode_language_setup');
function uncode_language_setup()
{
	load_child_theme_textdomain('uncode', get_stylesheet_directory() . '/languages');
}

function theme_enqueue_styles()
{
	$production_mode = ot_get_option('_uncode_production');
	$resources_version = ($production_mode === 'on') ? null : rand();
	$parent_style = 'uncode-style';
	$child_style = array('uncode-custom-style');
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/library/css/style.css', array(), $resources_version);
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', $child_style, $resources_version);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


/* ============================================================================ CUSTOM POST TYPES ============== */

function cptui_register_my_cpts() {

	/********************* 
  	* SERVICES
	*********************/

		$labels = array(
			"name" => __( "Services", "uncode-child" ),
			"singular_name" => __( "Service", "uncode-child" ),
		);

		$args = array(
			"label" => __( "Services", "uncode-child" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "services", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-store",
			"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
			"taxonomies" => array( "category", "post_tag", "service_category" ),
		);

		register_post_type( "services", $args );

	/*********************
  	* TEAM MEMBERS
  *********************/

		$labels = array(
			"name" => __( "Team Members", "uncode-child" ),
			"singular_name" => __( "Team Member", "uncode-child" ),
		);

		$args = array(
			"label" => __( "Team Members", "uncode-child" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "team", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-groups",
			"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
			"taxonomies" => array( "category", "post_tag", "team_member_category" ),
		);

		register_post_type( "team", $args );

	/*********************
  	* EVENTS
  *********************/

		$labels = array(
			"name" => __( "Events", "uncode-child" ),
			"singular_name" => __( "Event", "uncode-child" ),
		);

		$args = array(
			"label" => __( "Events", "uncode-child" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "events", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-palmtree",
			"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
			"taxonomies" => array( "category", "post_tag", "event_category" ),
		);

		register_post_type( "events", $args );

	/*********************
  	* PRESS WRITEUPS
  *********************/

		$labels = array(
			"name" => __( "Press Writeups", "uncode-child" ),
			"singular_name" => __( "Press Writeup", "uncode-child" ),
		);

		$args = array(
			"label" => __( "Press Writeups", "uncode-child" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "press", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-megaphone",
			"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
			"taxonomies" => array( "category", "post_tag", "press_category" ),
		);

		register_post_type( "press", $args );

	/*********************
  	* CAREERS
  *********************/

		$labels = array(
			"name" => __( "Careers", "uncode-child" ),
			"singular_name" => __( "Career", "uncode-child" ),
		);

		$args = array(
			"label" => __( "Careers", "uncode-child" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "careers", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-businessman",
			"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
			"taxonomies" => array( "category", "post_tag", "career_categories" ),
		);

		register_post_type( "careers", $args );

	/*********************
  	* LOCATIONS
  *********************/

		$labels = array(
			"name" => __( "Locations", "uncode-child" ),
			"singular_name" => __( "Location", "uncode-child" ),
		);

		$args = array(
			"label" => __( "Locations", "uncode-child" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "locations", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-location",
			"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
			"taxonomies" => array( "category", "post_tag", "location_category" ),
		);

		register_post_type( "locations", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/* ============================================================================ CUSTOM TAXONOMIES ============== */

function cptui_register_my_taxes() {

  /********************************
  	* TEAM MEMBER CATEGORIES
  ********************************/

	$labels = array(
		"name" => __( "Team Member Categories", "uncode-child" ),
		"singular_name" => __( "Team Member Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Team Member Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Team Member Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'team_member_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "team_member_category", array( "team" ), $args );

  /********************************
  	* EVENT CATEGORIES
  ********************************/

	$labels = array(
		"name" => __( "Event Categories", "uncode-child" ),
		"singular_name" => __( "Event Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Event Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Event Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'event_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "event_category", array( "events" ), $args );

  /********************************
  	* PRESS WRITEUP CATEGORIES
  ********************************/

	$labels = array(
		"name" => __( "Press Writeup Categories", "uncode-child" ),
		"singular_name" => __( "Press Writeup Categories", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Press Writeup Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Press Writeup Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'press_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "press_category", array( "press" ), $args );

  /********************************
  	* CAREER CATEGORIES
  ********************************/

	$labels = array(
		"name" => __( "Career Categories", "uncode-child" ),
		"singular_name" => __( "Career Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Career Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Career Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'career_categories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "career_categories", array( "careers" ), $args );

  /********************************
  	* LOCATION CATEGORIES
  ********************************/

	$labels = array(
		"name" => __( "Location Categories", "uncode-child" ),
		"singular_name" => __( "Location Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Location Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Location Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'location_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "location_category", array( "locations" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );

