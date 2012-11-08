<?php get_header();?>

<section id="mainContent" class="container"><!-- MAIN CONTENT WRAPPER -->
  
  <section id="contentPosts" class="grid_12"><!-- content posts -->
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
  $custom_fields = get_post_custom();
  $my_custom_field = $custom_fields['slide'];
	if($my_custom_field != NULL && !empty($my_custom_field)){
?>
<section id="slider">
<div id="innerSlide">
<?php
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
<?php 
}
?>
<!-- START OF POST -->
<article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>
  
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
  <div class="clear">&nbsp;</div>
</section>
<!-- END MAIN CONTENT WRAPPER -->

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>