<?php get_header(); ?>
<?php
    $post_info = get_queried_object();
    if ( top_level_cat($post_info->ID) == 1 ) {
      ?>
      <style type="text/css">
        #menu-item-22 .dropdown-menu {
          display: block;
        }
      </style>
      <?php
    } else if ( top_level_cat($post_info->ID) == 3 ) {
      ?>
      <style type="text/css">
        #menu-item-18 .dropdown-menu {
          display: block;
        }
      </style>
      <?php
    } else if ( top_level_cat($post_info->ID) == 4 ) {
      ?>
      <style type="text/css">
        #menu-item-26 .dropdown-menu {
          display: block;
        }
      </style>
      <?php
    }
  ?>
<div id="main" class="clearfix">
  <div class="container bg-desktop">
    <div class="row">
      <?php get_sidebar( 'left' ); ?>
      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'content', 'page' );

      endwhile;
      ?>
      
      <?php get_sidebar( 'right' );?>
    </div>
  </div>
</div><!-- /#main -->
<?php get_footer(); ?>