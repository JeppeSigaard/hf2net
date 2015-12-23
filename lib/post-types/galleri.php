<?php 

add_action( 'init', 'smamo_add_galleri' );

function smamo_add_galleri() {
	register_post_type( 'galleri', array(
		
        'menu_icon' 		 => 'dashicons-format-gallery',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'galleri' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Gallerier', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Galleri', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Galleri', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Galleri', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'galleri', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny galleri', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se galleri', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find galleri', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt galleri.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

add_action( 'init', 'smamo_register_gallery_type', 0 );

function smamo_register_gallery_type() {
	$labels = array(
		'name'              => _x( 'Typer', 'taxonomy general name' ),
		'singular_name'     => _x( 'type', 'taxonomy singular name' ),
		'search_items'      => __( 'Søg i Typer' ),
		'all_items'         => __( 'Alle Typer' ),
		'parent_item'       => __( 'Forælder' ),
		'parent_item_colon' => __( 'Forælder:' ),
		'edit_item'         => __( 'Rediger type' ),
		'update_item'       => __( 'Opdater type' ),
		'add_new_item'      => __( 'Tilføj ny type' ),
		'new_item_name'     => __( 'Nytype' ),
		'menu_name'         => __( 'Typer' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type' ),
	);

	register_taxonomy( 'type', array( 'galleri' ), $args );

}