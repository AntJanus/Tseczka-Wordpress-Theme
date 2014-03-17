<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1" />
<title>
<?php wp_title(); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link rel="shortcut icon" href="favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
<?php $templateUri = get_template_directory_uri(); ?>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body <?php body_class();?>>

<header class="row">
  <div id="logo" class="large-6 columns">  <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1></div>
  <nav class="large-6 columns">	<?php wp_nav_menu( array('theme_location' => 'main', 'depth' => 3 )); ?></nav>
</header>
