function validation(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var num = document.getElementById("ph_no").value;

	var flag =0;
	if (name == ""){
		//alert("This is required");
		document.getElementById("nameErr").textContent="* Please enter name";
		flag=1;
	}
	if (email == ""){
		document.getElementById("emailErr").textContent="* Please enter email";
		flag=1;
	}
	if (num == ""){
		document.getElementById("phoneErr").textContent="* Please enter phone no.";
		flag=1;
	}
	if(flag == 1){
		return false;
	}

}


