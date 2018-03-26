<?php 
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$school = $_POST['school'];
require_once 'db.php';
$sql = "update students
		set name = '$name', 
			email = '$email', 
			birthdate = '$birthdate', 
			address = '$address', 
			gender = '$gender', 
			school = '$school'
		where id = $id";
// var_dump($sql);die;

// nạp câu sql vào trong kết nối
$stmt = $conn->prepare($sql);

// thực thi câu lệnh với csdl
$stmt->execute();

header('location: index.php');


 ?>