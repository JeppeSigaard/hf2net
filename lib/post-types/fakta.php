<?php 

add_action( 'init', 'smamo_add_fakta' );

function smamo_add_fakta() {
	register_post_type( 'fakta', array(
		
        'menu_icon' 		 => 'dashicons-admin-page',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'fakta' ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'thumbnail','editor', 'page-attributes'),
        'labels'             => array(
            
            'name'               => _x( 'Fakta', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Fakta', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Fakta', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Fakta', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'side', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny side', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se side', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find side', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny side.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}