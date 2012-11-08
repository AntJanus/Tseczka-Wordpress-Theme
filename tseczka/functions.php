<?php

include('functions/columns.php');
// include('functions/htaccess.php'); <- optional, not optimized, may not work 100% everywhere

// CONTENT WIDTH
if ( ! isset( $content_width ) ) $content_width = 750;

// MENUS 
function register_my_menus() {
register_nav_menus(
		array(
		  'main' => 'Main navigation menu',
		  'footerNav' => 'Footer Navigation',
		  'superNav' => 'Super Navigation'
		)
);
}

add_action( 'init', 'register_my_menus' );

//POST THUMBNAILS
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size(630, 300, true); 
}

// SIDEBARS
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'main',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array('name'=>'footerIntro',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array('name'=>'footerLeft',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'footerMid',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',

));

register_sidebar(array('name'=>'footerEnd',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',

));


// EDITOR 
function fb_change_mce_options($initArray) {
	// Comma separated string od extendes tags
	// Command separated string of extended elements
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



/** FEEDS ***/
add_theme_support( 'automatic-feed-links' );
add_custom_background();

/* EXCERPTS */
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

remove_filter('get_the_excerpt', 'wp_trim_excerpt');


$url = 'ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'; // the URL to check against
$test_url = @fopen($url,'r'); // test parameters
if($test_url !== false) { // test if the URL exists
    function load_external_jQuery() { // load external file
        wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
        wp_register_script('jquery', 'ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'); // register the external file
        wp_enqueue_script('jquery'); // enqueue the external file
    }
	add_action('wp_enqueue_scripts', 'load_external_jQuery'); // initiate the function
} else {
    function load_local_jQuery() {
        wp_deregister_script('jquery'); // initiate the function
        wp_register_script('jquery', get_template_directory_uri().'/js/jquery.js', __FILE__, false, '1.7.2', true); // register the local file
        wp_enqueue_script('jquery'); // enqueue the local file
    }
add_action('wp_enqueue_scripts', 'load_local_jQuery'); // initiate the function
}



function cycle_method() {
   // register your script location, dependencies and version
   wp_register_script('cycle',
       get_template_directory_uri() . '/js/cycle.js',
       array('jquery'),
       '1.0' );
   // enqueue the script
   wp_enqueue_script('cycle');
}
add_action('wp_enqueue_scripts', 'cycle_method');




//CUSTOM BACKGROUND SUPPORT
add_custom_background();

/**************************** END HEADER *************************/
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '%s/images/default_header.jpg'); // %s is the template dir uri
define('HEADER_IMAGE_WIDTH', 1024); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 312);

// gets included in the site header
function header_style() {
    ?><style type="text/css">
        #headerImg {
            background: url(<?php header_image(); ?>) no-repeat;
			width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
			margin: 1.5em auto 0;
        }
    </style><?php
}
// gets included in the admin header
function admin_header_style() {
    ?><style type="text/css">
        #heading {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            background: no-repeat;
        }
    </style><?php
}

add_custom_image_header('header_style', 'admin_header_style');

/**************************** END HEADER *************************/


/**************************** SOME STUFF FROM ROOTS (https://github.com/retlehs/roots)************************/


// search query clean up
function tseczka_nice_search_redirect() {
  if (is_search() && strpos($_SERVER['REQUEST_URI'], '/wp-admin/') === false && strpos($_SERVER['REQUEST_URI'], '/search/') === false) {
    wp_redirect(home_url('/search/' . str_replace(array(' ', '%20'), array('+', '+'), urlencode(get_query_var('s')))), 301);
      exit();
  }
}

add_action('template_redirect', 'tseczka_nice_search_redirect');

function tseczka_search_query($escaped = true) {
  $query = apply_filters('tseczka_search_query', get_query_var('s'));
  if ($escaped) {
      $query = esc_attr($query);
  }
  return urldecode($query);
}

add_filter('get_search_query', 'tseczka_search_query');

function tseczka_request_filter($query_vars) {
  if (isset($_GET['s']) && empty($_GET['s'])) {
    $query_vars['s'] = " ";
  }
  return $query_vars;
}

add_filter('request', 'tseczka_request_filter');


// remove dashboard widgets 
function tseczka_remove_dashboard_widgets() {
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
  remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
  remove_meta_box('dashboard_primary', 'dashboard', 'normal');
  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
}

add_action('admin_init', 'tseczka_remove_dashboard_widgets');

// limit post revisions
if (!defined('WP_POST_REVISIONS')) { define('WP_POST_REVISIONS', 5); }
update_option('uploads_use_yearmonth_folders', 0);
update_option('upload_path', 'assets');

?>