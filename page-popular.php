<?php
/**
 * Template Name: Popular Posts
 */

use Roots\Sage\CustomQueries;

?>

<?php get_template_part('templates/page', 'header'); ?>

<?php $query = CustomQueries\get_most_popular(); ?>

<?php include(locate_template('templates/postslist.php')); ?>

