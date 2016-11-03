<?php


class Router 
{
	private $routes;

	public function __construct() 
	{
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);
	}
	
	private function getUri()
	{
		if(!empty($_SERVER['REQUEST_URI'])){
			return trim($_SERVER['REQUEST_URI']);
		}
	}
	
	public function run()
	{
		$uri = $this->getURI();
		
		foreach ($this->routes as $uriPattern => $path)
		{	
			if (preg_match("~$uriPattern~", $uri))
			{ 
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				
				$segments = explode('/', $internalRoute);
				
				$controllerName = ucfirst(array_shift($segments)).'Controller'; 
				$actionName = 'action'.ucfirst((array_shift($segments)));
				
				$parameters = $segments; // Array ([0] => sport, [1] => 123)
							
				$controllerFail = ROOT . '/controllers/' . $controllerName . '.php';
				if (file_exists($controllerFail))
				{
					include_once($controllerFail);
				}
				
				$controllerObject = new $controllerName();
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				/*				
				Эта функция вызывает метод чье название содержиться в переменной 
				$actionName у объекта чье название содержиться в $controllerObject
				и передает вызванному методу переменную $parameters в которой 
				содержится массив с параметрами.
				При помощи такого подхода, параметры будут переданы в метод 
				в виде переменных и доступ к ним можно будет получить более 
				удобным способом.

				1-й способ передачи параметров выглядел так:
				$result = $controllerObject->$actionName($parameters);				
				*/
				
				if ($result != null) {
					break;
				}				
			}			
		}		
	}	
}

/*

*/






