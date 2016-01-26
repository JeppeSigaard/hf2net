<?php 

add_action( 'init', 'smamo_add_contacts' );

function smamo_add_contacts() {
	register_post_type( 'kontakt', array(
		
        'menu_icon' 		 => 'dashicons-businessman',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'kontakt' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Kontaktkort', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Kontaktkort', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Kontaktkort', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Kontaktkort', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'kontaktkort', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny kontaktkort', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se kontaktkort', 'smamo' ),
            'all_items'          => __( 'Kontakter', 'smamo' ),
            'search_items'       => __( 'Find kontaktkort', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt kontaktkort.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
    
}

add_action( 'init', 'smamo_register_contact_tax', 0 );
    
    function smamo_register_contact_tax() {
    	$labels = array(
    		'name'              => _x( 'Grupper', 'taxonomy general name' ),
    		'singular_name'     => _x( 'Gruppe', 'taxonomy singular name' ),
    		'search_items'      => __( 'Søg i Grupper' ),
    		'all_items'         => __( 'Alle Grupper' ),
    		'parent_item'       => __( 'Forælder' ),
    		'parent_item_colon' => __( 'Forælder:' ),
    		'edit_item'         => __( 'Rediger gruppe' ),
    		'update_item'       => __( 'Opdater gruppe' ),
    		'add_new_item'      => __( 'Tilføj ny gruppe' ),
    		'new_item_name'     => __( 'Ny gruppe' ),
    		'menu_name'         => __( 'Grupper' ),
    	);
    
    	$args = array(
    		'hierarchical'      => true,
    		'labels'            => $labels,
    		'show_ui'           => true,
    		'show_admin_column' => true,
    		'query_var'         => true,
    		'rewrite'           => array( 'slug' => 'gruppe' ),
    	);
    
    	register_taxonomy( 'gruppe', array( 'kontakt' ), $args );
    
    }