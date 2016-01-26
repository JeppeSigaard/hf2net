<?php 

/**
 * Change the post menu to article
 */
function change_post_menu_text() {
  global $menu;
  global $submenu;

  // Change menu item
  $menu[5][0] = 'Nyheder';

  // Change post submenu
  $submenu['edit.php'][5][0] = 'Alle Nyheder';
  //$submenu['edit.php'][10][0] = 'Add Articles';
  //$submenu['edit.php'][16][0] = 'Articles Tags';
}

add_action( 'admin_menu', 'change_post_menu_text' );
