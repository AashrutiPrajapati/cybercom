<?php
	////////////////////////////////
	//log out page
	require 'core.php';
	//echo $http_referer;

	session_destroy();
	header('Location: '.$http_referer);


?>