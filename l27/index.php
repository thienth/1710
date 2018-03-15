<?php 
require_once 'models/Student.php';
// $listStudent = Student::where(['id', '>', 3])
// 				->orWhere(['id', '=', 1])
// 				->get();

$student = Student::find(2);
$student->name = 'nguyen thi thuy tien';
$student->email = 'thuytiennguyen@gmail.com';

$student->update();
 ?>

 