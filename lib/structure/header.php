<?php
/**
 * UBPress Framework.
 *
 * @package UBPress\Header
 * @author  UBTeam
 * @license GPL-2.0+
 * @link    http://thegioitech.com/themes/hf2net/
 */

add_action( 'ubp_meta', 'ubpress_meta_tags' );
/**
 * Meta tags for theme
 * @since 2.1.0
 */
function ubpress_meta_tags() {
?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo ASSETS_DIR; ?>images/favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
}