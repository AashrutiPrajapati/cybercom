<!DOCTYPE html>
<html>
<head>
	<title>Form 5</title>
	<link rel="stylesheet" type="text/css" href="form_5.css">
	<script type="text/javascript" src="form_5.js"></script>
</head>
<body>
	<div class="outer_box">
	<div class="main">
		<div class="top_line">
				<h3>Sign In</h3>
		</div>
		<form class="sform" action="form_5.php" method="POST" onsubmit="return validation()">
			<div class="details">
				<p>Email address</p>
				<input type="email" name="email" placeholder="mail@address.com" class="box" id="email">
				<span id="emailErr" class="error"></span>
				<p>Password</p>
				<input type="password" name="password" placeholder="password" class="box" id="pass">
				<span id="passErr" class="error"></span>
				
			</div>
			
			<div class="sign_in">
				<input type="submit" name="sign in" value="Sign In">
			</div>
			
		</form>
	</div>
	<div>
		<p><b>Your details :</b></p>
		<p id="printEmail"></p>
		<p id="printPassword"></p>
	</div>
	</div>

	
</body>
</html>