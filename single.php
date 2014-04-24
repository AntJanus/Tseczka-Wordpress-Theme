<?php get_header();?>

<section id="main-content" class="row">
  <section id="content-posts" class="large-8 columns feed-list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID();?>" <?php post_class('post single feed-item');?> itemscope itemtype="http://schema.org/Article">
        <h1 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>

        <ul class="list-meta author vcard" itemscope itemtype="http://schema.org/Person" itemprop="author">
          <li><time itemprop="datePublished" class="updated" datetime="<?php $postDate = get_the_date('c'); $postDate2 = get_the_date('d.m.Y'); echo $postDate ?>" pubdate><?php echo $postDate2; ?></time></li>
          <li>Author: <span itemprop="name"> <?php the_author_posts_link(); ?></span></li>
          <li>Categories: <?php the_category(', '); ?></li>
        </ul>

        <div class="post-content feed-content entry-content">
          <?php the_content(); ?>
        </div>

        <ul class="list-meta entry-meta">
          <li>Tags: <?php the_tags(); ?></li>
        </ul>

        <div id="comments">
          <div class="comments-template">
            <?php comments_template(); ?>
          </div>
        </div>
    </article>
  <?php endwhile; endif;?>
    <div class="pagination">
      <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
    </div>
  </section>

  <?php get_sidebar();?>
</section>

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
