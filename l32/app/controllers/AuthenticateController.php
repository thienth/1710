<?php 
namespace App\Controllers;
/**
* 
*/
use App\Models\User;

class AuthenticateController
{
	
	function index($errMsg = null)
	{
		$title = 'Login page';
		$view = 'app/views/auth/login.php';
		include_once 'app/views/layouts/main.php';
	}

	function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$user = User::where(['email', '=', $email])->first();

		if($user && password_verify($password, $user->password)){
			$_SESSION[AUTH_SESSION] = [
				'id' => $user->id,
				'email' => $user->email,
				'name' => $user->name,
				'role' => $user->role
			];
			header('location: index.php');
			die;
		}
		$this->index('Wrong Email/Password');
	}
}

 ?>