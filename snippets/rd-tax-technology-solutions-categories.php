<?php

function cptui_register_my_taxes_technology_solution_categories() {

	/**
	 * Taxonomy: Technology Solution Categories.
	 */

	$labels = array(
		"name" => __( "Technology Solution Categories", "uncode-child" ),
		"singular_name" => __( "Technology Solution Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Technology Solution Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Technology Solution Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'technology_solution_categories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "technology_solution_categories", array( "solutions" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_technology_solution_categories' );
 ?>
