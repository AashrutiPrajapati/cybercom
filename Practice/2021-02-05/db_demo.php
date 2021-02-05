<?php
	require 'connect.php';
	//echo "connect";
?>

<form action="db_demo.php" method="GET">
	Choose a food type : 
	<select name='uh'>
		<option value="u">Unhealthy</option>
		<option value="h">Healthy</option>
	</select><br>
	<input type="submit" value="Submit">
	
</form>

<?php

	if (isset($_GET['uh'])&&!empty($_GET['uh'])){

		$uh = $_GET['uh'];

		if ($uh == 'u' || $uh == 'h'){

			$query = "SELECT `food`, `calories` FROM `food` ORDER BY `id`";
			$query2 = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='u' ";
			$query3 = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='u' AND `calories`='100";
			$query4 = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`=' $uh' ORDER BY `id`";
			//$query_run = mysqli_query($conn, $query);
			// echo 'ok.';

			if ($query_run = mysqli_query($conn,$query)){
			
				while ($query_row = mysqli_fetch_assoc($query_run)){
					$food = $query_row['food'];
					$calories = $query_row['calories'];

					echo $food.' has '.$calories.' calories.<br>';
				}
				// echo 'Query success.';
			}
			else{
				echo 'Query faild.';
			}

		}
		else {
			echo 'Must be u or h';
		}	

	}

	
	
?>