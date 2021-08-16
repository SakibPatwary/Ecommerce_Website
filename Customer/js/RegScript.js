function validateform(){  
		var name=document.getElementById("name").value;  
		var email=document.getElementById("email").value; 
		var un=document.getElementById("un").value; 
		var pass=document.getElementById("pass").value; 
		var Cpass=document.getElementById("Cpass").value; 
		var gender=document.myform.gender.value;
		var dob=document.getElementById("dob").value;

		  
		if (name==""){  
		  document.getElementById("NameErr").innerHTML = "Enter Name";  
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

		if (un=="") {
			document.getElementById("unErr").innerHTML = "Username can not be empty";
			return false;
		}else{
	  	document.getElementById("unErr").innerHTML = "";
		}

		if (pass=="") {
			document.getElementById("passErr").innerHTML = "Password can not be empty";
			return false;
		}else{
	  	document.getElementById("passErr").innerHTML = "";
		}

		if (pass.length < 8) {
			document.getElementById("passErr").innerHTML = "Password length should be atleast 8 character";
			return false;
		}else{
	  	document.getElementById("passErr").innerHTML = "";
		}

		if (pass != Cpass) {
			document.getElementById("CpassErr").innerHTML = "Passwords are not matching";
			return false;
		}else{
	  	document.getElementById("CpassErr").innerHTML = "";
		}

		if (gender=="") {
			document.getElementById("genderErr").innerHTML = "Gender can not be empty";
			return false;
		}else{
	  	document.getElementById("genderErr").innerHTML = "";
		}

		if (dob=="") {
			document.getElementById("dobErr").innerHTML = "Date of birth can not be empty";
			return false;
		}else{
	  	document.getElementById("dobErr").innerHTML = "";
		}


}


function checkNameBlur() {
	if (document.getElementById("name").value == "") {

	  	document.getElementById("NameErr").innerHTML = "Enter Name";
	  	document.getElementById("NameErr").style.color = "red";
	    document.getElementById("name").style.borderColor = "red";

	}else{
	  	document.getElementById("NameErr").innerHTML = "";
	  	document.getElementById("name").style.borderColor = "black";
	}


}
		
		   
function checkEmail(){
var email=document.getElementById("email").value;
	atpos = email.indexOf("@");
		dotpos = email.lastIndexOf(".");
		if (atpos < 1 || ( dotpos - atpos < 2 )) {
			document.getElementById("emailErr").innerHTML = "Please enter correct email ID";
			document.getElementById("emailErr").style.color = "red";
	        document.getElementById("email").style.borderColor = "red";
		}
}



function checkUn() {
	if (document.getElementById("un").value == "") {

	  	document.getElementById("unErr").innerHTML = "Enter User-Name";

	}else{
	  	document.getElementById("unErr").innerHTML = "";
	}

	
}

function checkPass() {
	if (document.getElementById("pass").value == "") {

	  	document.getElementById("passErr").innerHTML = "Enter Password";
	  	document.getElementById("passErr").style.color = "blue";
		document.getElementById("pass").style.borderColor = "red";

	}else{
	  	document.getElementById("passErr").innerHTML = "";
	  	document.getElementById("pass").style.borderColor = "red";
	    document.getElementById("passErr").style.color = "blue";
	}

	
}

function checkCpass() {
	if (document.getElementById("Cpass").value == "") {

	  	document.getElementById("CpassErr").innerHTML = "Confirm Password";

	}else{
	  	document.getElementById("CpassErr").innerHTML = "";
	}

	
}

