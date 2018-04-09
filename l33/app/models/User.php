<?php 
namespace App\Models;
/**
* 
*/
use Exception;
use App\Models\BaseModel;
class User extends BaseModel
{
	public $table = 'users';

	public function saveRememberToken($token, $expiredTime){
		$sql = "update users
				set remember_token = '$token',
				expired_time = '".$expiredTime->format('Y-m-d H:i:s')."'
				where id = ".$this->id."
				";

		$stmt = $this->conn->prepare($sql);
		try{
			$stmt->execute();
			return true;
		}catch(Exception $ex){
			return false;
		}
	}
}

 ?>