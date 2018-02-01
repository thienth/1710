<?php 
$id = $_GET['id'];
require_once 'db.php';
$sql = "select * from students where id = $id";
// nạp câu sql vào trong kết nối
$stmt = $conn->prepare($sql);

// thực thi câu lệnh với csdl
$stmt->execute();

// lấy kết quả của câu lệnh ra ngoài
$result = $stmt->fetch();
if(!$result) header('location: index.php');


 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="update_submit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
		Name: <input type="text" name="name" value="<?php echo $result['name'] ?>" placeholder="">
		<br>
		Email: <input type="text" name="email" value="<?php echo $result['email'] ?>" placeholder="">
		<br>
		Birth date: <input type="date" name="birthdate" value="<?php echo $result['birthdate'] ?>" placeholder="">
		<br>
		Address: <textarea name="address"><?php echo $result['address'] ?></textarea>
		<br>
		Gender: 

		<input type="radio" 
		<?php if($result['gender'] == 1) echo "checked" ?>
		name="gender" value="1" placeholder=""> Male
		<input type="radio" 
		<?php if($result['gender'] == 2) echo "checked" ?>
		name="gender" value="2" placeholder=""> Female
		<input type="radio" 
		<?php if($result['gender'] == 3) echo "checked" ?>
		name="gender" value="3" placeholder=""> Others
		<br>
		School: <input type="text" name="school" value="<?php echo $result['school'] ?>" placeholder="">
		<br>
		<button type="submit">Save</button>
	</form>
</body>
</html>