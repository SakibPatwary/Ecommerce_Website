<?php  
require_once '../model/sellerModel.php';


if (isset($_POST['change'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['spc'] = $_POST['spc'];


  if (updateSeller($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../editSeller.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>