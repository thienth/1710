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



header('location: readText.php');
 ?>