<?php 

require_once 'lib.php';


$listStudent = getStudents();
// var_dump($listStudent);die;
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
 				<th>Age</th>
 				<th>School</th>
 				<th>
 					<a href="create.php" title="">Add student</a>
 				</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($listStudent as $st): ?>
				<tr>
	 				<td><?php echo $st[0] ?></td>
	 				<td><?php echo $st[1] ?></td>
	 				<td><?php echo $st[2] ?></td>
	 				<td><?php echo $st[3] ?></td>
	 				<td>
	 					<a href="update.php?id=<?php echo $st[0] ?>" title="">Update</a>
	 					<a href="remove.php?id=<?php echo $st[0] ?>" title="">Remove</a>
	 				</td>
	 			</tr>
 			<?php endforeach ?>
 			
 		</tbody>
 	</table>
 	
 </body>
 </html>