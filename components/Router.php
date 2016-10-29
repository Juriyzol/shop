<?php


class Router 
{
	private $routes;
	
	public function run()
	{
		include_once(ROOT . '/config/routes.php');
		$this->routes = $routesPath;	
	
		echo '<pre>';
		print_r ($this->routes); // Проверяем наличие массива роутов в приватном свойстве $routes
		echo '</pre>';
		echo '<br><br>' . 'тестируем ветвление, commit2'; 
	}	
}

/*
	метод run() принимает управление от фронтконтроллера
		
	Поскольку теперь у нас существуют маршруты, нужно заставить роутер
	прочитать их и помнить на время выполнения кода.
	
	При помощи метода __construct() мы записываем массив наших роутов
	в свойство $routes;
	* Выражение include подключает и выполняет указанный файл, то есть
	в нашем случае возвращает массив значений:
	return array (
		'news' => 'news/index',
		'products' => 'product/list',
	);
	** В документации про include сказано следующее:
	Если включение происходит внутри функции включающего файла, тогда весь код, 
	содержащийся во включаемом файле, будет вести себя так, как будто он был 
	определен внутри этой функции. То есть, он будет в той же области видимости 
	переменных этой функции.
*/







