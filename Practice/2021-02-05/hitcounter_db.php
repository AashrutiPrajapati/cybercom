<?php
	require 'connect.php';

	$user_ip = $_SERVER['REMOTE_ADDR'];
	//echo $user_ip;

	function ip_exists(mysqli $link,$ip){
		global $user_ip;    //if not return this line not display ip address
		//echo $user_ip;
		$query = "SELECT `ip` FROM `hits_ip` WHERE `ip` = '$user_ip'";
		$query_run = mysqli_query($link, $query);
		$query_num_rows = mysqli_num_rows($query_run);

		if (mysqli_num_rows($query_run) == 0){
			return false;
		}
		else if (mysqli_num_rows($query_run)>=1){
			return true;
		}
	}

	function ip_add(mysqli $link,$ip){
		$query = "INSERT INTO `hits_ip` VALUES ('$ip')";
		$query_run = mysqli_query($link, $query);
	}

	function update_count(mysqli $link){
		$query = "SELECT `count` FROM `hits_count`";
		if($query_run = mysqli_query($link,$query)){
			//$count = mysqli_result($query_run, 0, 'count');
			$row =mysqli_fetch_assoc($query_run);
			$count = $row['count'];
			echo $count;

			$count_inc = $count + 1;

			//////////////////////////////
			//update the count value
			$query_update = "UPDATE `hits_count` SET `count` = '$count_inc'";

			if ($query_upadate_run = mysqli_query($link,$query_update)){
				echo 'Ok.';
			}
		}	
}


if (!ip_exists($conn,$user_ip)){
	update_count($conn);
	ip_add($conn,$user_ip);

}else {
	echo 'Do not';
}

?>