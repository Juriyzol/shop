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
		
		foreach ($this->routes as $uriPattern => $path) // '/news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2'
		{	
			if (preg_match("~$uriPattern~", $uri)) // для совпадения с шаблоном достаточно любого набора букв/цифр
			{ 
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				/* 
				При помощи функции preg_replace() мы по определенному шаблону
				(означающему поиск любых букв и цифр) описанному в переменной 
				"~$uriPattern~" ищем совпадения в строке запроса $uri и подставляем
				эти значения на места подмасок в переменной $path
				*/
				
				echo 'Переменная $internalRoute до explode(): <br>';
				echo '<pre>';
				print_r($internalRoute);
				echo '</pre> <br>';
				
				$segments = explode('/', $internalRoute);
				
				echo 'Переменная $segments до array_shift(): <br>';
				echo '<pre>';
				print_r($segments);
				echo '</pre> <br>';
				
				//$bagName = array_shift($segments); 
				$controllerName = ucfirst(array_shift($segments)).'Controller'; 
				$actionName = 'action'.ucfirst((array_shift($segments)));
				
				echo '<br> Имя контроллера: ' . $controllerName;				
				echo '<br> Имя метода: ' . $actionName;
				
				$parameters = $segments;
				echo '<pre>';
					print_r ($parameters);
				echo '</pre>';
				
				/*
				$controllerFail = ROOT . '/controllers/' . $controllerName . '.php';
				if (file_exists($controllerFail))
				{
					include_once($controllerFail);
				}
				
				$controllerObject = new $controllerName();
				$result = $controllerObject->$actionName();
				
				if ($result != null) {
					break;
				}
				*/
				
				
			}			
		}		
	}	
}

/*

*/






