<?php 
require_once 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
	case '/':
		$ctr = new HomeController();
		$ctr->index();
		break;
	case "detail":
		$ctr = new ProductController();
		$ctr->detail();
		break;
	default:
		include_once 'app/views/404.php';
		break;
}


 ?>