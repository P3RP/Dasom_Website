<?php 
/*
 * php/load_project_manage.php
 *  : 프로젝트 관리 로딩. (DB 연결)
*/


/* 워드프레스 DB 사용 */
require_once($_SERVER['DOCUMENT_ROOT'].$folder.'/wp/wp-load.php');
global $wpdb;

/* 로그인 계정 확인 */
// 추후 제작 


/* 사용할 변수 */
$project_info = array(
	"id" => -1,
	"name" => "null",
	"des" => "null",
	"time" => "null"
);

/* PROJECT 정보 로딩 (prj_projects) */
function load_project($project_id)
{
	$table_name = "prj_projects";
	$project = $wpdb->get_row("SELECT * FROM $table_name WHERE id = $project_id;");

	$project_info['id'] = $project->id;
	$project_info['name'] = $project->name;
	$project_info['des'] = $project->description;
	$project_info['time'] = $project->savetime;
}

/* CATEGORY 로딩 및 출력 함수 */
function load_category($project_id)
{
	$table_name = "prj_category";
	$category_list = $wpdb->get_results(
		"
		SELECT *
		FROM $table_name
		WHERE project = $project_id;
		"
	);

	$category_str = "";

	foreach($category_list as $category)
	{
		echo $category_str;
	}
}

/* WORK 로딩 및 출력 함수 */
function load_works($category_id)
{
	$table_name = "prj_works";
	$work_list = $wpdb->get_results(
		"
		SELECT *
		FROM $table_name
		WHERE category = $category_id;
		"
	);

	$work_str = "";

	//board 출력
	foreach($work_list as $work)
	{
		$work_str = "";
		if($work->status == 0)
		{
			echo $work_str;
		}
	}

	//overdued 출력
	foreach($work_list as $work)
	{
		$work_str = "";
		if($work->status == 1)
		{
			echo $work_str;
		}
	}

	//unfinished 출력
	foreach($work_list as $work)
	{
		$work_str = "";
		if($work->status == 2)
		{
			echo $work_str;
		}
	}

	//finished 출력
	foreach($work_list as $work)
	{
		$work_str = "";
		if($work->status == 3)
		{
			echo $work_str;
		}
	}
}

?>