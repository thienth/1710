<?php 

require_once 'app/models/Student.php';
class HomeController{

	function index(){
		$students = Student::all();
		$title = 'Trang chủ';

		$view = 'app/views/homepage.php';
		include_once 'app/views/layouts/main.php';
	}

}

 ?>