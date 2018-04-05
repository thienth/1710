<?php 
session_start();
define('AUTH_SESSION', 'auth');

require_once 'vendor/autoload.php';

use App\Routes\CustomRoute;
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

CustomRoute::executeRoute($url);

 ?>