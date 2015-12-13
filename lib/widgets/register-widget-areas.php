<?php 

function smamo_widgets_init() {

    $terms = get_terms('tax_widget',array('orderby' => 'id','hide_empty' => false));
    foreach($terms as $widget){
        
        register_sidebar( array(
            'id'          => $widget->slug,
            'name'        => $widget->name,
            'description' => $widget->description,
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) ); 
    }
}
add_action( 'widgets_init', 'smamo_widgets_init' );