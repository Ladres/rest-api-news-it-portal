<?php

include_once ROOT. '/models/News.php';

class NewsController 
{
	public function actionIndex()
	{
		$newsList = array();
		$newsList = News::getNewsList(); 
		echo 'Можно записать запрос типа /news/*номер элемента*';
		echo '<pre>';
		print_r($newsList);
		echo '</pre>';

		return true;
	}

	public function actionView($id)
	{
		if ($id) 
		{
			$newsItem = News::getNewsItemByID($id);

			echo '<pre>';
			print_r($newsItem);
			echo '</pre>';
		}

		return true;
	}
}

?>