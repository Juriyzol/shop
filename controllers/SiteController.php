<?php

include_once ROOT. '/models/Category.php';

class SiteController 
{
	public function actionIndex() 
	{	
		$categories = array();	
		$categories = Category::getCategoriesList();
		
		/* было вставлено для проверки
		echo '<pre>';		
		print_r($categories);
		echo '</pre>';
		*/		
	
		require_once(ROOT . '/views/site/index.php');
		
		return true;
	}
}