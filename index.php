<?php get_header();?>

<section id="main-content" class="row">
  <section id="content-posts" class="large-8 columns feed-list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID();?>" <?php post_class('post single feed-item');?>>
        <h2 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h2>

        <ul class="list-meta">
          <li><time class="updated" datetime="<?php $postDate = get_the_date('c'); $postDate2 = get_the_date('d.m.Y'); echo $postDate ?>" pubdate><?php echo $postDate2; ?></time></li>
          <li>Author: <span class=""> <?php the_author_posts_link(); ?></span></li>
        </ul>

        <div class="post-content feed-content">
          <?php
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('thumbnail', array('class' => 'feed-thumb'));
          }
          the_excerpt();
          ?>
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
