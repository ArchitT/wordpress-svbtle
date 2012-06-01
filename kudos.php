<?php
require('./wp-blog-header.php');

$post_id = $_POST['article'];
$cooking = $_POST['cooking'];

$kudos = get_post_meta($post_id, '_wp-svbtle-kudos', true);

$new_kudos = $kudos + 1;

add_post_meta( $post_id, '_wp-svbtle-kudos', 1, true ) or update_post_meta( $post_id, '_wp-svbtle-kudos', $new_kudos );

header('HTTP/1.1 200 OK');
?>