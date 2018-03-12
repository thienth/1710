<?php 
require_once 'models/Student.php';
$listStudent = Student::all();


 ?>

 <?php foreach ($listStudent as $st): ?>
 	<h2><?= $st->name?> - <?= $st->convertDate()?></h2>
 <?php endforeach ?>