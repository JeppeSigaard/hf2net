<div id="sidebar-first" class="col-sm-3">
	<div class="sidebar-wrapper">
        <?php if ( is_single() && 'post' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','post'); } ?>
        <?php if ( is_single() && 'ildsjael' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','ildsjael'); } ?>
        <?php if ( is_single() && 'kursus' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','kursus'); } ?>
	</div>
	<?php $widgets = wp_get_post_terms(get_the_ID(), 'tax_widget',array('orderby' => 'id'));
    foreach($widgets as $widget){dynamic_sidebar($widget->slug);}?>
</div>