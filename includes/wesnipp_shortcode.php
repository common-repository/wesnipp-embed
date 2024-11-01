<?php
/**
  * CodePan Shortcode
  *
  * Creates the shortcode used for CodePen Enbeds
  *
  *	@param mixed Attribures $atts
  *
  * @return $codepen_shortcode
  *
  *	@since 0.1.0
  */
function wesnipp_shortcode( $atts ){
	// Get attibutes and set defaults
	extract(shortcode_atts(array(
		'href' => ''
	), $atts));
	// The Code to output  
	$wesnipp_shortcode = '<iframe src="https://wesnipp.com/beta/embeded/'.$href.'" width="100%" height="150" frameborder="0" marginheight="0"></iframe>';
	$wesnipp_shortcode .= '<script src="https://wesnipp.com/js/app/embeded.js"></script>';
	return $wesnipp_shortcode;
} 
?>



