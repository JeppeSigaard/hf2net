<?php get_header(); ?>
<div id="main">
  <div class="container bg-desktop">
    <div class="row">
      <?php get_sidebar( 'left' ); ?>
      <div id="content" class="content-show col-sm-6">
        <h1 class="title"><?php _e( 'Søg sitet', 'ubpress' ); ?></h1>
        <div class="content-detail">
          <p><?php printf( __( 'Tast et eller flere søgeord.%sBemærk at "*" og "?" (wildcards) kan bruges.', 'ubpress' ), '<br>' ); ?></p>
          <form method="get" class="form-horizontal search-in-search" action="<?php echo esc_url( home_url() ); ?>" role="search">
            <div class="form-group">
              <label for="Search" class="col-md-2 col-sm-3 control-label"><?php _e( 'Søg efter', 'ubpress' );?>:</label>
              <div class="col-sm-7 col-md-8">
                <input type="text" name="s" class="form-control" id="s" value="<?php the_search_query(); ?>" x-webkit-speech="x-webkit-speech">
              </div>
              <div class="col-xs-2">
                <input type="submit" class="btn btn-default" value="<?php _e( 'Søg!', 'ubpress' );?>">
              </div>
            </div>
          </form>
          <p class="keyword-text"><?php printf( __( 'Søgeresultater for: %s', 'ubpress' ), get_search_query() ); ?></p>
          <?php
          $i = 1;
          if( have_posts() ) :
          while ( have_posts() ) : the_post();

          ?>
          <div class="item-search clearfix">
            <p><b><?php echo $i; ?>.</b>&nbsp;<a href="<?php the_permalink();?>"><?php the_title();?></a></p>
            <p class="search-des"><?php the_excerpt();?></p>
            <small class="url-search"><?php printf( __( 'URL - %s', 'ubpress' ), get_permalink() ); ?></small>
          </div>
          <?php
          $i++;
          endwhile;
          if ( function_exists('wp_pagenavi') ) :
                    wp_pagenavi();
                endif;
          else :
          ?>
          <p><em><?php printf( __( 'De følgende ord er på "overspringslisten" og er derfor ikke med i søgningen: "%s"', 'ubpress' ), get_search_query() ); ?></em></p>
          <p><em><?php _e( 'Ingen resultater fundet.', 'ubpress' );?></em></p>
          <?php
          endif;
          ?>
        </div>
      </div>      
      <?php get_sidebar( 'right' );?>
    </div>
  </div>
</div><!-- /#main -->
<?php get_footer(); ?>