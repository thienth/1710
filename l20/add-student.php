<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="add-student_submit.php" method="post">
		Name: <input type="text" name="name" value="" placeholder="">
		<br>
		Email: <input type="text" name="email" value="" placeholder="">
		<br>
		Birth date: <input type="date" name="birthdate" value="" placeholder="">
		<br>
		Address: <textarea name="address"></textarea>
		<br>
		Gender: 
		<input type="radio" name="gender" value="1" placeholder=""> Male
		<input type="radio" name="gender" value="2" placeholder=""> Female
		<input type="radio" name="gender" value="3" placeholder=""> Others
		<br>
		School: <input type="text" name="school" value="" placeholder="">
		<br>
		<button type="submit">Save</button>
	</form>
</body>
</html>