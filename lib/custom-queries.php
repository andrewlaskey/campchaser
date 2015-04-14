<?php

namespace Roots\Sage\CustomQueries;

function get_most_popular() {
	global $wp_query;

	$paged = ($wp_query->paged) ? $wp_query->paged : 1;
	
	$args = array(
		'post_type' => 'post',
		'paged' => $paged,
		'meta_key' => 'likes',
		'orderby' => 'meta_value_num',
		'order' => 'DESC'
	);

	return new \WP_Query($args);
}

function get_most_recent() {
	global $wp_query;

	$paged = ($wp_query->paged) ? $wp_query->paged : 1;
	
	$args = array(
		'post_type' => 'post',
		'paged' => $paged
	);

	return new \WP_Query($args);
}

?>