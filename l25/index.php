<?php 
require_once 'models/Student.php';
$model = new Student();
$listStudent = $model->where('id', '>', "1")->andWhere('name', 'like', '%quang ganh%')->get();
var_dump($listStudent);


 ?>