<?php 

add_action( 'init', 'smamo_add_ildsjael' );

function smamo_add_ildsjael() {
	register_post_type( 'ildsjael', array(
		
        'menu_icon' 		 => 'dashicons-groups',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=forum',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'ildsjael' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail' ,'editor'),
        'labels'             => array(
            
            'name'               => _x( 'Ildsjæle', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Ildsjæl', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Ildsjæle', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Ildsjæle', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'ildsjæl', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny ildsjæl', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se ildsjæl', 'smamo' ),
            'all_items'          => __( 'Ildsjaele', 'smamo' ),
            'search_items'       => __( 'Find ildsjæl', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny ildsjæl.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}