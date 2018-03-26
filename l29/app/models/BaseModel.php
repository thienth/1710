<?php 
namespace App\Models;
use PDO;
class BaseModel{
	function __construct(){
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=PHP1710;charset=utf8", 'root', '123456');
	}

	public function update(){}

	public function insert(){
		$sql = "insert into " . $this->table;
		$sql .= " ( ";
		foreach ($this->colums as $col) {
			if($this->{$col} != null){
				$sql .= $col.", ";
			}
		}

		$sql = rtrim($sql, ", ");
		$sql .= " )  values (";
		foreach ($this->colums as $col) {
			if($this->{$col} != null){
				$sql .= "'" . $this->{$col} . "', ";
			}
		}
		$sql = rtrim($sql, ", ");
		$sql .= ")";
		var_dump($sql);die;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return true;

	}

	public static function all(){
		$model = new static();
		$model->queryBuilder = "select * from " . $model->table;
		return $model->get();
	}

	// select * from table where $c[0] $c[1] $c[2]
	public static function where($condition = []){
		$model = new static();
		$model->queryBuilder = "select * from " . $model->table . " where $condition[0] $condition[1] '$condition[2]'";
		return $model;
	}

	public function andWhere($condition = []){
		$this->queryBuilder .= " and $condition[0] $condition[1] '$condition[2]'";
		return $this;
	}

	public function orWhere($condition = []){
		$this->queryBuilder .= " or $condition[0] $condition[1] '$condition[2]'";
		return $this;
	}

	public static function find($id){
		$model = new static();
		$model->queryBuilder = "select * from " . $model->table . " where id = $id";
		$result = $model->get();
		if(count($result) > 0){
			return $result[0];
		}

		return false;
	}

	public function delete(){
		$sql = "delete from " . $this->table . " where id = " . $this->id;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return true;
	}

	function get(){
		$stmt = $this->conn->prepare($this->queryBuilder);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $result;
	}
}


 ?>