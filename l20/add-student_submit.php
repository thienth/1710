<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$school = $_POST['school'];
require_once 'db.php';
$sql = "insert into students
			(name, 
			email, 
			birthdate, 
			address, 
			gender, 
			school)
		values
			('$name', 
			'$email', 
			'$birthdate', 
			'$address', 
			$gender, 
			'$school')";
// var_dump($sql);die;

// nạp câu sql vào trong kết nối
$stmt = $conn->prepare($sql);

// thực thi câu lệnh với csdl
$stmt->execute();

header('location: index.php');

 ?>