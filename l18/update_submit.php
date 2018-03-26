<?php 
$id = $_POST['userId'];
$name = $_POST['username'];
$age = $_POST['age'];
$school = $_POST['school'];
$avatar = $_FILES['avatar'];
$fileDir = "";
if($avatar['size'] > 0){
	$fileDir = 'images/' . uniqid() . '-' . $avatar['name'];
	move_uploaded_file($avatar['tmp_name'], $fileDir);
}
require_once 'lib.php';

$students = getStudents();
// var_dump($students);die;
foreach ($students as &$st) {
	if($st[0] == $id){
		$st[1] = $name;
		if($fileDir != ""){
			$st[2] = $fileDir;
		}
		$st[3] = $age;
		$st[4] = $school;
		break;
	}
}

overwriteStudents($students);
header('location: index.php');

 ?>