<?php get_header();?>

<section id="main-content" class="row">
  <section id="contentP-posts" class="large-8 columns">
     <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
        <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h1>
      <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h1>Archive for <?php the_time('F jS, Y'); ?>:</h1>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h1>Archive for <?php the_time('F, Y'); ?>:</h1>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h1>Archive for <?php the_time('Y'); ?>:</h1>
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h1>Author Archive</h1>
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h1>Blog Archives</h1>
    <?php } ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>
      <h2 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h2>

      <p class="meta  vcard"><time class="updated" datetime="<?php $postDate = get_the_date('c'); $postDate2 = get_the_date('d.m.Y'); echo $postDate ?>" pubdate> <?php echo $postDate2; ?></time>
        | <span class="byline fn author"> <?php the_author_posts_link(); ?></span>
         | <a href="mailto:<?php the_author_meta('email'); ?>" class="email author">email</a>
          | <?php the_category(', '); ?>
      </p>

      <div class="post-content entry-content">
        <?php the_excerpt(); ?>

        <p class="postmetadata unseen">Posted in
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
