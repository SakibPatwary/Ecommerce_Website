<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "project";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$error= "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name=$_REQUEST["name"];
    $description=$_REQUEST["description"];
    $price=$_REQUEST["price"];


    if(empty($name) || empty($description) || empty($price))
    {
        $error = "Error!!!";
    }

    else{

                $sql= "INSERT INTO product(name,description,price) VALUES ('".$name."','".$description."','".$price."')";
                $conn->query($sql);
                
                
        }

}

?>