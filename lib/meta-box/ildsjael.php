<?php 

$mb[] = array(
    'id' => 'information',
    'title' => __( 'Info', 'rwmb' ),
    'pages' => array('ildsjael'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Navn', 'rwmb' ),
            'id'    => "ild_name",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Stilling', 'rwmb' ),
            'id'    => "ild_pos",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Kursus', 'rwmb' ),
            'id'    => "ild_course",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Citat', 'rwmb' ),
            'id'    => "ild_quote",
            'type' => 'textarea',
        ),
    ),
);