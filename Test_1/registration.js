function regi(){
	var name=document.rform.name.value;
	var email=document.rform.email.value;  
	var password=document.rform.pass.value; 
	var flag=0;

	if (name==null || name==""){  
		document.getElementById("nameErr").textContent="* Please enter name";
	  flag=1;
	}
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
	  	if (result==null){
	  		var admin={
	  			name: document.rform.name.value,
	  			email: document.rform.email.value,
	  			password: document.rform.pass.value
	  		};
	  		localStorage.setItem("admin",JSON.stringify(admin));
	  		window.location.href="./login.html";
	  	}
	  	else {
	  		document.getElementById("message").textContent="* You have already registred";
	  		document.rform.register.disabled="false";

	  	}

	  	console.log("OK");
	  	flag=0
	  	return false;
	  }


 

  

}