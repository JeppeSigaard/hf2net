<?php 

$mb[] = array(
    'id' => 'on_home',
    'title' => __( 'Vis på forsiden', 'rwmb' ),
    'pages' => array('post'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Vis dette indlæg på forsiden', 'rwmb' ),
            'id'    => "on_home",
            'type' => 'checkbox',
            'std' => '0',
            ),
    ),
);