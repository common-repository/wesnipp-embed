<?php
/*
Plugin Name: WeSnipp Embed
Plugin URI: 
Version: 1.0
Author: @osternaud_clem
Description: Easily Include WeSnipp Embeds on your WordPress Blog
Author URI: http://myressources.com
Text Domain: wesnipp-embed
License: GPL3
*/

/*===============================================================================
	Plugin Constants
===============================================================================*/
// Plugin URL Constant
if ( !defined( 'WESNIPP_PLUGIN_URL' ) ){
	define( 'WESNIPP_PLUGIN_URL', WP_PLUGIN_URL . '/' . str_replace(basename( __FILE__), "" ,plugin_basename(__FILE__)));
}
// Plugin Directory Constant
if ( !defined( 'WESNIPP_PLUGIN_DIR' ) ){
	define( 'WESNIPP_PLUGIN_DIR', WP_PLUGIN_DIR  . '/' . str_replace(basename( __FILE__), "" ,plugin_basename(__FILE__)));

}
// Plugin Domain Constant
if ( !defined( 'WESNIPP_DOMAIN' ) ) {
		define( 'WESNIPP_DOMAIN', 'wesnipp-embed' );
}	
/*===============================================================================
	Includes
===============================================================================*/
// Required class.wesnipp-tinymce-button.php
require(WESNIPP_PLUGIN_DIR.'includes/class.wesnipp-tinymce-button.php');
// Required class.wesnipp_wp_quicktag.php
require(WESNIPP_PLUGIN_DIR.'includes/class.wesnipp_wp_quicktag.php');
// Required wesnipp_shortcode.php
require(WESNIPP_PLUGIN_DIR.'includes/wesnipp_shortcode.php');

/*===============================================================================
	Classes
===============================================================================*/
// New instance of the wesnipp_tinymce_btn() Class 
new wesnipp_tinymce_btn('|','wesnipp_embed', WESNIPP_PLUGIN_URL.'tinymce/wesnipp-tinymce.js');
// New instance of the wesnipp_add_quicktags() Class
new wesnipp_add_quicktags('WeSnipp','WeSnipp', '[WeSnipp href=aBcdE ]','','','Insert WeSnipp Embed');
/*===============================================================================
	Actions and Filters
===============================================================================*/
// Action for cpe_shortcode() function in cpe_shortcode.php
add_shortcode('WeSnipp', 'wesnipp_shortcode');
?>