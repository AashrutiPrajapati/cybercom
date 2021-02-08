<?php
	require 'core.php';
	require 'connect.php';
	//////////////////////////////
	//registration page

	if (!loggedin()) {
		//echo 'Register.';
		if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_again = $_POST['password_again'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];

			if (!empty($username) && !empty($password) && !empty($firstname) && !empty($lastname)){
				if ($password !=$password_again){
					echo 'Passwords do not match';
				}
				else {
					//echo 'ok.';
					$query = "SELECT username FROM user WHERE username='".$username."'";
					$query_run = mysqli_query($conn, $query);

					if (mysqli_num_rows($query_run)==1){
						echo 'The username '.$username.' already exists.';
					}
					else{
						//echo 'ok';
						$query = "INSERT INTO user VALUES ('','".mysqli_real_escape_string($conn, $username)."','".mysqli_real_escape_string($conn,$password)."','".mysqli_real_escape_string($conn,$firstname)."','".mysqli_real_escape_string($conn,$lastname)."')";
						if ($query_run = mysqli_query($conn, $query)){
							header('Location: register_success.php');
						}
						else {
							echo 'Sorry, we could not register you.';
						}
					}
				}

			}
			else {
				echo 'All fields are reqired.';
			}
		}


	?>
	<form action="register.php" method="POST">
		Username : <input type="text" name="username" value="<?php echo $username;?>"><br><br>
		Password : <input type="password" name="password"><br><br>
		Password again : <input type="password" name="password_again"><br><br>
		First name : <input type="text" name="firstname" value="<?php echo $firstname;?>"><br><br>
		Last name : <input type="text" name="lastname" value="<?php echo $lastname;?>"><br><br>
		<input type="submit" value="Register">
		
	</form>


	<?php 	
	}
	else if (loggedin()) {
		echo 'You are already registered and logged in';
	}
?>