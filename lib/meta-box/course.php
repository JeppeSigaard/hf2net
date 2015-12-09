<?php 

    $mb[] = array(
        'id' => 'time',
        'title' => __( 'Tider', 'rwmb' ),
        'pages' => array('kursus'),
        'context' => 'normal',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            
            array(
                'name'  => __( 'Starttid', 'rwmb' ),
                'id'    => "course_start",
                'type' => 'datetime',
            ),
            
            array(
                'name'  => __( 'Sluttid', 'rwmb' ),
                'id'    => "course_end",
                'type' => 'datetime',
            ),
        ),
    );    