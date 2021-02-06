function addUser(){
	var arr = [];	
	var obj={
		name:document.getElementById("name").value,
		email:document.getElementById("email").value,
		password:document.getElementById("pass").value,
		birth:document.getElementById("birth").value
	};
	var arrResult = JSON.parse(localStorage.getItem("arr"));
	arrResult.push(obj);
	localStorage.removeItem('arr');
	localStorage.setItem("arr",JSON.stringify(arrResult));

	
	console.log(arrResult);

	var e = "";
	for (var i=0; i<arrResult.length; i++){
		
		e+="Name : "+arrResult[i].name + " email : "+arrResult[i].email + "birth : "+arrResult[i].birth;
		e+="<br/>";
	}
	var box = document.getElementById("box");
	box.textContent = e;

}
