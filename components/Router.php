<?php


class Router 
{
	private $routes;

	public function __construct() 
	{
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);
	}
	
	public function run()
	{
		// Получаем строку запроса
		if(!empty($_SERVER['REQUEST_URI'])) {
			$uri = trim($_SERVER['REQUEST_URI'], '/');
		}
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







