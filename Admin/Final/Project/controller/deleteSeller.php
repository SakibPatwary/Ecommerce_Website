<?php 

require_once '../model/sellerModel.php';

if (deleteSeller($_GET['id'])) {
    header('Location: ../sellerManagement.php');
}

 ?>