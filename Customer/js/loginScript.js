function validateform(){  
		var name=document.myform.uname.value;  
		var password=document.myform.pass.value;

		if (uname==null || name=="")
		{  
		  alert("Name can't be blank");  
		  return false;  
		}
		else if(password.length<8)
		{  
		  alert("Password must be at least 8 characters long.");  
		  return false;  
		  }  
		}
		
		function checkEmpty() {
		  	if (document.myform.name.value = "") {
		  		alert("Enter your name,Please ");
		        return false;  
		  	}
		  }  
		function checkUName() {
			if (document.getElementById("uname").value == "") {
			  	document.getElementById("uNameErr").innerHTML = "Enter your name,Please ";
			  	document.getElementById("uNameErr").style.color = "red";
			  	document.getElementById("uname").style.borderColor = "red";
			}else{
			  	document.getElementById("uNameErr").innerHTML = "";
				document.getElementById("uname").style.borderColor = "black";
			}
			
        }
        function checkPass(){
        	if (document.getElementById("pass").value == "") {
			  	document.getElementById("passErr").innerHTML = "Enter your password,Please";
			  	document.getElementById("passErr").style.color = "blue";
			  	document.getElementById("pass").style.borderColor = "red";
			}else if(document.getElementById("pass").value
				.length<8){
			  	
				document.getElementById("passErr").innerHTML = "Password must be at least 8 characters long.";
			}
			else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("pass").style.borderColor = "black";
			}
        }