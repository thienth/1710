<?php 

require_once 'app/models/Student.php';
class HomeController{

	function index(){
		$students = Student::all();
		var_dump($students);
	}

}

 ?>