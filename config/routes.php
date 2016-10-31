<?php

return array (
	'news' => 'news/index',
	'products' => 'product/list',
	'products/123' => 'product/list',
);

/*
Роуты представляют собой пару в массиве, где в качестве имени (news, products)
у нас содержится то что пользователь набирает в строке браузера, 
а в качестве значения (news/index, product/list) содержится строка по которой можно узнать где 
обрабатывается запрос, то есть какие классы и методы будут подключатся при
вводе в строку браузера того или иного запроса.

При помощи наших роутов мы увидим, что запросу news, соответствует строка 
news/index, которая означает что будет вызван метод actionIndex в контроллере
NewsController
*/