<?php


class Router 
{
	private $routes;

	public function __construct() 
	{
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);
	}
	
	// Получаем строку запроса
	private function getUri()
	{
		if(!empty($_SERVER['REQUEST_URI'])){
			return trim($_SERVER['REQUEST_URI']);
		}
	}
	
	public function run()
	{
		$uri = $this->getURI();
		
		foreach ($this->routes as $uriPattern => $path) // 1
		{			
			if (preg_match("~$uriPattern~", $uri)) // 2
			{ 
				echo $path;	
				
				$segments = explode('/', $path); // 2.1
				
				echo "<pre>";
				print_r($segments);
				echo "</pre>";
				
				// 2.2
				$controllerName = ucfirst(array_shift($segments)).'Controller'; 
				$actionName = 'action'.ucfirst((array_shift($segments)));

				// 3)
				echo "Класс: " . $controllerName . "<br>" . "Метод: " . $actionName;		
				
			}			
		}		
	}	
}

/*
	1) В переменной $uriPattern храняться имена из routes.php (news, products), 
а в переменной $path хранятся значения из routes.php (news/index, product/list),
которые соответствуют именам контроллеров и экшенов(методов)	
	2) если имя из routes.php соответствует запросу мы делаем следующие шаги:
	2.1) используя функцию explode(), мы делим строки из $path на две части
	2.2) Далее мы получаем имя контроллера и экшена:
array_shift вытаскивает первое слово из массива (news или product) и мы добавляем 
к нему слово Controller, получается newsController или productController 
функция ucfirst() делает первую букву большой	
	
	3) На этом этапе мы можем видеть, что тот или иной запрос обрабатывают соответствующий
класс и метод.	
*/