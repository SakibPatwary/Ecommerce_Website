<?php
include('../Controller/products.php');
?>

<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="../Model/mycss.css">
        <title>Product Table</title>
</head>
<body>
    <div>
        <div class="top-logo">
            <img src="../img/logo.png" width="150" height="50">
        </div>
    </div>
    <div class="regForm">
    
        <h3>Add Product</h3>
        


        <form action=""  method="post">

            <label for="name">Product Name: </label>
            <input type="text" name="name" id="productname" placeholder="Enter Product Name" >
            <span style="padding-left: 150px; font-size: smaller; color: red" id="validateproductname"></span>
            <br>

            <label for="description">Product Details: </label>
            <input type="text" name="description" id="productdescription" placeholder="Enter Product Details" >
            <span style="padding-left: 150px; font-size: smaller; color: red" id="validateproductdescription"></span>
            <br>

           
            <br>
            <label for="price">Product Price: </label>
            <input type="text" placeholder="Product Price" name="price" id="productprice" oninput="this.value = this.value.replace(/[^0-9 .]/g, '').replace(/(\..*)\./g, '$1');"/>
            <span style="padding-left: 150px; font-size: smaller; color: red" id="validateproductprice"></span>

            <input class="btn-design" name="button" type="submit" value="Submit">

            <br><br>
            
            <span style="color: red"> <?php echo $error ?></span>

            <br><br>

                 <a href="dashboard.php">
              <span>Back to Dashboard Page</span>
            </a>
        </form> 
    </div>


       


<script src="JavaScript/product.js"></script>

</body>
</html>