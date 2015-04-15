<?php 
	$likes = get_field('likes');

	if (get_field('likes')) :
?>		
<button class="save-site" data-post="<?php the_id(); ?>" data-user="<?= is_user_logged_in() ? get_current_user_id() : 'not_logged_in'; ?>"><span class="save-site-number"><?= $likes ?></span> <?= $likes > 1 ? 'Likes' : 'Like'; ?></button>
<?php endif; ?>