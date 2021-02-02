<?php
	////////////////////////
	//timestamps in php
	
	$time = time();
	$actual_time = date('H:i:s', $time);
	$actual_date = date('d m y', $time);
	$actual_date_time = date('D M Y @ H:i:s', $time);

	echo 'The current time is '.$actual_time;
	echo '<br>The current date is '.$actual_date;
	echo '<br>The current date and time is '.$actual_date_time; 

	/////////////////////////////
	//modifying timestapms
	$time_now = date('D M Y @ H:i:s', $time);
	$time_modified = date('D M Y @ H:i:s', $time-60);
	echo '<br> The time now is '.$time_now.'<br> The time modified is '.$time_modified;

	$time_modified = date('D M Y @ H:i:s', strtotime('+1 year'));
	echo '<br> The time now is '.$time_now.'<br> The time modified is '.$time_modified;

	$time_modified = date('D M Y @ H:i:s', $time-(7*24*30*30));
	echo '<br><br> The time now is '.$time_now.'<br> The time modified is '.$time_modified.'<br>' ;
	

	//////////////////////////////
	//random number generation
	$rand = rand();
	echo $rand;

	$max = getrandmax();
	echo '<br>'.$rand.'/'.$max;

	if (isset($_POST['roll'])){
		$rand = rand(1,10);
		echo '<br><br>You rolled a '.$rand;
	}
?>


<form action="timestamp_rand.php" method="POST">
	<input type="submit" name="roll" value="Roll Dice">
</form>