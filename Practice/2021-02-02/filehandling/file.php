<?php
	///////////////////////////////
	//filehandling functions
	$handle = fopen('names.txt', 'w');
	fwrite($handle, 'alex'."\n");
	fwrite($handle, 'mily');
	
	fclose($handle);
	echo "Written";


	///////////////////
	//file appending
	$handle1 = fopen('names.txt', 'a');
	fwrite($handle1, "\n".'Steven'."\n");
	fclose($handle1);
?>