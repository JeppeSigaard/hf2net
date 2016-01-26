<?php
    $forum_cat_parent = false;
    $forum_cat = wp_get_post_terms(get_the_ID(),'forum_cat');
    foreach($forum_cat as $fc){
        
        if ( $fc->parent === 0 ) {
           
            $forum_cat_parent = $fc->term_id;
        }
    }

    if ($forum_cat_parent) :
    
    $terms = get_terms('forum_cat',array('parent' => $forum_cat_parent,'orderby' => 'menu_order'));

?>

<ul id="flex-accordion-menu" class="list-unstyled">
<?php foreach ( $terms as $cat ) : ?>
  <li><a href="#"><?php echo $cat->name; ?></a>
    <ul>
        <?php
        $galleri = new WP_Query(array(
            'post_type' => 'forum',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'forum_cat',
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
<?php if(count($terms ) === 0) : foreach($forum_cat as $cat) : if ($cat->term_id === $forum_cat_parent) : ?>
<li><a href="#"><?php echo $cat->name; ?></a>
    <ul>
        <?php
        $galleri = new WP_Query(array(
            'post_type' => 'forum',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'forum_cat',
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

<?php endif; endforeach; endif;?>
</ul>
<?php endif; ?>