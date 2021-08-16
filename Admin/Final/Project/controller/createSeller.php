<?php  
require_once '../model/sellerModel.php';


if (isset($_POST['createSeller'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['uname'] = $_POST['un'];
	$data['password'] = password_hash($_POST['pass'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['spc'] = $_POST['spc'];

  if (addSeller($data)) {

  	header("location: ../sellerManagement.php");
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>