<?php 

require_once 'app/models/Student.php';
class HomeController{

	function index(){
		$students = Student::all();
		$title = 'Trang chủ';

		$view = 'app/views/homepage.php';
		include_once 'app/views/layouts/main.php';
	}

	function detail(){
		$id = $_GET['id'];
		$student = Student::find($id);
		// var_dump($student);die;

		$title = 'Chi tiết';

		$view = 'app/views/detail.php';
		include_once 'app/views/layouts/main.php';
	}

}

 ?>