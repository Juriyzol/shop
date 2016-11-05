<?php



class News 
{

	public static function getNewsItemByID($id)
	{

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
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['h1'] = $row['h1'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}

		return $newsList;
	}	
	
}









