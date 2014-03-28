<?php
/*
TO DO
* break up into separate files (like Widgets should be its own)
* clean up! / remove irrelevant stuff
*/

/* GLOBALS */
define('SS_DIR', get_stylesheet_directory());
define('SS_URI', get_stylesheet_directory_uri());
define('SIDEBAR_COUNT', 3);

/* LOAD SCRIPTS*/
function load_scripts() {
  wp_enqueue_style('main', SS_URI.'/style.css', false, null, 'all');
}

add_action( 'wp_enqueue_scripts', 'load_scripts');


/* FUNCTION LOADING
 * Comment out when necessary
*/

//extra columns
include('functions/columns.php');

//sidebars
include('functions/sidebars.php');

//roots extras
include('functions/roots-extras.php');

//menu
register_nav_menus(
		array(
		  'main-menu' => 'Main navigation menu',
		  'footer-nav' => 'Footer Navigation',
		  'super-nav' => 'Super Navigation'
		)
);


//post thumbnails
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size(150, 150, true);
}



// Tiny MCE improvements
function fb_change_mce_options($initArray) {
	$ext = 'pre[id|name|class|style],iframe[align|longdesc|name|width|height|frameborder|scrolling|marginheight|marginwidth|src],script[charset|defer|language|src|type]';
	if ( isset( $initArray['extended_valid_elements'] ) ) {
	$initArray['extended_valid_elements'] .= ',' . $ext;
	} else {
		$initArray['extended_valid_elements'] = $ext;
	}

	// maybe; set tiny paramter verify_html
	//$initArray['verify_html'] = false;
	return $initArray;
}
add_filter('tiny_mce_before_init', 'fb_change_mce_options');
add_editor_style('tiny-mce-style.css');

// Feeds
add_theme_support( 'automatic-feed-links' );
add_theme_support('custom-background');
// Exceprts
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');


//includes

require_once (SS_DIR . '/lib/metabox/sidebar-metaboxes.php');
