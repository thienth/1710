<div class="container">
	<br>
	<br>
	<br>
	
	<form action="" method="post" class="col-md-4 col-md-offset-4">
		<div class="text-center">
			<h3 class="text-info">Login page</h3>
			<p class="text-danger"><?= $errMsg?></p>
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="email" value="" placeholder="Enter Email" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="password" value="" placeholder="Enter Password" class="form-control">
		</div>
		<div class="form-group">
			<input id="remember" type="checkbox" name="remember" value="1">
			<label for="remember">Remember me</label>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-info btn-sm">Login</button>
			<a href="index.php" class="btn btn-danger btn-sm">Cancel</a>
		</div>
	</form>
</div>