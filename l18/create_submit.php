<?php 
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
 
 if(empty($students)){
 	$id = 1;
 }else{
 	$lastStudent = $students[count($students)-1];
 	$id = $lastStudent[0]+1;
 }


 $newStudent = [$id, $name, $fileDir, $age, $school];
 $students[] = $newStudent;

 overwriteStudents($students);
 header('location: index.php');


 

 ?>

