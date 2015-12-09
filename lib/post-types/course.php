<?php 

add_action( 'init', 'smamo_add_course' );

function smamo_add_course() {
	register_post_type( 'kursus', array(
		
        'menu_icon' 		 => 'dashicons-calendar',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'kursus' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Kurser og konferencer', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Kursus', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Kurser', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Kurser', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj nyt ', 'kursus', 'smamo' ),
            'add_new_item'       => __( 'Tilføj nyt', 'smamo' ),
            'new_item'           => __( 'Ny kursus', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se kursus', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find kursus', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt kursus.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}