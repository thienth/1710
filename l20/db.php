<?php 

$host = "127.0.0.1";
$dbname = "PHP1710";
$dbUsername = "root";
$dbPwd = "123456";

// Tạo biến chứa kết nối csdl
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbUsername, $dbPwd);
 ?>