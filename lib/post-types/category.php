<?php 

add_action( 'init', 'smamo_register_cat_for_post_types', 0 );

function smamo_register_cat_for_post_types() {
	$labels = array(
		'name'              => _x( 'Kategorier', 'taxonomy general name' ),
		'singular_name'     => _x( 'Kategori', 'taxonomy singular name' ),
		'search_items'      => __( 'Søg i Kategorier' ),
		'all_items'         => __( 'Alle Kategorier' ),
		'parent_item'       => __( 'Forælder' ),
		'parent_item_colon' => __( 'Forælder:' ),
		'edit_item'         => __( 'Rediger kategori' ),
		'update_item'       => __( 'Opdater kategori' ),
		'add_new_item'      => __( 'Tilføj ny kategori' ),
		'new_item_name'     => __( 'Ny kategori' ),
		'menu_name'         => __( 'Kategorier' ),
	);

    
    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'forum_cat' ),
	);

	register_taxonomy( 'forum_cat', array( 'forum'), $args );

}