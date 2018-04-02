<?php 
namespace App\Controllers;
/**
* 
*/
class AuthenticateController
{
	
	function index()
	{
		$title = 'Login page';
		$view = 'app/views/auth/login.php';
		include_once 'app/views/layouts/main.php';
	}
}

 ?>