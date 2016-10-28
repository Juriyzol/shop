<?php


class Router 
{
	private $routes;

	public function __construct() 
	{
	
	}
	
	public function run() // метод вполне можно сделать static и все будет работать
	{
		echo 'Class router, method run'; // сообщение для проверки работоспособности
		echo '<br><br>';
		print(ROOT); // смотрим что содержиться в константе 
	}
}

/*
		метод run() принимает управление от фронтконтроллера
*/