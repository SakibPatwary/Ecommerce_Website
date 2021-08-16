<?php


$uName = $_POST['lusername'];
$uPass = $_POST['lpassword'];

// echo $uName;
// echo $uPass;

session_start();
$_SESSION['userName'] = $uName;
$_SESSION['passWord'] = $uPass;



    $conn = mysqli_connect("localhost","root","");

    mysqli_select_db($conn,'project');
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
                header("Location: dashboard.php");
            }
            else{
                $message = "Wrong Password!";
            }
        }
    }














?>