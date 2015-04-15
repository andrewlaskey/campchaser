<?php get_template_part('templates/page', 'header'); ?>

<?php 

global $wp_query;

$query = $wp_query;

?>

<?php include(locate_template('templates/postslist.php')); ?>
