<?php 
 $name = $_POST['username'];
 $age = $_POST['age'];
 $school = $_POST['school'];

 require_once 'lib.php';
 $students = getStudents();
 
 if(empty($students)){
 	$id = 1;
 }else{
 	$lastStudent = $students[count($students)-1];
 	$id = $lastStudent[0]+1;
 }


 $newStudent = [$id, $name, $age, $school];
 $students[] = $newStudent;

 overwriteStudents($students);
 header('location: index.php');


 

 ?>

