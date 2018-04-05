
<?php 
if(isset($_SESSION[AUTH_SESSION]) 
	&& count($_SESSION[AUTH_SESSION]) > 0){
		?>
	<h3>Hello, <?= $_SESSION[AUTH_SESSION]['name'] ?></h3>
	<a href="logout" title="">Logout</a>
	
	<?php
}else{
	?>

	<a href="login" title="">Mời bạn đăng nhập!</a>
	
	<?php
}
 ?>
