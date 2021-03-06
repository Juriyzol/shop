<?php

include_once ROOT. '/models/Category.php';
include_once ROOT. '/models/Product.php';

class SiteController 
{
	public function actionIndex() 
	{	
		$categories = array();	
		$categories = Category::getCategoriesList();
		
		$latestProduct = array();	
		$latestProduct = Product::getLatestProduct();	
	
		require_once(ROOT . '/views/site/index.php');
		
		return true;
	}
}