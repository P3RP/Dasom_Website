<?php

/* 워드프레스 DB 사용 */
require_once($_SERVER['DOCUMENT_ROOT'].$folder.'/wp/wp-load.php');
global $wpdb;

$curr_user = wp_get_current_user();

echo "<script>alert('현재 id는 $curr_user->user_login');</script>";

?>