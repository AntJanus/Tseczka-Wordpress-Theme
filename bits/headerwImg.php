<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php wp_title(); ?>
</title>

<!-- FAVICON -->
<link rel="shortcut icon" href="favicon.ico" />
<meta name="title" content="<?php wp_title(''); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
<meta name="DC.title" content="<?php wp_title(''); ?>">
<meta name="DC.description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>">
<meta name="DC.language" scheme="ISO639-1" content="en">
<meta name="DC.publisher" content="<?php bloginfo('name');?>">
<!-- END DUBLIN CORE -->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
<?php $templateUri = get_template_directory_uri(); ?>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<script>
jQuery('#mainContent').imageBase();
</script>

</head>
<body <?php body_class();?>>
<div id="header">

</div>
<header class="container">
  <div id="logo" class="grid_6">  <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1></div>
  <nav class="grid_6">	<?php wp_nav_menu( array('menu' => 'main', 'depth' => 3 )); ?> </nav>
  <div class="clearfix"></div>
</header>