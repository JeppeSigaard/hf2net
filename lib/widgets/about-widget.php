<?php 

class smamo_about_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
    // Base ID of your widget
    'smamo_subscribe_widget', 

    // Widget name will appear in UI
    __('Om hf2net.dk widget', 'smamo'), 

    // Widget description
    array( 'description' => __( 'Widget, der viser om-tekst fra theme options', 'smamo' ), ) 
    );
    }

    // FRONT END
    public function widget( $args, $instance ) {
        
        echo $args['before_widget']; ?>

        <div class="about-widget widget">
            <h3><?php _e( 'Om hf2net.dk', 'ubpress' ); ?></h3>
            <div class="about-us">
                <?php if ( ot_get_option('about-us') ) echo ot_get_option('about-us');?>
            </div>
		</div>
        
        <?php echo $args['after_widget']; 
    }

    // BACKEND
    public function form( $instance ) {
        
        echo '<p>&nbsp;</p>';
        
    }

    // OPDATER
    public function update( $new_instance, $old_instance ) {

        return $instance;

    }

} 









// Registrer ekstra widgets
add_action( 'widgets_init', 'smamo_load_widgets' );
function smamo_load_widgets() {
	register_widget( 'smamo_about_widget' );
}
