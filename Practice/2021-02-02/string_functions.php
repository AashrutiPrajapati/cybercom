<?php
	
	$string = 'Alex';
	$string_length = strlen('How many char does this have?');
	$string_length1 = strlen($string);
	echo $string_length;
	echo '<br>'.$string_length1;

	for ($i=1;$i<=$string_length1;$i++){
		echo "<br>".$i;
	}

	//////////////////////////////
	//upper and lower conversion
	$s1 = 'I have a chocolate.';
	$string_upper = strtoupper($s1);
	$string_lower = strtolower($s1);

	echo '<br>'.$string_upper.'<br>';
	echo $string_lower;

	////////////////////////////////
	//string position 
	$offset = 0;
	$find = 'have';
	$find_length = strlen($find);
	//echo strpos($s1, $find);

	while ($string_position = strpos($s1, $find, $offset)){
		echo '<br>'.$find .' found at ' .$string_position.'<br>';
		$offset = $string_position + $find_length;
	}


	////////////////////////////////
	//substring replace 
	$s2 = 'This is an apple. This is a banana';
	$string_new = substr_replace($s2, 'It', 18,2);
	echo '<br>'.$string_new;

	///////////////////////////////////
	//str_replace function
	$s2 = 'This is a string, and is an example.';
	$new_string = str_replace('and', '',$s2);
	echo '<br>'.$new_string;

	$find1 = array('is','string', 'example');
	$new_string1 = str_replace($find1, '',$s2);
	echo '<br>'.$new_string1;


		
?>
