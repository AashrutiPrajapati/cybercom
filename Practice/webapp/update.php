<?php
    include "connection.php";

    $id=$_GET['id'];
    $query=mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");

    while ($res=mysqli_fetch_assoc($query)) {
        $id=$res['id'];
        $name=$res['name'];
        $email=$res['email'];
        $phno=$res['phone'];
        $title=$res['title'];
    }
?>

<?php
	if(isset($_POST["submit"]))
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phno=$_POST['phno'];
		$title=$_POST['title'];
		$create=$_POST['created'];

		$query="UPDATE user SET name='".$name."', email='".$email."', phone='".$phno."', title='".$title."', created='".$create."' where id='".$id."'";

		if($result=mysqli_query($conn,$query))
		{
			 header("location:contacts.php");
            // echo "Ok.";
		}
        else
        {
            echo "Please check the query";
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create page</title>
	<link rel="stylesheet" type="text/css" href="update.css">
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
		<h3>Update Contact </h3><hr>
		<form class="cform" method="POST" action="update.php">
		<div class="inner-form">
			<div class="form_fields">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                
				<p class="lable">Name</p>
				<input type="name" placeholder="Firstname Lastname" class="box" id="name" name="name" value="<?php echo $name; ?>">
				<span id="nameErr" class="error"></span>

				<p class="lable">Email</p>
				<input type="email" placeholder="abc@gmail.com" class="box" id="email" name="email" value="<?php echo $email; ?>">
				<span id="emailErr" class="error"></span>

				<p class="lable">Phone</p>
				<input type="text" placeholder="123456789" class="box" id="ph_no" name="phno" value="<?php echo $phno; ?>">
				<span id="phoneErr" class="error"></span>
			</div>
			
			<div class="form_fields">
				<p class="lable">Title</p>
				<input type="text" placeholder="Employee" class="box" name="title" value="<?php echo $title; ?>">

				<p class="lable">Created</p>
				<input type="text" placeholder="10/02/2021 21:00" class="box" id="datetime" name="created" value="<?php echo date('Y-m-d').' '.date('H:i');;?>">
					
			</div>
		</div>		
			<input type="submit" name="submit" value="Update" class="btn">
		</form>
			
	</div>
		
	<!-- <script type="text/javascript" src="./create.js"></script> -->
	

</body>
</html>