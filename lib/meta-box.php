<?php 

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );
function smamo_add_boxes(){

    $mb = array();
    
    // Add meta boxes
    require 'meta-box/ildsjael.php';
    require 'meta-box/course.php';
    
    return $mb;

}
