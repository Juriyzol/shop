<?php


class Router 
{
	private $routes;

	public function __construct() {
	
	}
	
	public function run() {
	
		echo 'Class router, method run'; // сообщение для проверки работоспособности
		echo '<br><br>';
		print(ROOT);
	
	}

}



/*
		В приватном свойстве $routes у нас будут хранится маршруты
		
		метод run() принимает управление от фронтконтроллера

*/

