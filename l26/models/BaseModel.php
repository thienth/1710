<?php 
class BaseModel{
	function __construct(){
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=PHP1710;charset=utf8", 'root', '123456');
	}

	public static function all(){
		$model = new static();
		$sql = "select * from " . $model->table;
		$stmt = $model->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
}


 ?>