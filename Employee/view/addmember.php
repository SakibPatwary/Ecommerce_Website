<?php
include('../control/addmember.php');
?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <title>E-commerce</title>
</head>
<body>
    <div>
        <div class="top-logo">
            <img src="../img/eLogo.png" alt="XYZ" width="100" height="100">
            <h1>Welcome to E-commerce..</h1>
        </div>
        <div class="sticky">
            <div class="topnav">
            <a href="dashboard.php">Home</a>            
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
    <div class="regForm">
    
        <h3>Customer/Seller Registration Form</h3>
        


        <form action=""  method="post" enctype="multipart/form-data">

            <label for="fname">Firstname: </label>
            <input type="text" name="fname" id="firstname" placeholder="Enter FirstName" >
            <span style="color: red" id="validatefirstname">FirstName is required</span>
            <br>
            <br>
            <label for="lname">Lastname: </label>
            <input type="text" name="lname" id="lastname" placeholder="Enter LastName" >
            <span style="color: red" id="validatelastname">LastName is required</span>
            <br>
            <br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            
            <br>
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Enter Email Address" >
           
            <br>
            <br>

            <label for="phone">Phone: </label>
            <input type="text" id="phone" name="phone" placeholder="01XXXXXXXXX" >
            <span style="color: red" id="validatephone">Phone is required</span>

            <br>
            <br>

            <label for="dob">Date of birth: </label>
            <input type="date" name="dob" id="dob">

            <br>
            <br>

            <label for="nid">Card No: </label>
            <input type="text" id="nid" name="nid">
            <span style="color: red" id="validatenid">Card No is required</span>

            <br>
            <br>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter Password" >
            <span style="color: red" id="validatepassword">Password is required</span>
            <br>
            <br>

            <label for="c_password">Confirm Password: </label>
            <input type="password" name="c_password" id="c_password" placeholder="Confirm Your Password" >
            <span style="color: red" id="validatecpassword">Comfirm Password is required</span>
            <br>
            <br>

            <label for="category">Type:</label>
            <select name="category" style= "width: 150px;">
                <option value="manager" selected>Customer</option>
                <option value="cashier">Seller</option>
            </select>
            <br>
            <br>

            <label for="profile_picture">Profile Picture: </label>
            <input type="file" name="profile_picture">
            <br>
            <br>
            <input class="btn-design" name="button" type="submit" value="Submit">
            <input class="btn-design" type="reset" value="Reset">

            <br><br>
            <span style="color: red"> <?php echo $error ?></span>
        </form> 
    </div>



<footer>
<p align="center"> All rights reserved by &reg; e-commerce</p> <br>
<p align="center">&copy; e-commerce 2021</p>
            <a href="mailto:info@xyzbankltd.com">info@ecommerce.com</a>
    </footer>

<script src="../js/addmember.js"></script>

</body>
</html>