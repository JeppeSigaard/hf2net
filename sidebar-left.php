<div id="sidebar-first" class="col-sm-3">
	<div class="sidebar-wrapper">
        <?php if ( is_single() && 'post' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','post'); } ?>
        <?php if ( is_single() && 'ildsjael' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','ildsjael'); } ?>
        <?php if ( is_single() && 'kursus' == get_post_type(get_the_ID()) )  { get_template_part('template-parts/flexnav/flexnav','kursus'); } ?>
        
        <?php if (is_home() || is_front_page() ) : ?>
		
        <div class="about-widget widget">
		  <h3><?php _e( 'Om hf2net.dk', 'ubpress' ); ?></h3>
		  <div class="about-us">
		  	<?php if ( ot_get_option('about-us') ) echo ot_get_option('about-us');?>
		  </div>
		</div>
		<?php endif; ?>
		<?php if ( is_page( 7 ) ) : ?>
		<div id="under_menu">
	        <p>&nbsp;</p>
	        <h3><a href="<?php echo get_permalink( 406 ); ?>">Se en oversigt med  de presse-ansvarlige fra de enkelte kurser i hf2net.dk</a></h3>
	        <p>&nbsp;</p>
        </div>
		<?php endif; ?>
		<?php
			if(is_single() && $cat_id[0]->parent == 7 || is_single() && $cat_id[0]->parent == 24) :
		?>
			<div id="under_menu">
                <p><a href="<?php echo get_permalink( 581 ); ?>"><img src="<?php echo ASSETS_DIR; ?>images/Galleri.jpg" width="245" height="175" border="0"></a></p>
                <h3>Galleri</h3>
                <p>Besøg <a href="<?php echo get_permalink( 581 ); ?>">galleriet</a>, som er fyldt med billeder fra hf-universet i høj opløsning og til fri anvendelse.                        </p>
                <h3><a href="<?php echo get_permalink( 401 ); ?>">Nyheder fra <br>
                Undervisningsministeriet</a></h3>
            </div>
		<?php endif; ?>
		<?php if(is_single( 127 )) : ?>
		<div id="under_menu">
            <h3><a href="<?php echo get_permalink( 406 ); ?>">Se en oversigt med  de presse-ansvarlige fra de enkelte kurser i hf2net.dk</a></h3>
        </div>
        <?php endif; ?>
        <?php if (is_single( 401 )) : ?>
		<div id="under_menu">
            <p>&nbsp;</p>
            <p><img src="<?php echo ASSETS_DIR; ?>images/Logo_000.gif" width="208" height="109"></p>
            <p>&nbsp;</p>
            <p align="left"></p>
        </div>
    	<?php endif; ?>
    	<?php if (is_single( 472 ) || is_single( 482 )) : ?>
		<div id="under_menu">
            <h3><a href="<?php echo get_permalink( 401 ); ?>">Nyheder fra Undervisningsministeriet</a></h3>
            <p align="left"></p>
        </div>
    	<?php endif; ?>
	</div>
</div>