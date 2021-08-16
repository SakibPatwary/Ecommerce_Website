<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "xyz_final";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    session_start();
    $username = $_SESSION['login_user'];

    $sql = "SELECT * FROM customertable WHERE email = '".$_REQUEST['email']."'";
    $result = $conn->query($sql);
	if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $name= $row['firstname']." ".$row['lastname'];
            $email = $row['email'];
            $dob = $row['dob'];
            $phone = $row['phone'];
            $gender = $row['gender'];
            $accno = $row['accountno'];
            $nid = $row['nid'];
        }
    }

    $sql = "SELECT * FROM userlogin WHERE username = '".$_REQUEST['email']."'";
    $result = $conn->query($sql);
	if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $password= $row['password'];
            $status= $row['status'];
        }
    }
    $conn -> close();
?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <title>E-commerce</title>

</head>

<body>
    <div>
        <div class="top-logo">
            <img src="../img/eLogo.png" alt="XYZ" width="100" height="100">
            <h1>Welcome to E-commerce</h1>
        </div>
        <div class="sticky">
            <div class="topnav">
            <a href="dashboard.php">Home</a>
                <a href="customerlist.php">Others</a>  
                <a href="cashierlist.php">Seller List</a>   
                <a href="managerlist.php">Customer List</a>  
                <a href="promotion.php">Promote from Cashier to Manager</a>  
                <a href="addmember.php">Add Member</a>    
                <a href="changepass.php">Change Password</a>
                <a href="../control/logout.php">Logout</a>
            </div>
        </div>
    </div>

        <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);  max-width: 300px;  margin: auto;  text-align: center;  font-family: arial;">
            <img src="../../Customer/img/<?php echo $email?>.jpg" alt="<?php echo $name?>" style="width:50%">
            <h2 style="color: red"><?php echo $name?></h2>
                    <div style="text-align: left; margin-left: 5px; color: blue">
                        <p>Account No: <?php echo $accno?></p>
                        <p>Email: <?php echo $email?></p>
                        <p>Gender: <?php echo $gender?></p>
                        <p>Phone Number: <?php echo $phone?></p>
                        <p>Date of Birth: <?php echo $dob?></p>
                        <p>NID: <?php echo $nid?></p>
                        <p>Password: <?php echo $password?></p>
                        <p>Status: <?php echo $status?></p>
                    </div>
      
            
            
            <p style="border: 2px solid black; background-color: black; padding: 5px; width: 200px; margin: auto;"><a style="color: white;"  href='../control/deleteaccount.php?email=<?php echo $email?>&status=<?php echo $status?>'>Delete/Active Account</a></p>
        </div>

        <footer>
        <p><p align="center"> All rights reserved by &reg; e-commerce</p> <br>
<p align="center">&copy; e-commerce 2021</p>
            <a href="mailto:info@xyzbankltd.com">info@ecommerce.com</a>
        </p>
    </footer>
        
    </body>
</html>