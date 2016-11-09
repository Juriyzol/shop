<?php

class ProductsController 
{
	public function actionView($id) 
	{
		require_once(ROOT . '/views/products/product-details.php');
		
		return true;
	}
}