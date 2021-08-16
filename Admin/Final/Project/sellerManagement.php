<?php
     require_once 'controller/sellerInfo.php';
     
     $sellers = fetchAllSellers();
     include 'UpperHeader.php';
     
     if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }

?>


<!DOCTYPE html>  
 <html>  
      <head>  
        <title>Seller Management</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>SELLER Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
</style>  
      </head>  
      <body>
         
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-3">
      <?php include 'sideInfo.php'; ?>
    </div>
    <div class="col-md-12 col-lg-9">
    <div align="right">
        <input type="text" name="search" id="search" placeholder="Search..." onkeyup="search_data()">  
    </div> 
    <div class="table-responsive">
    <div id="search_table">
      <table class="table table-striped">
     <thead>
          <tr>
          <th>Seller Name</th> 
          <th>E-mail</th>  
          <th>User name</th>
          <th>Sellers product category</th>
          <th>Action</th>   
          </tr>
     </thead>
     <tbody>
          <?php foreach ($sellers as $i => $seller): ?>
               <tr>
                    <td><a href="showEmployee.php?id=<?php echo $seller['id'] ?>"><?php echo $seller['sname'] ?></a></td>
                    <td><?php echo $seller['semail'] ?></td>
                    <td><?php echo $seller['suname'] ?></td>
                    <td><?php echo $seller['spcategory'] ?></td>
                    <td><a href="editSeller.php?id=<?php echo $seller['id'] ?>">Edit</a>&nbsp<a href="controller/deleteSeller.php?id=<?php echo $seller['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
               </tr>
          <?php endforeach; ?>
          

     </tbody>
     

</table>
        
    </div>

    </div>
    <div align="middle">
            <a style="font-size:20px;" href="sellerReg.php">Regester for Seller</a>
        </div>
    </div>
  </div>
</div>

     <!--  <div style="text-align:center;">
          <form method="post" action="controller/findEmployee.php">
          <fieldset>
          <legend>search for a employee: </legend>
          Name : <input type="text" name="uNameS">
          <input type="submit" name="searchEmp", value="Search">
          </fieldset>
          </form> -->
          
       <!-- </div> -->
<script src="js/searchSeller.js"></script>
<?php include 'lowerFooter.php'; ?>
      </body>  
 </html>   