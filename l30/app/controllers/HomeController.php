<?php 
namespace App\Controllers;

use App\Models\Student;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class HomeController{

	function sendmail(){
		$mail = new PHPMailer(true); 
		$subject = $_GET['subject'];
		$content = $_GET['content'];
		try {
			// $mail->SMTPDebug = 2;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 't3h.1710@gmail.com';
		    $mail->Password = 't3h123456';
		    $mail->SMTPSecure = 'tls';
		    $mail->Port = 587;      
		    $mail->setFrom('thienth32@gmail.com', 'T3h - 1710');
		    $mail->addAddress('giang.ricketsboy@gmail.com');
		    $mail->addAddress('daohuythang97@gmail.com');
		    $mail->addAddress('duckhanhcao1@gmail.com');
		    $mail->addAddress('ngogiadiepit@gmail.com');
		    $mail->addAddress('haunguyen112797@gmail.com', 'Hau misss');


		    $mail->addReplyTo('duyquangnguyen10296@gmail.com', 'Quang dau bep');

		    $mail->isHTML(true);    
		    $mail->Subject = $subject;
    		$mail->Body    = $content;

    		$mail->send();

    		echo "Done!";
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
	}


	function index(){
		$students = Student::all();
		$title = 'Trang chủ';

		$view = 'app/views/homepage.php';
		include_once 'app/views/layouts/main.php';
	}

	function detail(){
		$id = $_GET['id'];
		$student = Student::find($id);
		// var_dump($student);die;

		$title = 'Chi tiết';

		$view = 'app/views/detail.php';
		include_once 'app/views/layouts/main.php';
	}

}

 ?>