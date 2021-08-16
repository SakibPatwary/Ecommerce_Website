
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <title>E-commerce</title>
        <style>
            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
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

        <div class="center">
            <div>
                <h2>Manager List</h2>
                <form  style="text-align:center" action="" method="POST">
                <label for="search">Search: </label>
                <input type="text" name="search" id="search" placeholder="search">  
                
                </form>

                <div id="show"></div>
                
            </div>
        </div>

        <footer>
        <p align="center"> All rights reserved by &reg; e-commerce</p> <br>
<p align="center">&copy; e-commerce 2021</p>
            <a href="mailto:info@xyzbankltd.com">info@ecommerce.com</a>
    </footer>

    <script src="../js/managerlist.js"></script>

    </body>
</html>