<?php $get_cat = get_the_category( $post_info->ID ); ?>
<div id="content" class="content-show col-sm-6">
  <h1 class="title"><?php the_title();?></h1>
  <div class="content-detail<?php if ( $get_cat[0]->parent == 13 ) echo ' gallery'; ?>">
    <?php the_content();?>
  </div>
</div>