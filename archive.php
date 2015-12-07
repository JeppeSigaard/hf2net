<?php get_header(); ?>
<div id="main">
  <div class="container bg-desktop">
    <div class="row">
      <?php get_sidebar( 'left' ); ?>
      <div id="content" class="content-show col-sm-6">
        <h1 class="title"><?php single_cat_title();?></h1>
        <div class="content-detail">
        <?php
          $cat = get_queried_object();
          if ( $cat->parent == 0 ) :
        ?>
        <?php if ( is_category( 3 ) ) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="box-link">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
          </div>
        <?php endwhile; ?>
        <?php 
          $categories = get_categories( array('child_of' => 3, 'hide_empty' => 0 ) );
          if ($categories) :
            foreach ($categories as $category) :
        ?>
          <div class="box-link">
            <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
          </div>
        <?php endforeach; endif; ?>
        <?php endif; ?>
        <?php 
          $categories = get_categories( array('child_of' => $cat->term_id, 'hide_empty' => 0 ) );
          if ($categories) :
            foreach ($categories as $category) :
        ?>
          <div class="box-link">
            <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
          </div>
        <?php endforeach; endif; ?>
        <?php else : ?>
            <div class="category-description"><?php echo category_description(); ?></div>
        <?php endif; ?>
        </div>
      </div>
      <?php get_sidebar( 'right' );?>
    </div>
  </div>
</div><!-- /#main -->
<?php get_footer(); ?>