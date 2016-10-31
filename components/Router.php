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
		
		// Проверяем наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {
			
			// 1
			if (preg_match("~$uriPattern~", $uri)) {
				echo "+";
			}
			
		}
		
	}	
}

/*
	1) сравниваем строку запроса и данные которые содержаться в роутах
		В переменной $uri, у нас содержиться строка запроса (вернее то, что идет 
	после знака /).
		Если строка запроса, находящаяся в переменной $uri совпадает с содержанием 
	переменной $uriPattern, в которой находятся имена из массива записанного в 
	свойство $routes то условие ИФ истинно и мы выводим + 
		В регулярном выражении использованы "тильды" ("~...~") на случай если маршруты
	будет записаны со слешем, например в таком виде 'products/name', то есть например
	запрос браузера "products/123" все равно будет соответствовать истинному условию 
	для if
		Функция preg_match — Выполняет проверку на соответствие регулярному выражению 
*/