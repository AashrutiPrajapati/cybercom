<?php
	///////////////////////
	//file checking function
	$filename = 'file.txt';
	if (file_exists($filename)){
		echo 'File already exists.';
	}
	else{
		$handle = fopen($filename, 'w');
		fwrite($handle, 'nothing');
		fclose($handle);

	}

	//////////////////////////////////
	//delete the existing files
	/* 
	$file = 'file.txt';
	if (unlink($file)){
		echo '<br>File <strong>' .$file.'</strong>has been deleted.';
	}
	else{
		echo '<br>File cannot be deleted';
	}
	*/
	$filename = 'file.txt';
	$rand = rand(1000,9999);

	if (rename($filename, $rand.'.txt')){
		echo 'File <strong>'.$filename.'</strong> has been renamed to <strong>'.$rand.'.txt</strong>';
	}
	else{
		echo 'Error.';
	}
?>