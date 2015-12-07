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
    <?php if(is_home()) : ?>
    <p class="represent-thumbnail"><img src="<?php echo ASSETS_DIR; ?>images/Aviser.jpg" alt=""></p>
    <div class="news-sidebar">
      <h3>Toårig hf i medierne</h3>
      <ul class="list-unstyled">
        <?php
          $post_home = get_posts( array( 'posts_per_page' => 2, 'category' => 32 ) );
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
    <?php
        $post_info = get_queried_object();
        $cat_id = get_the_category( $post_info->ID );
      if ($cat_id[0]->parent == 7) : ?>
      <h3><img src="<?php echo ASSETS_DIR; ?>images/_V5G1812.jpg" width="210" height="150"></h3>
      <h3>Pressekontakt</h3>
      <p>
        <strong>Rektor Anne Frausing<br>
        </strong>HF-Centret Efterslægten<br>
        Telefon: 51 15 12 80<br><br>
        <strong>Forstander <br>
        Asger Rasmussen<br>
        </strong>FYNs HF-kursus<br>
        Telefon: 51 67 12 23<br><br>
        <strong>Vicerektor Preben Baltzersen</strong><br>
        Th. Langs HF &amp; VUC <br>
        Telefon: 60 94 98 25</p>
    <?php endif; ?>
    <?php if ($cat_id[0]->term_id == 1 || is_single( 472 ) || is_single( 482 )) : ?>
    <div style="margin-top:20px;"><p><a href="<?php echo get_permalink( 581 ); ?>"><img src="<?php echo ASSETS_DIR; ?>images/Galleri.jpg" width="245" height="175" border="0"></a></p>
    <h3>Galleri</h3>
    <p>Besøg <a href="<?php echo get_permalink( 581 ); ?>">galleriet</a>, som er fyldt med billeder fra hf-universet i høj opløsning og til fri anvendelse.</p>
    </div>
    <?php endif; ?>
  </div>
</div>