<?php
	// require 'connect.php';
	// require 'core.php';
	// echo $current_file;

	////////////////////////////////////////
	//login form

	if (isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($username) && !empty($password)){
			//echo 'ok.';
			$query = "SELECT id FROM user WHERE username='$username' AND password='$password'";

			if ($query_run = mysqli_query($conn, $query)){
				$query_num_rows = mysqli_num_rows($query_run);

				if ($query_num_rows==0){
					echo 'Invalid username/password combination.';
				}
				else if ($query_num_rows==1) {
					//echo 'ok.';
					//echo $user_id = mysqli_result($query_run,0,'id');

					$row =mysqli_fetch_assoc($query_run);
					$id = $row['id'];     //get id of uesr from the database 
					echo $id;

					// $_SESSION['user_id']=$id;
					// header('Location: index.php');
				}
			}
		}
		else {
			echo 'Must enter details.';
		}
	}

?>

<form action="<?php echo $current_file; ?>" method="POST">
	User Name : <input type="text" name="username"><br>
	Password : <input type="password" name="password"><br>
	<input type="submit" value="Log in">
	
</form>