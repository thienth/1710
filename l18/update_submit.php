<?php 
$id = $_POST['userId'];
$name = $_POST['username'];
$age = $_POST['age'];
$school = $_POST['school'];

require_once 'lib.php';

$students = getStudents();
// var_dump($students);die;
foreach ($students as &$st) {
	if($st[0] == $id){
		$st[1] = $name;
		$st[2] = $age;
		$st[3] = $school;
		break;
	}
}

overwriteStudents($students);
header('location: index.php');

 ?>