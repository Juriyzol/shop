<?php

class News 
{

	public static function getNewsItemByID($id)
	{
		$id = intval($id);
		
		if($id)
		{	
			$db = Db::getConnection();
			
			$result = $db->query('SELECT * FROM news WHERE id=' . $id);	
			
			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC); // возвращать только ассоциативный массив
			
			$newsItem = $result->fetch();

			return $newsItem;
		}		
	}	

	public static function getNewsList()
	{
	    $db = Db::getConnection();

		$newsList = array();
		
		$result = $db->query('SELECT id, h1, date, short_content FROM news ORDER BY id ASC LIMIT 10');
		
		$i = 0;
		while($row = $result->fetch())
		{   
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['h1'] = $row['h1'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}

		return $newsList;
	}	
	
}

/* 

*/