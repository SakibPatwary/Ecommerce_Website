
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../Model/mycss.css">
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
            <img src="../img/logo.png" width="150" height="50">
        </div>

        <div class="center">
            <div>
                <h2>Product List</h2>
                <form  style="text-align:center" action="" method="POST">
                <label for="search"></label>
                <input type="text" name="search" id="search" placeholder="search">  
                
                </form>

                <div id="show"></div>
                
            </div>
            <br>
            <a href="dashboard.php">
              <span>Back to Dashboard Page</span>
            </a>
        </div>

    <script src="JavaScript/productlist.js"></script>

    </body>
</html>