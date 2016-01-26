<div id="sidebar-second" class="col-sm-3">
    <div class="widget-fm widget">
        <div class="newsletter">
            <div class="newsletter-info">
            <h3>Nyhedsbrev</h3>
            <p>Modtag nyheder fra hf2net,<br>
              så er du altid opdateret.</p>
            </div>
            <?php echo do_shortcode( '[wysija_form id="1"]' ); ?>
        </div>
        <?php if (is_home() || is_front_page()) : ?>
        <p class="represent-thumbnail"><img src="<?php echo ASSETS_DIR; ?>images/Aviser.jpg" alt=""></p>
        <div class="news-sidebar">
          <h3>Toårig hf i medierne</h3>
          <ul class="list-unstyled">
            <?php
              $post_home = get_posts( array( 'posts_per_page' => 2, 'category' => 24 ) );
              foreach ( $post_home as $post ) : setup_postdata( $post );
            ?>
            <li>
              <span class="news-time"><?php the_time( 'F Y' ); ?></span>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
          <?php endforeach; wp_reset_postdata(); ?>
          </ul>
          <a href="<?php echo get_permalink( 391 ); ?>">Se flere presseklip</a>
        </div>
        <h3><a href="<?php echo get_permalink( 401 ); ?>">Nyt fra ministeriet</a></h3>
        <h3><a href="<?php echo get_permalink( 497 ); ?>">Film fra  toårige hf-kurser</a></h3>
        <?php endif; ?>
        <?php get_template_part('template-parts/widgets/widgets','right'); ?>
    </div>
</div>