<?php get_header();?>

<section id="main-content" class="row">
  <section id="contentPosts" class="large-8 columns">
    <article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>>
      <h1 class="entry-title item fn">404 Page Not Found! Sorry!</h1>
      <div class="postContent entry-content">
      <?php
        $s = $wp_query->query_vars['name'];
        $s = preg_replace("/(.*)-(html|htm|php|asp|aspx)$/","$1",$s);
        $posts = query_posts( array( 'post_type' => 'any', 'name' => $s) );
        $s = str_replace("-"," ",$s);

        if (count($posts) == 0) {
          $posts = query_posts(array( array('post_type' => 'any', 'name' => $s) ));
        }

        if (count($posts) > 0) {
          echo "Were you looking for <strong>one of the following</strong> posts
            or pages?";
          echo "<ul>";
          foreach ($posts as $post) {
            echo '<li>';
            echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>';
            echo '</li>';
          }
          echo "</ul>";
        }
      ?>
      </div>
    </article>
  </section>

  <?php get_sidebar();?>
</section>

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
