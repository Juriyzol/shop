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
		echo $uri;
		
		// Проверяем наличие такого запроса в routes.php
		
		// Подключаем фаил с необходимым классом и контроллером 
		//(определяем какой контроллер и экшен будут обрабатывать данный запрос)
		
		// Создать объект и вызвать метод
	}	
}

/*
	метод run() принимает управление от фронтконтроллера
		
*/







