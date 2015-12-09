<?php 

if ( ! is_admin() ) { add_filter( 'wp_get_nav_menu_items', 'smamo_latest_menu_items', 10, 3 ); }
function smamo_latest_menu_items( $items, $menu, $args ) {
 
    foreach ( $items as $item ) {
 
        $query = array('numberposts' => 1); 
        
        switch ($item->url) {
             case "#latest_post":
                $query['post_type'] = 'post';
                break;
                
            case "#latest_ildsjael":
                $query['post_type'] = 'ildsjael';
                break;
            
            case "#latest_kursus":
                $query['post_type'] = 'kursus';
                break;
                
            default:
                continue;
        }
        
        if ( !empty( $query['post_type'] ) ){
            $post_query = get_posts($query);
            if(!empty($post_query)){
                $item->url = get_permalink( $post_query[0]->ID );     
            }
        }
    }
 
    return $items;
}