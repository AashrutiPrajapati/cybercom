function validateform(){
var email=document.login_form.email.value;  
	var password=document.login_form.password.value;  
	var flag=0;
	if (email==null || email==""){  
		document.getElementById("emailErr").textContent="* Please enter email";
	  flag=1;
	}
	if(password==null || password==""){  
		document.getElementById("passErr").textContent="* Please enter password";
	 flag=1;
	 
	  }  
	  if(flag==1)
	  {
	  	console.log("error");
	  	flag=0;
	  	return false;
	  }
	  else
	  {
	  	var result = JSON.parse(localStorage.getItem("admin"));
	  	if (email == result.email || password == result.password) {
	  		var loginUser = {
	  			email: document.login_form.email.value,
	  			password: document.login_form.password.value
	  		};
	  		localStorage.setItem("loginUser",JSON.stringify(loginUser));
	  		
	  		window.location.href = "./dashboard.html";
	  	}



	  	console.log("OK");
	  	flag=0
	  	return false;
	  }

}
