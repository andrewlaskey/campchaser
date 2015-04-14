<?php
/**
 * Template Name: Recent Posts
 */

use Roots\Sage\CustomQueries;

?>

<?php get_template_part('templates/page', 'header'); ?>

<?php $query = CustomQueries\get_most_recent(); ?>

<?php if (!$query->have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ($query->have_posts()) : $query->the_post(); ?>
  <?php get_template_part('templates/content', 'excerpt'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php wp_reset_postdata(); ?>
