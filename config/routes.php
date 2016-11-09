<?php

return array (
	
	'/news/([0-9]+)' => 'news/view/$1',	
	'/news' => 'news/index',
	
	'/products/([0-9]+)' => 'products/view/$1',	// для конкретных продуктов	
	'' => 'site/index', // обрабатывает класс-контроллер SitetController, метод actionIndex()
	
);

/*

*/