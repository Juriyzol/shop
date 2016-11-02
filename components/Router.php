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
						
				echo "<br>Где ищем (запрос, который набрал пользователь): " . $uri;
				echo "<br>Что ищем (совпадение из правила): " . $uriPattern;
				echo "<br>Кто обрабатывает: " . $path; 

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				/*	Функция preg_replace(), в строке запроса $uri (к примеру там содержиться 
				такая строка - news/sport/12345) ищет параметры sport и 12345 по определенному 
				шаблону содержащемуся в "~$uriPattern~" и указанному в routes.php ([a-z]+)/([0-9]+)
				Если параметры в запросе соответствуют шаблону	
				*/	
				
				echo '<br> Нужно сформировать: ' . $internalRoute;
				
			
			
			
				/*
				$segments = explode('/', $path);
				
				$controllerName = ucfirst(array_shift($segments)).'Controller'; 
				$actionName = 'action'.ucfirst((array_shift($segments)));

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






