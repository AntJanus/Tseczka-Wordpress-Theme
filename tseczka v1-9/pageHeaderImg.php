<?php
/*
Template Name: Regular Page With Header
*/
?>
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
</script>

</head>
<body <?php body_class();?>>
<div id="header">
<div id="headerImg">

</div>
</div>
<header class="container">
  <div id="logo" class="grid_6">  <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1></div>
  <nav class="grid_6">	<?php wp_nav_menu( array('menu' => 'main', 'depth' => 3 )); ?> </nav>
  <div class="clearfix"></div>
</header>

<section id="mainContent" class="container"><!-- MAIN CONTENT WRAPPER -->
  
  <section id="contentPosts" class="grid_8"><!-- content posts -->
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- START OF POST -->
<article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>
  
  <h1 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>
  
  <!-- meta 1 -->
  <p class="meta  vcard"><time class="updated" datetime="<?php $postDate = get_the_date('c'); $postDate2 = get_the_date('d.m.Y'); echo $postDate ?>" pubdate> <?php echo $postDate2; ?></time>
    | <span class="byline fn author"> <?php the_author_posts_link(); ?></span>
     | <a href="mailto:<?php the_author_meta('email'); ?>" class="email author">email</a>
      | <?php the_category(', '); ?></span></p>
  <!-- end meta 1 -->
  
  <div class="postContent entry-content">
    <?php the_content(); ?>
    
    <!-- meta 2 -->
    <p class="postmetadata">Posted in
      <?php the_category(', '); ?><br /><?php the_tags(); ?><br />
      Source: <span class="vcard"><span class="source-org copyright"><?php bloginfo('name'); ?></span></span></p>
    <!-- end meta 2-->
    
  </div>
</article>
<!-- END OF POST -->
<?php endwhile; endif;?>
<div id="blogNav">
      <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
    </div>
  </section>
  <!-- end content posts -->
  
  <?php get_sidebar();?>
  <div class="clear">&nbsp;</div>
</section>
<!-- END MAIN CONTENT WRAPPER -->

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>