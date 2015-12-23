<?php
    $types = get_terms('type');
    if($types) : 
?>
<ul id="flex-accordion-menu" class="list-unstyled">
<?php foreach ( $types as $cat ) : ?>
  <li><a href="#"><?php echo $cat->name; ?></a>
    <ul>
        <?php
        $galleri = new WP_Query(array(
            'post_type' => 'galleri',
            'tax_query' => array(
                array(
                    'taxonomy' => 'type',
                    'field'    => 'slug',
                    'terms'    => $cat->slug,
                ),
            ),
        ));
        
        while($galleri->have_posts()) : $galleri->the_post();
        
        ?>
      <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
      <?php endwhile; wp_reset_postdata();?>
    </ul>
  </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>