<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/Blog">
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
<link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,300,400italic,400,600italic,600,700italic,700,800italic,800" rel="stylesheet" type="text/css">
<!-- schema.org -->
<meta itemprop="name" content="<?php bloginfo('name'); ?>" />
<meta itemprop="url" content="<?php bloginfo('url'); ?>" />
<meta itemprop="creator accountablePerson" content="<?php echo get_the_author(); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
<?php $templateUri = get_template_directory_uri(); ?>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body <?php body_class();?>>

<header class="nav-container nav-main nav-right">
    <div class="nav">
        <a href="<?php echo home_url(); ?>" class="nav-title emboss"><?php bloginfo('name'); ?></a>
        <?php wp_nav_menu( array('theme_location' => 'main-menu', 'depth' => 2, 'container' => false)); ?>
    </div>
</header>
