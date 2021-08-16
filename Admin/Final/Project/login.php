<?php 
include 'upperHeader.php';

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["uname"],time()+ (86400*30));
	setcookie ("password",$_POST["pass"],time()+ (86400*30));
	echo $_COOKIE['username'];
} else {
	setcookie("username","");
	setcookie("password","");
}
$username = $password = "admin";
if (isset($_POST['submit'])) 
 {               
 	if($_POST['uname']==$username && $_POST['pass'] == $password)
 	{
 		$_SESSION['uname'] = $username;
 		$_SESSION['password'] = $password;
 		
		header("location:welcome.php");
 	}
 	else{
		$msg="username or password invalid";
	}
 } 
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css"> 

</head>
<body>

<form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="validateform()">
	
	<table align="center">
		
		<tr>
			<th colspan="2" align="center"><h2>Login</h2></th>
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top" class=text-danger font-weight-bold"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="uname" id="uname" onblur="checkUName()" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"></td>
			<td><span id="uNameErr"></span></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" id="pass" onblur="checkPass()" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"></td>
			<td><span id="passErr"></span></td>
		</tr>
		<tr>
			<td align="middle" colspan="2"><input type="checkbox" name="remember">Remember Me<br><br></td>
		</tr>
		<tr>
			<td align="middle" colspan="2"><input type="submit" name="submit" value="login"> </td>
		</tr>

	</table>
	<script src="js/loginScript.js"></script>
	<?php include 'lowerFooter.php' ?>



</form>

</body>
</html>