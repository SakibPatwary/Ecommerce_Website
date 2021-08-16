<?php 
	require_once "model/sellerModel.php";	
	$username=$_GET["un"];
	$res = trim(checkUsernameValidity($username));
	echo $res;
?> 