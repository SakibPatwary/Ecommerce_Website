
document.getElementById('name').addEventListener('keyup', namevalidation);
function firstnamevalidation(e) {
    if (document.getElementById('name').value == "") {
        document.getElementById('validatename').innerHTML = "Name is required";
    }
    else {
        document.getElementById('validatename').innerHTML = "";
    }
}

document.getElementById('username').addEventListener('keyup', usernamevalidation);
function firstnamevalidation(e) {
    if (document.getElementById('username').value == "") {
        document.getElementById('validateusername').innerHTML = "Username is required";
    }
    else {
        document.getElementById('validateusername').innerHTML = "";
    }
}

document.getElementById('phone').addEventListener('keyup', phonevalidation);
function phonevalidation(e) {
    if (document.getElementById('phone').value == "") {
        document.getElementById('validatephone').innerHTML = "Phone number is required";
    }
    else if (document.getElementById('phone').value.length < 11) {
        document.getElementById('validatephone').innerHTML = "Phone number is invalid";
    }
    else {
        document.getElementById('validatephone').innerHTML = "";
    }
}

document.getElementById('email').addEventListener('keyup', emailvalidation);
function uservalidation(e) {
    if (document.getElementById('email').value == "") {
        document.getElementById('validateemail').innerHTML = "Email is required";
    }
    else {
        document.getElementById('validateemail').innerHTML = "";
    }
}

document.getElementById('password').addEventListener('keyup', passwordvalidation);
function passvalidation(e) {
    if (document.getElementById('password').value == "") {
        document.getElementById('validatepassword').innerHTML = "Password is required";
    }
    else if (document.getElementById('password').value.length < 6) {
        document.getElementById('validatepassword').innerHTML = "Password Must be at least 6 character";
    }
    else {
        document.getElementById('validatepassword').innerHTML = "";
    }

}

document.getElementById('confirmpassword').addEventListener('keyup', confirmpasswordvalidation);
function cpassvalidation(e) {
    if (document.getElementById('confirmpassword').value == "") {
        document.getElementById('validateconfirmpassword').innerHTML = "Confirm Password is required";
    }
    else if (document.getElementById('confirmpassword').value != document.getElementById('password').value) {
        document.getElementById('validateconfirmpassword').innerHTML = "Password does not match!";
    }
    else {
        document.getElementById('validateconfirmpassword').innerHTML = "";
    }

}

