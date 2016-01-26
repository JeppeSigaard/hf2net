<?php 

if(is_front_page() || is_home()){
    dynamic_sidebar('forsidens-widgets-hoejre');   
}

else if(is_single() && 'post' === get_post_type(get_the_ID())){
    dynamic_sidebar('nyhedssiders-widgets-hoejre');   
}


$widgets = get_post_meta(get_the_ID(), 'widgets-right',false);
if(!empty($widgets)){
    $areas = get_terms('tax_widget',array('hide_empty' => false,'include' => $widgets));
    foreach($areas as $area){
        dynamic_sidebar($area->slug);
    }
}
