<?php
	///////////////////////
	// die and exit function
	/* echo "Hello ";
	die('Error in page');         //use to kill the rest of the page & print message
	echo " World.";
	*/

	/* echo "Hello ";
	exit();         //use to kill the rest of the code same as die
	echo " World.";
	*/

	///////////////////////
	//Expression matching function : preg_match(pattern, subject) 
	/* 
	$string = 'This is a string.';
	if (preg_match('/is/', $string)) {
		echo "Match found.";
	}else {
		echo "No match found.";
	}
	*/

	//////////////////////////
	//basic function
	/*function sum(){
		echo "Aasi";
	}
	echo nl2br("\nMy name is \n");
	sum();*/


	///////////////////////////
	//Functions with arguments
	$a = 10;
	$b = 20;
	function add($x,$y){
		echo $x + $y;
	}
	add($a,$b);

	function displayDate($day, $date, $year){
		echo '<br>'.$day.' '.$date.' '.$year.'<br>';
	}
	displayDate('Monday',31,2021);


	/////////////////////
	//functions with return value
	function addition($num1, $num2){
		$result = $num1 + $num2;
		return $result;
	}
	echo addition(10,40) + 10;
	function div($num1, $num2){
		$result = $num1 / $num2;
		return $result;
	}
	$value = div(addition(10,10),addition(5,5));
	echo '<br>'.$value.'<br>';


	///////////////////////
	//String function
	$string = 'This is an demo string.';
	$string_word = str_word_count($string);
	$string_word_count = str_word_count($string,1,'.');
	
	echo $string_word.'<br>';
	print_r($string_word_count);

	//string shuffle function
	$string_shuffled = str_shuffle($string);
	echo '<br>' .$string_shuffled;

	//substring function
	$half = substr($string, 0,5);
	echo "<br>".$half;

	//string reverse function 
	$string_reversed = strrev($string);
	echo '<br>' .$string_reversed;

	//similarity function
	$s1 = 'This is my php file.';
	$s2 = ' This is my html file. ';

	similar_text($s1, $s2,$res);
	echo '<br>The similarity between is, '.$res;

	//string length function
	$string_length = strlen($s1);
	echo "<br>".$string_length;

	$s3 = 'This is a string';
	$string_slashes = addslashes($s3);
	echo $string_slashes;




?>