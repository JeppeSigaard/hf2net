<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php do_action( 'ubp_meta' ); ?>

<?php wp_head(); ?>
<!--[if lt IE 9]>
  <script src="<?php echo ASSETS_DIR; ?>js/html5shiv.min.js"></script>
  <script src="<?php echo ASSETS_DIR; ?>js/respond.min.js"></script>
<![endif]-->
</head>
  <body <?php body_class();?>>
    <header id="header" class="clearfix">
      <div class="banner-top">
        <div class="container">
          <div class="row">
            <img src="<?php echo ASSETS_DIR; ?>images/banner-top.jpg" alt="<?php bloginfo( 'name' ); ?>">
            <div class="menu-top">
              <ul class="list-inline">
                <li><a href="<?php echo esc_url( home_url( '/' ) );?>" title="Home"><img src="<?php echo ASSETS_DIR; ?>images/home.png" alt="Home"></a></li>
                <li><a href="javascript:void(0)" onclick="window.print();" title="Print"><img src="<?php echo ASSETS_DIR; ?>images/print.png" alt="Print"></a></li>
                <li><a href="" title="Sitemap"><img src="<?php echo ASSETS_DIR; ?>images/sitemap.png" alt="Sitemap"></a></li>
              </ul>
            </div>
            <div class="logo">
              <a href="<?php echo esc_url( home_url( '/' ) );?>" class="img-logo"><img src="<?php echo ASSETS_DIR; ?>images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-primary">
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="row">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-bar" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
              </div>
              <div class="collapse navbar-collapse" id="menu-bar">
                <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'menu-primary-first',
                      'depth' => 2,
                      'container' => false,
                      'menu_class' => 'menu-primary-left nav navbar-nav',
                      'walker' => new wp_bootstrap_navwalker()
                    )
                  );
                ?>
                <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'menu-primary-second',
                      'container' => false,
                      'menu_class' => 'menu-primary-right navbar-right list-unstyled',
                    )
                  );
                ?>
              </div><!-- /.navbar-collapse -->
            </div>
          </div><!-- /.container -->
        </nav>
        <div class="bar-helper">
          <div class="container">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </header><!-- /#header -->