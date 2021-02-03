<?php
	if (isset($_POST['form_submitted'])){
		if (!isset($_POST['agree'])){
			echo 'You not accepted above details';
		}
		else{
			echo 'Thank you '.$_POST['firstname'].' '.$_POST['lastname'];
		}		
	}
	else{
		echo '<br>Please registred the form';
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="user_form.js"></script>
</head>
<body>
	<h2>Registration Form</h2>
	<form action="registration_form.php" method="POST" onsubmit="check()">
		First Name: 
		<input type="text" name="firstname" id="name">
		<span id="nameerror"></span>
		<br><br>
		Last Name:
		<input type="text" name="lastname"><br><br>
		Agree to above details : 
		<input type="checkbox" name="agree"><br><br>
		<input type="hidden" name="form_submitted" value='1'>
		<input type="submit" value="Submit">
	</form>
</body>
</html>



