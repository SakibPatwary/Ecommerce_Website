<!DOCTYPE html>
<html>
<head>
<title>Edit Seller</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">     

</head>
<body>
<?php 
require_once 'controller/sellerInfo.php';
$seller = fetchSeller($_GET['id']);
include 'upperHeader.php';
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
<form name="myform" class="bg-light" action="controller/updateSeller.php" method="POST" onsubmit="return validateform()" enctype="multipart/form-data">  
<div class="form-group">
<label>Name</label> 
<input type="text" class="form-control" name="name" id="name" onblur="checkNameBlur()" value="<?php echo $seller['sname'] ?>">
<span id="NameErr" class="text-danger font-weight-bold"></span><br>
</div>
<div class="form-group">
<label>E-mail</label>
<input type="text" class="form-control" name = "email" id="email" onblur="checkEmail()" value="<?php echo $seller['semail'] ?>">
<span id="emailErr" class="text-danger font-weight-bold"></span><br>
</div>
<div class="form-group">
<label>Seller Product Category</label>
      <select name="spc" class="form-control" id="spc">
       <option value="<?php echo $seller['spcategory']; ?>" selected><?php echo $seller['spcategory']; ?></option>
       <option value="electronics">Electronics</option>
       <option value="foods">Foods</option>
       <option value="vehicle">Vehicle</option>
       <option value="hygene">Hygene</option>
     </select>
     <span id="spcErr" class="text-danger font-weight-bold"></span><br>
     </div>
 <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
 <input type="submit" name="change" value="Change"><br>

</form>
    </div>
  </div>
</div>
<script src="js/editSeller.js"></script>

<?php include 'lowerFooter.php'; ?>

</body>
</html>