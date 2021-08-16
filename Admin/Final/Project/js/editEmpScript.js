function validateform(){  
		var name=document.getElementById("name").value;  
		var email=document.getElementById("email").value; 
		// // var gender=document.myform.gender.value;
		// var dob=document.getElementById("dob").value;

		  
		if (name==""){  
		  document.getElementById("NameErr").innerHTML = "Name can not be empty";  
		  return false;  
		}

		if (email=="") {
			document.getElementById("emailErr").innerHTML = "Email can not be empty";
			return false;	
		}else{
	  	document.getElementById("emailErr").innerHTML = "";
		}
		

		atpos = email.indexOf("@");
		dotpos = email.lastIndexOf(".");
		if (atpos < 1 || ( dotpos - atpos < 2 )) {
			document.getElementById("emailErr").innerHTML = "Please enter correct email ID";
			return false;
		}

}
function checkEmail(){
var email=document.getElementById("email").value;
	atpos = email.indexOf("@");
		dotpos = email.lastIndexOf(".");
		if (atpos < 1 || ( dotpos - atpos < 2 )) {
			document.getElementById("emailErr").innerHTML = "Please enter correct email ID";
		}else{
	  	document.getElementById("emailErr").innerHTML = "";
	}
}

function checkNameBlur() {
	if (document.getElementById("name").value == "") {

	  	document.getElementById("NameErr").innerHTML = "Name can't be blank";

	}else{
	  	document.getElementById("NameErr").innerHTML = "";
	}
}

// function checkEmail(){
// var email=document.getElementById("email").value;
// 	atpos = email.indexOf("@");
// 		dotpos = email.lastIndexOf(".");
// 		if (atpos < 1 || ( dotpos - atpos < 2 )) {
// 			document.getElementById("emailErr").innerHTML = "Please enter correct email ID";
// 		}else{
// 	  	document.getElementById("emailErr").innerHTML = "";
// 	}
// }