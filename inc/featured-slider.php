<?php if ( ot_get_option('slider-list') && ot_get_option('slider-list') != '' ) : ?>
<div class="featured-slider">
  <ul class="bxslider">
    <?php foreach ( ot_get_option('slider-list') as $slider ) : ?>
    <li><img src="<?php echo $slider['slider-image']?>" alt="<?php bloginfo( 'name' ); ?>" /></li>
	<?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>