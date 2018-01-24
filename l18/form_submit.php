<?php 

$avatar = $_FILES['avatar'];
move_uploaded_file($avatar['tmp_name'], uniqid().'-'.$avatar['name']);


 ?>