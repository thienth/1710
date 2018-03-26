<?php 
require_once 'models/BaseModel.php';
/**
* 
*/
class Student extends BaseModel
{
	public $table = 'students';

	public function convertDate(){
		$str = explode("-", $this->birthdate);
		return $str[2]."/".$str[1]."/".$str[0];
	}
}
 ?>