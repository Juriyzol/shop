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
	
	public function actionView($id)  
	{
		$newsItem = News::getNewsItemByID($id); 
		
		echo '<pre>';
		print_r($newsItem);
		echo '</pre>';		
		
		return true;
	}
}