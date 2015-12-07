<?php
/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function other_category() {

	$labels = array(
		'name'                       => _x( 'Andre Kategorier', 'Taxonomy General Name', 'ubpress' ),
		'singular_name'              => _x( 'Andre Kategorier', 'Taxonomy Singular Name', 'ubpress' ),
		'menu_name'                  => __( 'Andre Kategorier', 'ubpress' ),
		'all_items'                  => __( 'Alle Andre Kategorier', 'ubpress' ),
		'parent_item'                => __( 'Moderselskab Andre Kategorier', 'ubpress' ),
		'parent_item_colon'          => __( 'Moderselskab Andre Kategorier:', 'ubpress' ),
		'new_item_name'              => __( 'Ny Andre Kategorier Navn', 'ubpress' ),
		'add_new_item'               => __( 'Tilføj Ny Andre Kategorier', 'ubpress' ),
		'edit_item'                  => __( 'Rediger Andre Kategorier', 'ubpress' ),
		'update_item'                => __( 'Opdater Andre Kategorier', 'ubpress' ),
		'view_item'                  => __( 'Se Andre Kategorier', 'ubpress' ),
		'separate_items_with_commas' => __( 'Adskil Andre kategorier med kommaer', 'ubpress' ),
		'add_or_remove_items'        => __( 'Tilføj eller fjern Andre kategorier', 'ubpress' ),
		'choose_from_most_used'      => __( 'Vælg mellem de mest anvendte', 'ubpress' ),
		'search_items'               => __( 'Søg andre kategorier', 'ubpress' ),
		'not_found'                  => __( 'Ikke fundet', 'ubpress' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'other-category', array( 'post' ), $args );
}

add_action( 'init', 'other_category' );