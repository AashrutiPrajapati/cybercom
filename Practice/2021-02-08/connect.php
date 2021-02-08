<?php
	/////////////////////////////
	//database connectivity 1 program
	//$conn_error = 'Could not connect.';

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'a_database';



	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
	// @mysqli_select_db($mysql_db);
	//echo "Connected!";

	//or also write in this way which write in above line
	//@mysqli_connect('localhost', 'root', '', 'a_database');

	if (mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db)){
		echo 'connected.<br>';
	}
	else{
		echo 'not connected.<br>';
	}

	
?>