<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<title>Change Password</title>
</head>
<body>
<?php

include 'upperHeader.php';
include 'sideInfo.php';

$newPass = "";
$newPassErr = $retPassErr = "";
if (isset($_SESSION['uname'])) { 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if($_SESSION['password'] == $_POST['currPass'])
  {
  	if($_SESSION['password'] == $_POST['newPass'])
  	{
  		$newPassErr = "New Password can not be same as current password.";
  		$newPass = "";
  	} else {
  	$newPass = $_POST["newPass"];
  	if(strlen($newPass)<5){
  		$newPassErr = "Password must not be less than eight (8) characters";
  		$newPass = "";
  	}
  	
 	if($_POST["retPass"]!==$newPass)
 	{
 	$retPassErr="Retyped Password does not match with current Password";
 	$newPass="";
 	}
  }
  }else{
    $newPassErr = "Current password is invalid";
      $newPass = "";
  }
}
}
else{
  header("location:login.php");
}

 ?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<fieldset>
<legend>Change Password</legend>
<p><?php echo $newPassErr; ?></p>
<p><?php echo $retPassErr; ?></p>
Current Password :<input type="text" name="currPass"><br>
New Password :<input type="text" name="newPass"><br>
Retype New Passeord :<input type="text" name="retPass"><hr>
<input type="submit" name="submit"><br><br>
<?php 
if(isset($_POST['submit']))
{
echo "Password changed to: ".$newPass;
}
 ?>
</fieldset>
</form>
<?php include 'lowerFooter.php'; ?> 

</body>
</html>