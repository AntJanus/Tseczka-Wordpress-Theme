<?php
/*
Template Name: Full Width Template
*/
?>
<?php get_header();?>

<section id="main-content" class="row">
  <section id="content-posts" class="large-12 columns">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID();?>" <?php post_class('post single');?> itemscope itemtype="http://schema.org/Article">
        <h1 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>
        <div class="post-content entry-content">
          <?php the_content(); ?>
        </div>
    </article>
  <?php endwhile; endif;?>
    <div class="pagination">
      <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
    </div>
  </section>
</section>

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
