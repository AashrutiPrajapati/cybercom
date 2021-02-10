<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	
</head>
<body>
    <div class="main">
        <h3>LOGIN</h3>
        <form class="lform" action="" method="POST">
			<div class="details">
				<p>Email</p>
				<input type="email" name="email" class="box" id="email">
				
				<p>Password</p>
				<input type="password" name="password" class="box" id="pass">
					
			</div>
			
			<div class="login">
				<input type="submit" name="login" value="LOGIN" class="btn">
                <a href="register.php"><input type="button" name="register" value="REGISTER" class="btn"></a>
			</div>	
		</form>
    </div>

</body>
</html>