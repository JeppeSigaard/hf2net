<ul id="flex-accordion-menu" class="list-unstyled">
  <li><a href="#">Ildsjæle</a>
    <ul>
    <?php $ildsjael = new WP_Query(array('post_type' => 'ildsjael', 'posts_per_page' => -1)); ?>
        <?php while ($ildsjael->have_posts()) : $ildsjael->the_post();  ?>
        <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_postdata();?>
    </ul>
  </li>
</ul>