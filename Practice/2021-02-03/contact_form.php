<?php
	////////////////////////////
	//contzct form creation
	if (isset($_POST['contact_name'])&&isset($_POST['contact_email'])&&isset($_POST['contact_text'])){
		$contact_name = $_POST['contact_name'];
		$contact_email = $_POST['contact_email'];
		$contact_text = $_POST['contact_text'];

		if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)){
	
			$to = 'abc@gmail.com';
			$subject = 'Contact form submitted.';
			$body = $contact_name."\n".$contact_text;
			$headers ='Form: '.$contact_email;
			if (@mail($to, $subject, $body, $headers)){
				echo 'Thanks for connecting us.';
			}
			else{
				echo 'Sorry, an error occurred.Please try again.';
			}
		}
		else{
			echo 'All fields are required';
		}
	}

?>

<form action="contact_form.php" method="POST">
	Name: <br>
	<input type="text" name="contact_name" maxlength="15"><br><br>
	Email address: <br>
	<input type="text" name="contact_email" maxlength="25"><br><br>
	Message: <br>
	<textarea name="contact_text" rows="7" cols="30" maxlength="100"></textarea><br><br>
	<input type="submit" value="Send">
</form>