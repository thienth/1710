<?php 
function getStudents()
{
	$data = file_get_contents('data.txt');
	$arr = explode("|end", $data);

	$listStudent = [];
	foreach ($arr as $key => $value) {
		if($value == "") continue;
		$studentInfo = explode("|", $value);
		$listStudent[] = $studentInfo;
	}

	return $listStudent;
}

 ?>