function  validation(){
	var email = document.getElementById("email").value;
	var password = document.getElementById("pass").value;

	var flag = 0;
	if (email == "") {

		document.getElementById("emailErr").textContent = "* Please enter email";
		flag = 1;

	}
	if (password == "") {
		document.getElementById("passErr").textContent = "* Please enter password";
		flag = 1;

	}
	if (flag == 1){
		
		
		return false;

	}
	else{
		document.getElementById("printEmail").textContent = email;
		document.getElementById("printPassword").textContent = password;
		return false;

	}
}