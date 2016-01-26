<div id="sidebar-first" class="col-sm-3">
	<div class="sidebar-wrapper">
        <?php if ( is_single() && 'post' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','post'); } ?>
        <?php if ( is_single() && 'ildsjael' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','ildsjael'); } ?>
        <?php if ( is_single() && 'kursus' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','kursus'); } ?>
        <?php if ( is_single() && 'galleri' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','galleri'); } ?>
        <?php if ( is_single() && 'forum' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','forum'); } ?>
        <?php get_template_part('template-parts/widgets/widgets','left'); ?>
	</div>
	
</div>