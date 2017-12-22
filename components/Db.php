<?php
class DB
{
	public static function getConnection()
	{

		$host = 'us-cdbr-iron-east-05.cleardb.net'; 
		$user = 'ba87b64b655102'; 
		$password = '8f176f15'; 
		$db_name = 'heroku_e8f598c73c2b616';  
		  
		
		$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
		mysqli_query($link, "SET NAMES 'utf8'");

		return $link;

	}
}



?>