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
	public function actionView($category, $id, $ftf = NULL)  
	{
		echo '<br>' . $category;
		echo '<br>' . $id;
		echo '<br>' . $ftf;
		
		return true;
	}
}