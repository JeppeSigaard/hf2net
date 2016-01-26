<?php 

add_action( 'init', 'smamo_add_forum' );

function smamo_add_forum() {
	register_post_type( 'forum', array(
		
        'menu_icon' 		 => 'dashicons-admin-page',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'forum' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Fagligt forum', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Indlæg', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Fagligt forum', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Fagligt forum', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'indlæg', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny indlæg', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se indlæg', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find indlæg', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt indlæg.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}