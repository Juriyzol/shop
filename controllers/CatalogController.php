<?php

include_once ROOT. '/models/Category.php';
include_once ROOT. '/models/Product.php';

class CatalogController 
{
	public function actionIndex() 
	{	
		$categories = array();	
		$categories = Category::getCategoriesList();
		
		$latestProduct = array();	
		$latestProduct = Product::getLatestProduct(20);
	
		require_once(ROOT . '/views/catalog/index.php');
		
		return true;
	}
	
	public function actionCategory($categoryID) 
	{	
		$categories = array();	
		$categories = Category::getCategoriesList();
		
		$categoryProduct = array();	
		$categoryProduct = Product::getProductsListByCategory($categoryID);		
	
		require_once(ROOT . '/views/catalog/catalog.php');
		
		return true;
	}	
}

/*
	метод actionCategory($categoryID) ожидает один параметр, который
будет передан в него через путь в роутах '/catalog/([0-9]+)' => 'catalog/category/$1'
посредствам работы нашего Router.php - значением полученного параметра 
будет являтся любое число
	после того как метод нашего контроллера получает в качестве 
аргумента это самое число, мы передаем его далее в соответствующий
метод модели Product::getProductsListByCategory($categoryID);
который в свою очередь делает запрос в базу данных с условием поиска
товаров только по определенному ИД
*/







