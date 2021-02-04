<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
	<link rel="stylesheet" type="text/css" href="form_1.css">
	 
	<!-- <script type="text/javascript" src="user_form.js"></script> -->
</head>
<body>
	<?php
        $nameErr= $passwordErr= $genderErr= $addressErr= $gameErr=$fileErr=$ageErr="";
        $name= $password= $address= $game= $gender=$age=$file="";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr="* Name is required";
            }
            else{
                $name=test_input($_POST["name"]);
            }

            if(empty($_POST["password"])){
                $passwordErr="* Password is required";
            }
            else{
                $name=test_input($_POST["password"]);

            }

            if(empty($_POST["address"])){
                $addressErr="* Address is required";
            }
            else{
                $address=test_input($_POST["address"]);
            }

            if(empty($_POST["game"])){
                $gameErr="* You must select atlist 1 game";
            }
            else{
                $game=test_input($_POST["game"]);
            }

            if(empty($_POST["gender"])){
                $genderErr="* Gender is required";
            }
            else{
                $gender=test_input($_POST["gender"]);
            }

            if(empty($_POST["age"])){
                $ageErr="* Please select age";
            }
            else{
                $age=test_input($_POST["age"]);
            }

            if(empty($_POST["file"])){
                $fileErr="* Please select a file";
            }
            else{
                $file=test_input($_POST["file"]);
            }

        }
        

        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

    ?>
    <div style="width: 50%">
	<form class='form' action="form_1.php" method="POST" name="uform">
	<table class='main' border="1" cellspacing="5">
		<tr>
			<td class='line1' style="background-color: yellow"colspan="2">User Form</td>
		</tr>
		<tr>
			<td>Enter name </td>
			<td><input type="text" name="name" id="name" class="lines">
				<span class="error"><?php echo $nameErr;?></span></td>
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type="Password" name="password" class="lines">
				<span class="error"><?php echo $passwordErr;?></span></td>
		</tr>
		<tr>
			<td>Enter Address</td>
			<td><textarea name="address" cols="30" rows="5" class="lines"></textarea>
				<span class="error"><?php echo $addressErr;?></span>
			</td>
		</tr>
		<tr>
			<td>Select Game</td>
			<td><input type="checkbox" name="game">Hockey<br>
				<input type="checkbox" name="game">Football<br>
				<input type="checkbox" name="game">Badminton<br>
				<input type="checkbox" name="game">Cricket<br>
				<input type="checkbox" name="game">Volleyball
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Male"> Male
				<input type="radio" name="gender" value="Female">Female
				<span class="error"><?php echo $genderErr;?></span>
			</td>
		</tr>
		<tr>
			<td>Select ur age</td>
			<td><select name='age' style="width: calc(100% - 20px);background-color: lightgreen;">
					<option value="none" selected="disabled hidden">Select</option>
					<option value='Below 20'>Below 20</option>
					<option value='Above 20'>Above 20</option>
				</select>
				<span class="error"><?php echo $ageErr;?></span>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;" colspan="2"><input type="file" name="file" style="background-color: lightgreen">
				<span class="error"><?php echo $fileErr;?></span>
			</td>
			
		</tr>
		<tr>
			<td style="text-align: center;" colspan="2">
				<input type="reset" name="reset" value="Reset" class="last_line" >
				<input type="submit" name="submit" value="Submit form" class="last_line" >
			</td>			
		</tr>		
	</table>
</form>
</div>

<div class="details">
	<?php
	echo '<br><b>Your details are : </b><br>';
	echo 'Name: '.$name.'<br>';
	echo 'Adrress: '.$address.'<br>';
	echo 'Gender: '. $gender.'<br>';
	echo 'Age: '.$age.'<br>';
	echo 'File: '.$file;
	?> 
</div>


</body>
</html>
