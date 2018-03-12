<?php 
require_once 'models/Student.php';
// $listStudent = Student::where(['id', '>', 3])
// 				->orWhere(['id', '=', 1])
// 				->get();

$student = Student::find(1);
var_dump($student->delete());
var_dump(Student::all());
 ?>

 