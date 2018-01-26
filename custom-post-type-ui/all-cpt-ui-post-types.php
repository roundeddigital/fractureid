<!-- All of the selectable code snippets below are useful if you wish to migrate away from CPTUI and retain your existing registered post types or taxonomies.
Copy/paste the code below into your functions.php file. -->
<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Team Members.
	 */

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

	/**
	 * Post Type: Careers.
	 */

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

	/**
	 * Post Type: NPV Improvements.
	 */

	$labels = array(
		"name" => __( "NPV Improvements", "uncode-child" ),
		"singular_name" => __( "NPV Improvement", "uncode-child" ),
	);

	$args = array(
		"label" => __( "NPV Improvements", "uncode-child" ),
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
		"rewrite" => array( "slug" => "solutions", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-store",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "solutions", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
