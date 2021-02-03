////////////registartion form validation

function check(){
	var username = document.getElementById("name").value;
	if (username == ""){
		// alert("It is requied");
		document.getElementById("nameerror").textContent="Please enter name";
		return false;
	}	

}