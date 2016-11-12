<?php

include_once ROOT. '/models/Category.php';
include_once ROOT. '/models/Product.php';

class ProductsController 
{
	public function actionView($id) 
	{
		$categories = array();	
		$categories = Category::getCategoriesList();

		$product = array();
		$product = Product::getProductById($id);
	
		require_once(ROOT . '/views/products/product-details.php');
		
		return true;
	}
}