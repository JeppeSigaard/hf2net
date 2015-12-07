<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array(
        array(
          'id'        => 'general_help',
          'title'     => __( 'Author Homepage', 'ubpress' ),
          'content'   => '<p>' . __( 'Please visit: <a href="http://www.uyenbac.net" target="_blank">UBTeam Homepage</a>', 'ubpress' ) . '</p>'
        ),
        array(
          'id'        => 'about_help',
          'title'     => __( 'About UBTeam', 'ubpress' ),
          'content'   => '<p>' . __( 'With UBTeam, We are one! This is our slogan. UBTeam was established in 2014 with many large and small projects to date. We hope to contribute to the development community growing internet Vietnam. Thank you!', 'ubpress' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'You are welcome :)', 'ubpress' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'Generelt', 'ubpress' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Fødder', 'ubpress' )
      ),
    ),
    'settings'        => array( 
     // General: About us
      array(
        'id'          => 'about-us',
        'label'       => __( 'Om os', 'ubpress' ),
        'desc'        => __( 'Mere introducere os her', 'ubpress' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'general',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      // General: Featured Slider
        array(
          'id'          => 'slider-list',
          'label'       => __( 'Slider liste', 'ubpress' ),
          'desc'        => __( 'Lav en liste over skyderen til hjemmesiden her.', 'ubpress' ),
          'std'         => '',
          'type'        => 'list-item',
          'section'     => 'general',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => '',
          'operator'    => 'and',
          'settings'    => array( 
            array(
              'id'          => 'slider-image',
              'label'       => __( 'Billede Upload', 'ubpress' ),
              'desc'        => __( 'Billede Upload til skyderen på her.', 'ubpress' ),
              'std'         => '',
              'type'        => 'upload',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'min_max_step'=> '',
              'class'       => '',
              'condition'   => '',
              'operator'    => 'and'
            ),
          ),
        ),
      // Footer: Copyright
      array(
        'id'          => 'copyright-footer',
        'label'       => __( 'Ophavsret', 'ubpress' ),
        'desc'        => __( 'Skrevet under webstedet ophavsret her', 'ubpress' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      // Footer: Resume
      array(
        'id'          => 'resume',
        'label'       => __( 'Resumé', 'ubpress' ),
        'desc'        => __( 'Skrivning resuméer fødder hjemmeside her', 'ubpress' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'footer',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}