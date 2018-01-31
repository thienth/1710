<?php 
require_once 'db.php';

// tạo câu truy vấn
$sql = "select * from students";

// nạp câu sql vào trong kết nối
$stmt = $conn->prepare($sql);

// thực thi câu lệnh với csdl
$stmt->execute();

// lấy kết quả của câu lệnh ra ngoài
$result = $stmt->fetchAll();

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
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Birth Date</th>
				<th>Address</th>
				<th>Gender</th>
				<th>School</th>
				<th>
					<a href="add-student.php" title="">Add new</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $st): ?>
			<tr>
				<td><?php echo $st['id'] ?></td>
				<td><?php echo $st['name'] ?></td>
				<td><?php echo $st['email'] ?></td>
				<td><?php echo $st['birthdate'] ?></td>
				<td><?php echo $st['address'] ?></td>
				<td><?php if($st['gender'] == 1) echo "Nam";
				else if($st['gender'] == 2) echo "Nữ";
				else if($st['gender'] == 3 ) echo "Khác";
				else echo "Không xác định"; ?></td>
				<td><?php echo $st['school'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>



