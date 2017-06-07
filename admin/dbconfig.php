<?php


	$db_host = "localhost";
	$db_name = "dbregistration";
	$db_user = "root";
	$db_pass = "";
	
	try{
		
		$db_con = new PDO("mysql:host=localhost;dbname=comici;charset=utf8",'root', 'SimplonERN17');
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>