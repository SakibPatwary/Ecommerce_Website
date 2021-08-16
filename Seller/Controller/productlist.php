<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "project";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $search=$_POST["search"];

    echo '<table class="center">
    <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Delete<th>
    </tr>';
    $sql = "SELECT * FROM product WHERE name like '".$search."%'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td><a href='../View/productlist.php?description=".$row['description']."'>".$row['name']." </a></td>
                <td>".$row['description']."</td>
                <td>".$row['price']."</td>
                <td><a href=?</a>delete</td>
            </tr>";
            }
    }  
$conn -> close();
}
