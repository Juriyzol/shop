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
				$segments = explode('/', $path);
				
				$controllerName = ucfirst(array_shift($segments)).'Controller'; 
				$actionName = 'action'.ucfirst((array_shift($segments)));

				// 1
				$controllerFail = ROOT . '/controllers/' . $controllerName . '.php';
				if (file_exists($controllerFail))
				{
					include_once($controllerFail);
				}
				
				// 2
				$controllerObject = new $controllerName();
				$result = $controllerObject->$actionName();
				
				// 3
				if ($result != null) {
					break;
				}				
			}			
		}		
	}	
}

/*
	1) Подключаем фаил с необходимым классом и контроллером 

	2) Создаем объект класса контроллер, где вместо имени класса, мы подставляем
переменную ($controllerName) которая содержит строку с именем этого класса.
	В переменную $result мы вызываем метод инициализированного класса, где вместо имени
метода мы подставляем переменную, которая содержит строку с названием нужного метода
$actionName.

	3) В методах наших контроллеров мы использовали выражение return true; Следовательно если 
метод будет вызван, то при помощи выражения if ($result != null) мы можем об этом узнать
и прервать при помощи break цикл foreach().
*/






