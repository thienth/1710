<?php 
require_once 'models/Student.php';
$model = new Student();
$listStudent = $model->where('id', '>', "1");
var_dump($listStudent);


 ?>