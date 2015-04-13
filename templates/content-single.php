<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="post-media">
        <?php the_post_thumbnail('full'); ?>
        <div class="post-map"></div>
      </div>
    </header>

    <div class="post-main">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <?php comments_template('/templates/comments.php'); ?>
    </div>

    <?php get_template_part('templates/entry-meta'); ?>

  </article>
<?php endwhile; ?>
