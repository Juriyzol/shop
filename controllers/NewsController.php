<?php

include_once ROOT. '/models/News.php';

class NewsController 
{
	public function actionIndex() 
	{
	
		$newsList = News::getNewsList(); //статический метод из модели новостей
	
		echo '<pre>';
		print_r($newsList);
		echo '</pre>';
		
		
		return true;
	}
	
	/*
		Метод принимает один аргумент, в него из router.php будет
		передана переменная $parameters, содержащая в себе массив
	*/
	public function actionView($category, $id, $ftf = NULL)  
	{
		echo '<br>' . $category;
		echo '<br>' . $id;
		echo '<br>' . $ftf;
		
		return true;
	}
}