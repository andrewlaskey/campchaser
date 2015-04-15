<?php

namespace Roots\Sage\Ajax;

if (!function_exists('write_log')) {
    function write_log ( $log )  {
        if ( true === WP_DEBUG ) {
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}

function like_post() {
	if( !isset( $_POST['campchaser_ajax_nonce'] ) || !wp_verify_nonce( $_POST['campchaser_ajax_nonce'], 'campchaser_ajax_nonce' ) )
        die('Permission denied');

    $post_id = $_POST['postID'];
    $user_id = $_POST['userID'];

    //Validate POST vars
    if (!is_numeric($post_id))
    	die('Permission denied');

    if (!is_numeric($user_id))
    	die('Permission denied');

    $likes_key = 'field_552d7f01ef4cf';
    $saved_posts_key = 'field_552d9a4852d2a';

    //check if user is real user
    if ($user_id == 'not_logged_in') {

    } else {
    	//check if user has already liked this
    	$already_liked = false;

    	$user_likes = get_field($saved_posts_key, 'user_' . $user_id);

    	if($user_likes)
		{
			foreach($user_likes as $row)
			{	
				if ($row['post_id'] == $post_id) {
					$already_liked = true;
				}
			}
		}

		if ($already_liked) {
			//Unlike

		} else {
			//New Like

			//Update Post Likes Field
			$num_likes = get_field($likes_key, $post_id);
			update_field($likes_key, $num_likes + 1, $post_id);

			//Update User Saved Posts Field
			$user_likes[] = array('post_id' => $post_id);

			write_log($user_likes);
			update_field($saved_posts_key, $user_likes, 'user_' . $user_id);

			$result['buttonAction'] = 'added';
			$result['likes'] = $num_likes + 1;
			$result = json_encode($result);
			echo $result;
		}
    }

    die();
}

add_action('wp_ajax_like_post', __NAMESPACE__ . '\\like_post');
add_action('wp_ajax_nopriv_like_post', __NAMESPACE__ . '\\like_post');