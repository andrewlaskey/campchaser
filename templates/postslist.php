<div class="post-list">
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
</div>