<?php get_header();?>

<section id="mainContent" class="row"><!-- MAIN CONTENT WRAPPER -->

  <section id="contentPosts" class="large-12 columns"><!-- content posts -->

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
