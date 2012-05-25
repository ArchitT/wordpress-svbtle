<?php
require('./wp-blog-header.php');

$post_id = $_POST['article'];
$cooking = $_POST['cooking'];

$table = $wpdb->prefix . 'postmeta';

$sql = "SELECT meta_value FROM $table WHERE post_id = $post_id AND meta_key = '_wp-svbtle-kudos'";

$kudos = $wpdb->get_var( $wpdb->prepare( $sql ) );

$new_kudos = $kudos + 1;

add_post_meta( $post_id, '_wp-svbtle-kudos', 1, true ) or update_post_meta( $post_id, '_wp-svbtle-kudos', $new_kudos );

header('HTTP/1.1 200 OK');
?>