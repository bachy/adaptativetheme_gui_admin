<?php
/**
 * Override or insert variables into page templates.
 */
function adaptivetheme_gui_admin_preprocess_html(&$vars) {
	
	$heads = array();
	
	

	#  Mobile Viewport Fix
	# j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	# device-width : Occupy full width of the screen in its current orientation
	# initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	# maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width

	$heads['viewport'] = array(
	  '#tag' => 'meta',
	  '#attributes' => array(
	    'name' => 'viewport', 
	    'content' => 'width=device-width,initial-scale=1',
	  ),
	);



	# Add these icons links to your sub theme
	# or Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references

	// $head[] = '<link rel="apple-touch-icon" sizes="72x72" href="'. base_path() . path_to_theme() .'/touch-icon-ipad.png'.'"/>' . "\n";
	// $head[] = '<link rel="apple-touch-icon" sizes="114x114" href="'. base_path() . path_to_theme() .'/touch-icon-iphone4.png'.'"/>' . "\n";

	$heads['icon'] = array(
	  '#tag' => 'link',
	  '#attributes' => array(
	    'href' => base_path() . path_to_theme() .'/icon.png', 
	    'rel' => 'shortcut icon',
	    'type' => 'image/png',
	  ),
	);

	$heads['apple-touch-icon'] = array(
	  '#tag' => 'link',
	  '#attributes' => array(
	    'href' => base_path() . path_to_theme() .'/apple-touch-icon.png', 
	    'rel' => 'apple-touch-icon',
	  ),
	);

	
	foreach ($heads as $type=>$head)
		drupal_add_html_head($head, $type);
	


}
