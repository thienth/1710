<?php 
session_start();
if(!isset($_SESSION['auth']) 
	|| $_SESSION['auth'] == null ){
	header('location: ../login.php');
}
 ?>
<h2>Day la trang de them bai viet moi</h2>