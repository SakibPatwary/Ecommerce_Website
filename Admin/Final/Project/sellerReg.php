
<!DOCTYPE html>  
<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/style.css">

     <title>Seller Regestration</title> 
</head>  
<body> 

     <?php
      include 'UpperHeader.php';
     if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
           
      ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-3">
      <?php include 'sideInfo.php'; ?>
    </div>
    <div class="col-12 col-sm-9">
      <h2>Seller Regestration:</h2>               
      <form name="myform" class="bg-light" action="controller/createSeller.php" method="POST" onsubmit="return validateform()" enctype="multipart/form-data">   
      <br>
      <div class="form-group">
      <label>Name</label>  
      <input type="text" class="form-control" name="name" id="name" onblur="checkNameBlur()" onkeyup="checkNameKeyUp()" placeholder="Enter Name">
      <span id="NameErr" class="text-danger font-weight-bold"></span><br>
      </div>
      <div class="form-group">
      <label>E-mail</label>
      <input type="text" class="form-control" name = "email" id="email" placeholder="Enter Email" onblur="checkEmail()">
      <span id="emailErr" class="text-danger font-weight-bold"></span><br>
     </div>
      <div class="form-group">
      <label>User Name</label>
      <input type="text" class="form-control" name = "un" id="un" placeholder="Enter User Name" onkeyup="checkUN()">
      <span id="unErr"></span><br>
      </div>
      <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name = "pass" id="pass" placeholder="Enter Password">
      <span id="passErr" class="text-danger font-weight-bold"></span><br>
      </div>
      <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" class="form-control" name = "Cpass" id="Cpass" placeholder="Retype Password">
      <span id="CpassErr" class="text-danger font-weight-bold"></span><br>
      </div>
      <div class="form-group">
      <label>Seller Product Category</label>
      <select name="spc" class="form-control" id="spc">
       <option value="" selected >Select</option> 
       <option value="electronics">Electronics</option>
       <option value="foods">Foods</option>
       <option value="vehicle">Vehicle</option>
       <option value="hygene">Hygene</option>
     </select>
     <span id="spcErr" class="text-danger font-weight-bold"></span><br>
     </div>
     <button type="submit" name="createSeller" class="btn btn-primary">Submit</button>                
       <?php   
      if(isset($message))  
      {  
           echo "<h3>$message</h3>";  
      }  
      ?> 
 </form> 
    </div>
  </div>
</div>
<script src="js/sellerRegScript.js"></script>
     
 <?php include 'lowerFooter.php'; ?> 
 
 <br />  
      </body>  
 </html>  