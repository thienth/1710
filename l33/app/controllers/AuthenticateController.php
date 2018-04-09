<?php 
namespace App\Controllers;
/**
* 
*/
use App\Models\User;
use DateTime;
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

		$remember = $_POST['remember'];

		$user = User::where(['email', '=', $email])->first();

		if($user && password_verify($password, $user->password)){
			$_SESSION[AUTH_SESSION] = [
				'id' => $user->id,
				'email' => $user->email,
				'name' => $user->name,
				'role' => $user->role
			];

			// có tích vào remember me
			if($remember != null){
				$token = sha1(time() . $user->email);
				
				$expireDate = new DateTime();
				$expireDate->modify('+15 days');
				// tao ra cookie
				setcookie('auth_token', $token, time()+(60*60*24*15));

				// luu token vao trong db
				$user->saveRememberToken($token, $expireDate);

			}
			header('location: index.php');
			die;
		}
		$this->index('Wrong Email/Password');
	}

	public static function checkCookieAuth(){
		if(isset($_COOKIE['auth_token']) && $_COOKIE['auth_token'] != ""){
			$currentTime = new DateTime();

			$token = $_COOKIE['auth_token'];
			$user = User::where(['remember_token', '=', $token])
					->andWhere(['expired_time', '>=', $currentTime->format('y-m-d H:i:s')])->first();
			if($user != null){
				$_SESSION[AUTH_SESSION] = [
					'id' => $user->id,
					'email' => $user->email,
					'name' => $user->name,
					'role' => $user->role
				];
				
				return true;
			}
			
		}
		return false;
	}
}

 ?>