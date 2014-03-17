<?php
/*
Template Name: Full Width Page With Slider
*/
?>
<?php get_header();?>

<section id="mainContent" class="container"><!-- MAIN CONTENT WRAPPER -->

  <section id="contentPosts" class="grid_12"><!-- content posts -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="slider">
<div id="innerSlide">
<?php
  $custom_fields = get_post_custom();
  $my_custom_field = $custom_fields['slide'];
  foreach ( $my_custom_field as $key => $value ){
	echo "<article>";
    echo $value;
	echo "</article>";
  }
?>
</div>
<div id="sNav">
<ul id="sNavList">
</ul>
</div>
</section>

<!-- START OF POST -->
<article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>

  <div class="postContent entry-content">
    <?php the_content(); ?>

  </div>
</article>
<!-- END OF POST -->
<?php endwhile; endif;?>
<div id="blog-nav">
      <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
    </div>
  </section>
</section>
<!-- END MAIN CONTENT WRAPPER -->

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
