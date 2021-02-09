<!DOCTYPE html>
<html>
<head>
	<title>Create page</title>
	<link rel="stylesheet" type="text/css" href="create.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main">
            <div class="brand">
                Website Title
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="./contacts.php"><i class="fa fa-address-book"></i> Contacts </a></li>
                </ul>
            </div>
     </div>
	
	<div class="details">
		<h3>Create Contacts</h3><hr>
		<form class="cform" method="POST" onsubmit="return validation()">
		<div class="inner-form">
			<div class="form_fields">
				<p class="lable">Name</p>
				<input type="name" placeholder="Firstname Lastname" class="box" id="name" name="name" >
				<span id="nameErr" class="error"></span>

				<p class="lable">Email</p>
				<input type="email" placeholder="abc@gmail.com" class="box" id="email" name="email">
				<span id="emailErr" class="error"></span>

				<p class="lable">Phone</p>
				<input type="text" placeholder="123456789" class="box" id="ph_no" name="phno">
				<span id="phoneErr" class="error"></span>
			</div>
			
			<div class="form_fields">
				<p class="lable">Title</p>
				<input type="text" placeholder="Employee" class="box" name="title">

				<p class="lable">Created</p>
				<input type="text" placeholder="10/02/2021 21:00" class="box" id="datetime" name="created" value="<?php echo date('Y-m-d').' '.date('H:i');;?>">
					
			</div>
		</div>		
			<input type="submit" name="submit" value="Create" class="btn">
		</form>
			
	</div>
		
	<script type="text/javascript" src="./create.js"></script>
	<?php
			include "connection.php";

			//Now insert the contact in the database table
			if (isset($_POST['submit'])){
				$name=mysqli_real_escape_string($conn, $_POST['name']);
				$email=mysqli_real_escape_string($conn,$_POST['email']);
				$phno=mysqli_real_escape_string($conn,$_POST['phno']);
				$title=mysqli_real_escape_string($conn,$_POST['title']);
				$create=mysqli_real_escape_string($conn,$_POST['created']);

				$query = "SELECT `name` FROM user WHERE `name`='".$name."'";
				$query_run = mysqli_query($conn, $query);

				if (mysqli_num_rows($query_run)==1){
					echo 'The name '.$name.' already exists.';
				}
				else{
					//echo 'ok';
					$insquery = "INSERT INTO user VALUES ('','$name','$email','$phno','$title', '$create')";
					
					if ($query_run = mysqli_query($conn, $insquery)){
						header('refresh:0 url= contacts.php');
						echo '<script> alert("Contact is created")</script>'; 
					}
					else {
						echo 'Sorry, we could not register you.';
					}
				}
			}
		
	?>

</body>
</html>