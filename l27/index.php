<?php 
require_once 'models/Student.php';
// $listStudent = Student::where(['id', '>', 3])
// 				->orWhere(['id', '=', 1])
// 				->get();

$student = new Student();
$student->name = 'nguyen thi thuy';
$student->email = 'thuynguyen@gmail.com';
$student->birthdate = '1998-01-02';
$student->address = 'Lao cai,';
$student->gender = '2';
$student->school = 'thuy loi';

$student->insert();
 ?>

 