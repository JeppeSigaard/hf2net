<?php get_header(); ?>
<div id="main">
  <div class="container bg-desktop">
    <div class="row">
      <?php get_sidebar( 'left' ); ?>
      <div id="content" class="col-sm-6">
        <?php get_template_part( 'inc/featured-slider' ); ?>
        <h1 class="title"><?php _e( 'Nyt fra hf2net.dk', 'ubpress' );?></h1>
        <?php
          $args = array( 'posts_per_page' => -1, 'meta_key' => 'on_home', 'meta_value' => 1 );
          $post_list = get_posts( $args );
          if ($post_list) :
        ?>
        <div class="content-home">
          <ul class="home-news-list list-unstyled">
            <?php foreach ( $post_list as $post ) : setup_postdata( $post ); ?>
            <li>
              <a href="<?php the_permalink();?>"><?php the_title();?></a>
              <?php ubpress_excerpt( 'length_post_excerpt', 'more_excerpt' ); ?>
            </li>
            <?php
              endforeach; 
              wp_reset_postdata();
            ?>
          </ul>
        </div>
        <?php endif; ?>
      </div>
      <?php get_sidebar( 'right' );?>
    </div>
  </div>
</div><!-- /#main -->
<?php get_footer(); ?>