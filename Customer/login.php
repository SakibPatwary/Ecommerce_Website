<?php 
 include 'header.php';

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["un"],time()+ (86400*30));
	setcookie ("password",$_POST["pass"],time()+ (86400*30));
	echo $_COOKIE['username'];
} else {
	setcookie("username","");
	setcookie("password","");
}
$username = $password = "customer";

 if (isset($_POST['submit'])) 
 {               
   if($_POST['un']==$username && $_POST['pass'] == $password)
 	{
 		$_SESSION['un'] = $username;
 		$_SESSION['password'] = $password;
 		
		header("location:logged in dashboard.php");
 	}
 	else{
		$msg="username or password invalid";
	}
 } 
 
 ?>
 <!DOCTYPE html>
<html>
<head>
<style>
body{
        background-color:lavender;
      }
</style>
</head>
<body>
	<br>
	<fieldset >

	<form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="validateform()">
	<fieldset style="width: 550px";>
		<tr>
			<legend><b>LOGIN</b></legend>
		</tr>
	
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="un" id="uname" onblur="checkUName()" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"></td>
			<td><span id="uNameErr"></span></td>
		</tr>
		<br>
		<br>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" id="pass" onblur="checkPass()" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"></td>
			<td><span id="passErr"></span></td>
		</tr>
		<br><br>
		<tr>
			<td align="middle" colspan="2"><input type="checkbox" name="remember">Remember Me<br><br></td>
		</tr>
		<tr>
			<td align="middle" colspan="2"><input type="submit" name="submit" value="login"> </td>
		</tr>

	<script src="js/loginScript.js"></script>

</fieldset>
	
	</form>

	<br>
</fieldset >

</body>
<br>
<?php include 'footer.php' ?>
</html>
