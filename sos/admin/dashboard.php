<?php 
session_start();
if(!isset($_SESSION['auth']) 
	|| $_SESSION['auth'] == null ){
	header('location: ../login.php');
}
 ?>
<h2>Xin chao <?php echo $_SESSION['auth']['username'] ?></h2>