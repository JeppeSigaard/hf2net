<?php
    $cat_id = get_the_category( get_the_ID() );
    if ($cat_id[0]->parent != 0 ) :
    $categories = get_categories( array( 'child_of' => $cat_id[0]->parent ) );
    if($categories) : 
?>
<ul id="flex-accordion-menu" class="list-unstyled">
<?php foreach ( $categories as $cat ) : ?>
  <li><a href="#"><?php echo $cat->name; ?></a>
    <ul>
      <?php
      $post_list = get_posts( array( 'orderby' => 'date', 'order' => 'DESC','posts_per_page' => -1, 'category' => $cat->term_id ) );
      foreach ( $post_list as $post ) : setup_postdata( $post );
      ?>
      <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
      <?php endforeach; wp_reset_postdata();?>
    </ul>
  </li>
<?php endforeach; ?>
</ul>
<?php endif; endif; ?>