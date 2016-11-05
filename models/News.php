<?php

class News 
{

	public static function getNewsItemByID($id)
	{
		$id = intval($id);
		
		if($id)
		{
			$host = '';
			$dbname = '';
			$user = '';
			$password = '';
			$db = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);	

			$result = $db->query('SELECT * FROM news WHERE id=' . $id);	
			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC); // возвращать только ассоциативный массив
			// 1
			$newsItem = $result->fetch();

			return $newsItem;
		}		
	}	

	public static function getNewsList()
	{
	    $host = '';
		$dbname = '';
		$user = '';
		$password = '';
		$db = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);

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
По умолчанию фетч возвращает массив в котором содержаться вообще все элементы
касающиеся запроса, потому результат выдачи выглядит так:

Array
(
    [id] => 3
    [0] => 3
    [h1] => Контент номер три
    [1] => Контент номер три
    [short_content] => 33333333  33333333
    [2] => 33333333  33333333
    [content] => Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два.
    [3] => Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два. Контент номер два.
    [category_id] => 2
    [4] => 2
    [author_id] => Кот матроскин
    [5] => Кот матроскин
    [date] => 2016-06-18 17:06:53
    [6] => 2016-06-18 17:06:53
    [preview] => Контент номер два.
    [7] => Контент номер два.
    [status] => 1
    [8] => 1
)
			
*/