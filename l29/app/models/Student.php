<?php 
namespace App\Models;

use App\Models\BaseModel;
class Student extends BaseModel
{
	public $table = 'students';

	public $colums = ['name', 'email', 'birthdate', 'address', 'gender', 'school'];

	public function convertDate(){
		$str = explode("-", $this->birthdate);
		return $str[2]."/".$str[1]."/".$str[0];
	}
}
 ?>