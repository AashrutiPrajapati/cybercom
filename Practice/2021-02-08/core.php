<?php
	ob_start();
	session_start();
	$current_file = $_SERVER['SCRIPT_NAME'];        
	$http_referer = $_SERVER['HTTP_REFERER'];       

	//////////////////////////
	//Function for if you are login ?
	function loggedin(){
		if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
			return true;
		}
		else {
			return false;
		}
	}

	function getField(mysqli $link, $field){
		//echo $_SESSION['user_id'];
		$query = "SELECT $field FROM user WHERE id='".$_SESSION['user_id']."'";
		if ($query_run = mysqli_query($link, $query)){
			$query_result =mysqli_fetch_assoc($query_run);
			$field = $query_result[$field]; 
		
			return $field;
		}
	}



?>