<?php
include "../includes/db_connect.inc.php";
session_start();
$uPass = $uName = $message = $username = $email ="";
$errors = "";


    if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "Login") {

        if(!empty($_POST['lusername'])){

        $uName = mysqli_real_escape_string($conn, $_POST['lusername']);
    }
    
    if(!empty($_POST['lpassword'])){
        $uPass = mysqli_real_escape_string($conn, $_POST['lpassword']);
    }
    $sqlUserCheck = "SELECT username, password FROM user WHERE username = '$uName'";
    $result = mysqli_query($conn, $sqlUserCheck);
    $rowCount = mysqli_num_rows($result);

    if($rowCount < 1){
        $message = "User does not exist!";
    }
    else{
        while($row = mysqli_fetch_assoc($result)){
            $uPassInDB = $row['password'];

            $uNameInDB= $row['username'];

            if($uPassInDB== $uPass){
                $_SESSION['username'] = $uName;
                header("Location: dashboard.php");
            }
            else{
                $message = "Wrong Password!";
            }
        }
    }
  }

  elseif($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "Create") {

  $_SERVER["REQUEST_METHOD"] == "POST";

  $name = $_REQUEST['name'];
  $username = $_REQUEST['username'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $confirmpassword = $_REQUEST['confirmpassword'];

  if (empty($name) || empty($username) || empty($phone) || empty($email) || empty($password) || empty($confirmpassword) || $password !== $confirmpassword)

  {
    $errors="ERROR!!";
  }

  else{
      $sqlUserCheck = "SELECT * FROM user WHERE username='$username' OR phone=$phone OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $sqlUserCheck);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['phone'] === $phone) {
      array_push($errors, "Phone number already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
    $password = md5($password);

    $query = "INSERT INTO user (name, username, phone, email, password) 
          VALUES('$name', '$username', '$phone, '$email', '$password')";

    mysqli_query($conn, $query);
    
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
  }
 
}

}

?>