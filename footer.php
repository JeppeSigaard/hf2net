<footer id="footer" class="clearfix">
  <div class="footer-top">
    <div class="container">
      <div class="footer-sidebar col-sm-3">
        <div class="pupil-widget">
          <div class="widget">
            <h3><?php _e( 'For elever', 'ubpress' );?></h3>
            <p>
              <?php printf( __( 'Er du hf-studerende, eller tænker du på at blive det, så kan du finde relevante informationer %sher%s', 'ubpress'), '<a href="'.esc_url(home_url('/studerende/')).'">','</a>'); ?> <br>
            </p>
          </div>
          <img src="<?php echo ASSETS_DIR; ?>images/pupils.jpg">
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bar">
    <?php if ( ot_get_option('copyright-footer') && ot_get_option('copyright-footer') != '' ) echo ot_get_option('copyright-footer'); ?>
  </div>
  <div class="footer-list">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-xs-4">
          <div class="row">
            <?php
              if ( is_active_sidebar( 'sidebar-footer-1' ) ) {
                dynamic_sidebar( 'sidebar-footer-1' );
              }
            ?>
          </div>
        </div>
        <div class="col-sm-2 col-xs-4">
          <div class="row">
            <?php
              if ( is_active_sidebar( 'sidebar-footer-2' ) ) {
                dynamic_sidebar( 'sidebar-footer-2' );
              }
            ?>
          </div>
        </div>
        <div class="col-sm-2 col-xs-4">
          <div class="row">
            <?php
              if ( is_active_sidebar( 'sidebar-footer-3' ) ) {
                dynamic_sidebar( 'sidebar-footer-3' );
              }
            ?>
          </div>
        </div>
        <div class="col-sm-2 col-xs-4">
          <div class="row">
            <?php
              if ( is_active_sidebar( 'sidebar-footer-4' ) ) {
                dynamic_sidebar( 'sidebar-footer-4' );
              }
            ?>
          </div>
        </div>
        <div class="col-sm-2 col-xs-4">
          <div class="row">
            <?php
              if ( is_active_sidebar( 'sidebar-footer-5' ) ) {
                dynamic_sidebar( 'sidebar-footer-5' );
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-resume">
    <div class="container">
      <div class="row">
        <a href="javascript:void(0)" class="resume-click"><?php _e( 'Resumé', 'ubpress' ); ?></a>
        <div class="resume-show">
          <?php if ( ot_get_option('resume') && ot_get_option('resume') != '' ) echo ot_get_option('resume');?>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34384675-12', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>