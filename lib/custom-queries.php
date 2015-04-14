<?php

namespace Roots\Sage\CustomQueries;

function get_most_popular($paged = null) {
	global $wp_query;

	if (!is_null($paged)) {
		$paged = ($wp_query->paged) ? $wp_query->paged : 1;
	}
	
	$args = array(
		'post_type' => 'post',
		'paged' => $paged,
		'meta_key' => 'likes',
		'orderby' => 'meta_value_num',
		'order' => 'DESC'
	);

	return new \WP_Query($args);
}

function get_most_recent($paged = null) {
	global $wp_query;

	if (!is_null($paged)) {
		$paged = ($wp_query->paged) ? $wp_query->paged : 1;
	}
	
	$args = array(
		'post_type' => 'post',
		'paged' => $paged
	);

	return new \WP_Query($args);
}

?>