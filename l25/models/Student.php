<?php 
class Student{
	const TABLE_NAME = 'students';
	

	function __construct(){
		echo "ham construct duoc chay!<br>";
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=PHP1710;charset=utf8;", "root", "123456");
	}
	
	function getAll(){
		$sql = "select * from " . self::TABLE_NAME;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	function where($col, $compare, $value){
		$sql = "select * from " . self::TABLE_NAME . " where $col $compare '$value'";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
}

 ?>