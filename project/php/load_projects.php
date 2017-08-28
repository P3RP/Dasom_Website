<?php
/*
 * php/load_projects.php
 *  : 프로젝트 DB에서 로딩
*/

error_reporting(E_ALL&~E_NOTICE&~E_WARNING); 

/* 워드프레스 DB 사용 */
require_once($_SERVER['DOCUMENT_ROOT'].$folder.'/wp/wp-load.php');
global $wpdb;

/* DB 읽기 */
$table_name = "prj_projects";
$project_list = $wpdb->get_results(
	"
	SELECT id, name, description, savetime
	FROM $table_name
	ORDER BY id DESC;
	"
);

/* 프로젝트 출력 */
foreach($project_list as $project)
{
	$date_str = explode(" ", $project->savetime)[0]; //[1]은 시간

	$project_manage_url = "location.href=&#039;http://khuphj.iwinv.net/project/projectManage.php?id=".$project->id."&#039;";

	$html_str = "
	<li>
		<div class='project' onclick='$project_manage_url'>
			<input type='hidden' name='project-id' value='$project->id'>
			<div class='project-title'>$project->name</div>
			<div class='project-explain' style='text-align:center'>$project->description</div>
			<div class='project-date'>$date_str</div>
		</div>
	</li> 
	";

	echo $html_str;
}

?>