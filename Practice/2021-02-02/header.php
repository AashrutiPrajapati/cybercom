<?php ob_start();  ?>

<h1>My page </h1>
This is my page

<?php
	//////////////////////////
	//header function
	$redirect_page = 'https://google.com';
	//$redirect = true;   //google.com is opened
	$redirect = false;      // html text is display in the page
	if ($redirect == true){
		header('Location: '.$redirect_page);
	}
 
 	ob_end_flush();

?>