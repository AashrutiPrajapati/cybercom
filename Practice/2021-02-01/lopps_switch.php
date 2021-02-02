<?php
	$counter = 1;

	//while loop
	while ($counter<10) {
		echo $counter .'Hello<br>';
		$counter++;
	}

	//do while loop
	$num = 0;
	do {
		echo 'This will always show.<br>';
		$num++;
	}while ($num<=5);
	

	//for loop
	for ($a=0; $a <=10 ; $a++) { 
		echo $a, '<br>';
	}

	//switch statements
	$x = 1;
	switch ($x) {
		case 1:
			echo "One";
			break;
		case 2:
			echo "Two";
			break;
		case 3:
			echo "Three";
			break;
		
		default:
			echo "Other no.";
			break;
	}

	$day = 'saturday';
	switch ($day) {
		case 'saturday':
		case 'sunday':
			echo "<br>It is weekend";
			break;
		default:
			echo "Not weekend";
			break;
	}


?>