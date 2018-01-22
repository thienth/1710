<?php 

$id = $_GET['id'];
require_once 'lib.php';
$students = getStudents();

foreach ($students as $i => $st) {
	if($st[0] == $id){
		array_splice($students, $i, 1);
		break;
	}
}

$content = "";
foreach ($students as $st) {
	$content .= $st[0]."|".$st[1]."|".$st[2]."|".$st[3]."|end";
}


// ghi file
$dataFile = fopen("data.txt", "w") or die("Unable to open file!");
fwrite($dataFile, $content);
fclose($dataFile);

header('location: readText.php');
 ?>