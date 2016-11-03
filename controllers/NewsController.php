<?php

class NewsController 
{
	public function actionIndex() 
	{
		echo "Список новостей";
		return true;
	}
	
	/*
		Метод принимает один аргумент, в него из router.php будет
		передана переменная $parameters, содержащая в себе массив
	*/
	public function actionView($params)  
	{
		echo '<br>' . $params[0];
		echo '<br>' . $params[1];
		echo '<br>' . $params[2];
		// Один из способов получения переданных параметров
		
		return true;
	}
}