<!DOCTYPE html>
<html>
<head>
	<title>Form 2</title>
	<link rel="stylesheet" type="text/css" href="form_2.css">
	<script type="text/javascript" src="form_2.js"></script>
</head>
<body>
	<form name="uform2" action="form_2.php" method="POST" class="form" onsubmit="return validate()">
		<fieldset class="field">
			<legend style="text-align: center;"><b>USER FORM</b></legend>
				<table class="main"  >
					<tr>
						<td><ul><li>FIRST NAME</li></ul>
						</td>
						<td><input type="text" name="name" class="text" id="fname">
							<span id="fnameErr" class="error"></span>
						</td>
					</tr>
					<tr>
						<td><ul><li>PASSWORD</li></ul></td>
						<td><input type="password" name="password" class="text" id="pass">
							<span id="passErr" class="error"></span>

						</td>
					</tr>
					<tr>
						<td><ul><li>GENDER</li></ul></td>
						<td><input type="radio" name="gender" value="Male" id="1" class="gender"> Male
							<input type="radio" name="gender" value="Female" id="1" class="gender">Female
							<span id="genderErr" class="error"></span>
						</td>
					</tr>
					<tr>
						<td><ul><li>ADDRESS</li></ul></td>
						<td><textarea cols="30" rows="5" name="address" class="text" id="address"></textarea>
							<span id="addrErr" class="error"></span></td>
					</tr>
					<tr>
						<td><ul><li>D.O.B</li></ul></td>
						<td><select name="dob">
								<option value="Jan" selected>Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="May">May</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Aug">Aug</option>
								<option value="Sep">Sep</option>
								<option value="Oct">Oct</option>
								<option value="Nov">Nov</option>
								<option value="Dec">Dec</option>
							</select>
							<select name="dob">
								<option value="1" selected>1</option><option value="2">2</option>
								<option value="3">3</option><option value="4">4</option>
								<option value="5">5</option><option value="6">6</option>
								<option value="7">7</option><option value="8">8</option>
								<option value="9">9</option><option value="10">10</option>
								<option value="11">11</option><option value="12">12</option>
								<option value="13">13</option><option value="14">14</option>
								<option value="15">15</option>
							</select>
							<select name="dob">
								<option value="1995" selected>1995</option>
								<option value="1996">1996</option><option value="1997">1997</option>
								<option value="1998">1998</option><option value="1999">1999</option>
								<option value="2000">2000</option><option value="2001">2002</option>
								<option value="2003">2003</option><option value="2004">2004</option>
								<option value="2005">2005</option>
							</select>	
						</td>
					</tr>
					<tr>
						<td><ul><li>SELECT GAME</li></ul></td>
						<td><input type="checkbox" name="game" class="xx" value="Hockey"> Hockey
							<input type="checkbox" name="game" class="xx" value="Football"> Football
							<input type="checkbox" name="game" class="xx" value="Cricket"> Cricket
							<input type="checkbox" name="game" class="xx" value="Volleyball"> Volleyball
						</td>
					</tr>
					<tr>
						<td><ul><li>MARITAL STATUS</li></ul></td>
						<td><input type="radio" name="marital" value="Married"> Married
							<input type="radio" name="marital" value="Unmarried"> Unmarried
							<span id="maritalErr" class="error"></span>
						</td>
					</tr>
					<tr>
						<td style="text-align: center;" colspan="2">
							<input type="submit" name="submit" value="Submit" class="last_line" >
							<input type="reset" name="reset" value="Reset" class="last_line" >
							
						</td>			
					</tr>	
					<tr>
						<td colspan="2" style="text-align: center;"><input type="checkbox" name="agree">I agree to above details</td>
					</tr>	

				</table>

		</fieldset>

	</form>
	<div>
		<p><b>Your details :</b></p>
		<p id="printName"></p>
		<p id="printGender"></p>
		<p id="printAddress"></p>
		<p id="printGame"></p>
		<!-- <p id="printStatus"></p> -->
	</div>


</body>
</html>