<input type="text" name="name"> <br> 
<?php
	echo "<strong> hello! </strong><br>";
	print("Hello world");

	//html tag use in php echo
	echo "<br><input type='text' name='name'><br>"; 
	echo "<input type='text' name='name' value='Alex'><br>";
	
	//variable declaration in php
	$text = 'Good Morning';
	$number = 20; 
	echo $text, $number ,"<br>";
	echo $number ;
	echo "<br><br>";

	//concatination in php
	$day = 'Thursday';
	$date = 31;
	$year = 2021;
	echo 'The date is ' .$day.' '.$date. ' '.$year;
	echo '<br>The date is <strong> '.$date. '</strong>';

?>


<br><input type="text" name="name" value="<?php echo $text; ?>"> 

