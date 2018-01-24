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

function overwriteStudents($students){
	$content = "";
	foreach ($students as $st) {
		$content .= $st[0]."|".$st[1]."|".$st[2]."|".$st[3]."|end";
	}


	// ghi file
	$dataFile = fopen("data.txt", "w") or die('khong mo duoc file data.txt');
	fwrite($dataFile, $content);
	fclose($dataFile);

	return true;
}

 ?>