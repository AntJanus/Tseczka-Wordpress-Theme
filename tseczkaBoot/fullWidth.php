<?php
/*
Template Name: Full Width
*/
?>
<?php get_header();?>

<section id="mainContent" class="container"><!-- MAIN CONTENT WRAPPER -->
  <div class="row">
  <section id="contentPosts" class="span12"><!-- content posts -->
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- START OF POST -->
<article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>
  
  <h1 class="entry-title item fn"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>
  
  <!-- meta 1 -->

  <!-- end meta 1 -->
  
  <div class="postContent entry-content">
    <?php the_content(); ?>
    
    <!-- meta 2 -->
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
  </div>
</section>
<!-- END MAIN CONTENT WRAPPER -->

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>