<?php
	/////////////////
//GET method
if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
	$day = $_GET['day'];
	$date = $_GET['date'];
	$year = $_GET['year'];
	if (!empty($day)&&!empty($date)&&!empty($year)){
		echo 'It is '.$day.' '.$date.' '.$year;
	}else{
		echo 'Fill the details.';
	}

}
?>

<form action="get.php" method="GET">
	DAY : <br><input type="text" name="day"><br>
	DATE : <br><input type="text" name="date"><br>
	YEAR: <br><input type="text" name="year"><br><br>
	<input type="submit" value="SUBMIT">
	
</form>