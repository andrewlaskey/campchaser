<?php
/**
 * Template Name: Recent Posts
 */

use Roots\Sage\CustomQueries;

?>

<?php get_template_part('templates/page', 'header'); ?>

<?php $query = CustomQueries\get_most_recent(); ?>

<?php include(locate_template('templates/postslist.php')); ?>