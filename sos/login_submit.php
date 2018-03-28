<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$users = [
	['username' => 'thienth', 'password' => '7c4a8d09ca3762af61e59520943dc26494f8941b'],
	['username' => 'admin', 'password' => '111111'],
];

foreach ($users as $u) {
	if($username == $u['username'] 
		&& $password == $u['password']){
		$_SESSION['auth'] = $u;

		header('location: admin/dashboard.php');
		die;
	}
}
unset($_SESSION['auth']);
header('location: login.php');
/*
users 
id,
name
email
passord
role




//echo password_hash('123456', PASSWORD_DEFAULT);

var_dump(password_verify('123456', '$2y$10$tth.BwH9.WehePpoEaobM.BYsU48CwUi9rNZPbgNWPQQ9bdAmBuQS'));
 */



 ?>