<?php 
	$likes = get_field('likes');

	if (get_field('likes')) :
?>		
<button class="save-site"><?= $likes ?> <?= $likes > 1 ? 'Likes' : 'Like'; ?></button>
<?php endif; ?>