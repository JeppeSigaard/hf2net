<?php 

$mb[] = array(
    'id' => 'widgetareas',
    'title' => __( 'Widgetområder', 'rwmb' ),
    'pages' => array('page'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Widgets venstre', 'rwmb' ),
            'id'    => "widgets-left",
            'type' => 'taxonomy_advanced',
            'options'   => array(
                'taxonomy'  => 'tax_widget',
                'type' => 'checkbox_tree',
            ),
        ),
        
        array(
            'name'  => __( 'Widgets højre', 'rwmb' ),
            'id'    => "widgets-right",
            'type' => 'taxonomy_advanced',
            'desc'   => __('<br/><br/>Tilføj nye områder på <a href="'.admin_url('edit-tags.php?taxonomy=tax_widget').'">redigeringssiden for widgetområder</a>','rwmb'),
            'options'   => array(
                'taxonomy'  => 'tax_widget',
                'type' => 'checkbox_tree',
            ),
        ),
    ),
);