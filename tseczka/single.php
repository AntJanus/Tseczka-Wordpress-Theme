<?php get_header();?>

<section id="main-content" class="row"><!-- MAIN CONTENT WRAPPER -->

  <section id="content-posts" class="large-6 columns"><!-- content posts -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- START OF POST -->
<article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>

  <h1 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>

  <!-- meta 1 -->
  <p class="meta  vcard"><time class="updated" datetime="<?php $postDate = get_the_date('c'); $postDate2 = get_the_date('d.m.Y'); echo $postDate ?>" pubdate> <?php echo $postDate2; ?></time>
    | <span class="byline fn author"> <?php the_author_posts_link(); ?></span>
     | <a href="mailto:<?php the_author_meta('email'); ?>" class="email author">email</a>
      | <?php the_category(', '); ?></p>
  <!-- end meta 1 -->

  <div class="post-content entry-content">
    <?php the_content(); ?>

    <!-- meta 2 -->
    <p class="post-metadata">Posted in
      <?php the_category(', '); ?><br /><?php the_tags(); ?><br />
      Source: <span class="vcard"><span class="source-org copyright"><?php bloginfo('name'); ?></span></span></p>
    <!-- end meta 2-->
     <div id="comments">
    <div class="comments-template">
                <?php comments_template(); ?>
            </div>
    </div>
  </div>
</article>
<!-- END OF POST -->
<?php endwhile; endif;?>
<div id="blog-nav">
      <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
    </div>
  </section>
  <!-- end content posts -->

  <?php get_sidebar();?>
</section>
<!-- END MAIN CONTENT WRAPPER -->

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
