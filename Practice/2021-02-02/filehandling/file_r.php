<?php
	/////////////////////////////
	//file reading function in filehandling
	$filename = 'names.txt';
	$handle = fopen('names.txt', 'r');
	echo fread($handle, filesize($filename));

	//file exploding function
	$datain = fread($handle, filesize($filename));
	$names_array = explode(',' , $datain);

	//file imploding function
	$names_array2 = array('Alex','Billy','Doly');
	$string = implode('-', $names_array2);
	echo $string;

?>