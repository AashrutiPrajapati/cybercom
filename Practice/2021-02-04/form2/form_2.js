function validate(){
	var firstName = document.getElementById("fname").value;
	var password = document.getElementById("pass").value;
	var gen = document.getElementsByName("gender");
	var addr = document.getElementById("address").value;
	var marital = document.getElementsByName("marital");
	
	var flag =0;
	if (firstName == ""){
		//alert("This is required");
		document.getElementById("fnameErr").textContent="* Please enter name";
		flag=1;
	}
	
	if (password == ""){

		document.getElementById("passErr").textContent="* Please enter password";
		flag=1;
	
	}
	if (!(gen[0].checked || gen[1].checked)){
		document.getElementById("genderErr").textContent="* Please Choose gender";
		flag=1;
	
	}
	if (addr == ""){

		document.getElementById("addrErr").textContent="* Please enter password";
		flag=1;
	
	}

	if (!(marital[0].checked || marital[1].checked)){
		document.getElementById("maritalErr").textContent="* Please Choose one";
		flag=1;
	
	}
	if(flag == 1){
		return false;
	}
	else
	{
		document.getElementById("printName").textContent=firstName;
		if(gen[0].checked)
		{
			document.getElementById("printGender").textContent=gen[0].value;
		}
		else
		{
			document.getElementById("printGender").textContent=gen[1].value;
		}
		
		document.getElementById("printAddress").textContent=addr;
		
		var game = document.getElementsByClassName("xx");
		var x="";
		var i = 0;
		for (i=0;game[i]; i++){
			if(game[i].checked){
				x =x+" "+ game[i].value;				
			}
		}
		document.getElementById("printGame").textContent=x;
		return false;
	}

}

