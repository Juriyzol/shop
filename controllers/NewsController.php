<?php

include_once ROOT. '/models/News.php';

class NewsController 
{
	public function actionIndex() 
	{	
		$newsList = News::getNewsList();
	
		require_once(ROOT . '/views/news/index.php');
				
		return true;
	}
	
	public function actionView($id)  
	{
		$newsItem = News::getNewsItemByID($id); 
		
		require_once(ROOT . '/views/news/news-item.php');		
		
		return true;
	}
}