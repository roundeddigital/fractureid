<?php

function cptui_register_my_cpts_solutions() {

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

add_action( 'init', 'cptui_register_my_cpts_solutions' );

 ?>
