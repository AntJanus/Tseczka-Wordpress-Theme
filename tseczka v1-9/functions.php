<?php

include('functions/columns.php');

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
register_sidebar(array('name'=>'footerRight',
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
	$ext = 'pre[id|name|class|style],iframe[align|longdesc|name|width|height|frameborder|scrolling|marginheight|marginwidth|src]';
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


// SCRIPT ENQUEUE
function my_scripts_method() {
   // register your script location, dependencies and version
   wp_register_script('custom_script',
       get_template_directory_uri() . '/js/imagebase.js',
       array('jquery'),
       '1.0' );
   // enqueue the script
   wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

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
