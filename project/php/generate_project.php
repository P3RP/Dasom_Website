<?php
/*
 * php/generate_project.php
 *  : 프로젝트 생성 및 DB 추가
*/


/* 데이터 POST 형식으로 받아오기 */
$title = $_POST['title-place'];
$des = $_POST['explain-place'];

/* 워드프레스 DB 사용 */
require_once('../../wp/wp-includes/wp-db.php');
require_once('../../wp/wp-load.php');
global $wpdb;

/* 프로젝트 DB에 추가 */
$table_name = "prj_projects";

$wpdb->insert(
	$table_name,
	array(
		"name" => "$title",
		"description" => "$des"
	)
);

/* 리다이렉션 (0초 후) */
echo "<meta http-equiv='refresh' content='0;url=http://khuphj.iwinv.net/project/projectBoard.php'/> ";

?>