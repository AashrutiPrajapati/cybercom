<?php  

	require 'connect.php';
	require 'core.php';

	if (loggedin()) {
		$firstname = getField($conn,'firstname');
		$lastname = getField($conn,'lastname');
		echo 'You are logged in, '.$firstname.' '.$lastname.' <a href = "logout.php">Log out</a> <br>';
		//echo getField($conn, $field['firstname']);

	}
	else {
		include 'logging.php';

	}
	// include 'logging.php';

	//echo $current_file;


?>