<?php get_header();?>

<section id="main-content" class="row">
  <section id="content-posts" class="large-8 columns">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>
      <h1 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>

      <p class="meta vcard unseen">
        <time class="updated" datetime="<?php $postDate = get_the_date('c'); $postDate2 = get_the_date('d.m.Y'); echo $postDate ?>" pubdate> <?php echo $postDate2; ?></time>
        | <span class="byline fn author"> <?php the_author_posts_link(); ?></span>
        | <a href="mailto:<?php the_author_meta('email'); ?>" class="email author">email</a>
        | <?php the_category(', '); ?>
      </p>

      <div class="post-content entry-content">
        <?php the_content(); ?>

      <p class="post-metadata unseen">Posted in
      <?php the_category(', '); ?><br /><?php the_tags(); ?><br />
      Source: <span class="vcard"><span class="source-org copyright"><?php bloginfo('name'); ?></span></span>
      </p>
    </div>
  </article>
    <?php endwhile; endif;?>
    <div id="blog-nav">
      <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
    </div>
  </section>

  <?php get_sidebar();?>
</section>

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
