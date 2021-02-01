<?php
	//Assignment operator
	$num = 10;
	$num +=2;   //$num1 = $num1 + 2;
	echo $num;
	$num -=2;
	echo nl2br("\r\n".$num);

	$text = nl2br("\nhello");
	$text .= "world";     //concatination using assignment operator
	echo $text;

	//comparision operator ==,>,<,>=,<=,!=
	$a = 10;
	$b = 10;
	$c = 20;
	if ($a == $b) {
		echo nl2br("\nRigth");
	}
	if ($a > 2){
		echo nl2br("\nTrue");
	}
	else{
		echo "False";
	}

	$password = 'password';
	if ($password == 'password') {
		echo nl2br("\nCorrect\n");
	}else{
		echo "Wrong";
	}

	//Arithmetic operators  +,-,*,/,modulus,++,--
	echo $sum = 10 +30;
	$div = 30/3;
	echo nl2br("\n".$div);
	//echo "<br>";

	$result = $a + $b / 2 * $c;
	echo "<br>".$result;
	$a++;
	echo "<br>", $a;

	//Logical operators &&,||,!=
	$num1 = 100;
	$upper = 1000;
	$lower = 500;

	if ($num1 >= $lower && $num1<=$upper){
		echo "<br>ok";
	}
	else{
		echo "<br>not ok";
	}

	//triple equals
	$x = '1';
	$y = 1;
	if ($x === $y) {
		echo "<br>Equal.";
	}else{
		echo "<br>Not equal.";
	}

?>