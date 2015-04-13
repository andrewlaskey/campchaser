<div class="site-excerpt">
	<?php the_post_thumbnail('medium'); ?>
	<h3 class="site-excerpt-title"><?php the_title(); ?></h3>
	<button class="save-site">#</button>
	<span class="site-excerpt-date"><?php the_time( get_option( 'm-d-y' ) ); ?></span>
</div>