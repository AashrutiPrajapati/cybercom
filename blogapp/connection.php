<?php
	/////////////////////////////
	//database connectivity

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'test';



	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

	if (mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db)){
		// echo 'connected.<br>';
	}
	else{
		echo 'not connected.<br>';
	}

	
?>