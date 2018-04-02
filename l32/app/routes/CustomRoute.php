<?php 
namespace App\Routes;

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
class CustomRoute
{
	
	static function executeRoute($url)
	{
		$router = new RouteCollector();

		$router->get('login', ['App\Controllers\AuthenticateController', 'index']);

		$router->get('/', 
			['App\Controllers\HomeController', 'index']);

		$router->get('/send-mail/{subject}/{content}', 
			['App\Controllers\HomeController', 'sendmail']);

		$dispatcher = new Dispatcher($router->getData());

		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		echo $response;
	}
}

 ?>