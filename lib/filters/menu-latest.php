<?php 

if ( ! is_admin() ) { add_filter( 'wp_get_nav_menu_items', 'smamo_latest_menu_items', 10, 3 ); }
function smamo_latest_menu_items( $items, $menu, $args ) {
 
    foreach ( $items as $item ) {
 
        if($item->type === 'custom'){
        
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
        
        else if($item->type === 'taxonomy'){
            
            $query = array(
                'post_per_page' => 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => $item->object,
                        'field'    => 'term_id',
                        'terms'    => $item->object_id,
                        'operator' => 'IN',
                    ),
                ),
            );
            
            $menu_query = new WP_Query($query);
            
            while($menu_query->have_posts()) {
                $menu_query->the_post();
                    $item->url = get_permalink( get_the_ID() ); 
                wp_reset_postdata();
            }
        }
    }
 
    return $items;
}