<?php get_header(); ?>
<div id="main">
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