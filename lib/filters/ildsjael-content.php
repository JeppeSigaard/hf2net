<?php 

/* Add meta fields to rendered content area for post type ildsjael */
add_filter('the_content','smamo_ildsjael_content');
function smamo_ildsjael_content($content){
    if(is_single() && 'ildsjael' === get_post_type( get_the_ID()) ){
        
        $ild_name = get_post_meta(get_the_ID(),'ild_name',true);
        $ild_pos = get_post_meta(get_the_ID(),'ild_pos',true);
        $ild_course = get_post_meta(get_the_ID(),'ild_course',true);
        $ild_quote = get_post_meta(get_the_ID(),'ild_quote',true);
        
        $ild_content = get_the_post_thumbnail(get_the_ID(),'full');
        
        if( $ild_name && $ild_pos && $ild_course && $ild_quote ){
            
            $ild_content .= '<h2>"'. $ild_quote .'"</h2>';
            $ild_content .= '<p><strong>Ildsjæl</strong>: ' . $ild_name . '<br/>';
            $ild_content .= '<strong>Stilling</strong>: ' . $ild_pos . '<br/>';
            $ild_content .= '<strong>Kursus</strong>: ' . $ild_course . '<br/></p>';

            $content = $ild_content . $content;
        }
    }
    return $content;
};