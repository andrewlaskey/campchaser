<div class="site-excerpt">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
	<h3 class="site-excerpt-title"><?php the_title(); ?></h3>
	<button class="save-site" data-post="<?php the_id(); ?>" data-user="<?= is_user_logged_in() ? get_current_user_id() : 'not_logged_in'; ?>"><span class="save-site-number"><?php the_field('likes'); ?></span></button>
	<span class="site-excerpt-date"><?php the_time( get_option( 'm-d-y' ) ); ?></span>
</div>