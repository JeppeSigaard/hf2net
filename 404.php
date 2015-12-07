<?php get_header(); ?>
<div id="main">
  <div class="container">
    <div class="row">
      <?php get_sidebar( 'left' ); ?>
      <div id="content" class="content-show col-sm-6">
        <h1 class="title"><?php _e( '404 - Siden blev ikke fundet.', 'ubpress' ); ?></h1>
        <div class="content-detail">
          <p><?php _e( 'Den ressource, du søger efter måske blevet fjernet, har skiftet navn eller er midlertidigt utilgængelig.', 'ubpress' ); ?></p>
        </div>
      </div>
      <?php get_sidebar( 'right' );?>
    </div>
  </div>
</div><!-- /#main -->
<?php get_footer(); ?>