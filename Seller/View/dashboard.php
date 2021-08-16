<?php
  
  session_start();
  $name=$_SESSION['userName'];
  $pass=$_SESSION['passWord'];
  

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
    <link rel="stylesheet" href="../Model/dashboard.css">
</head>
<body>
 <div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Dashboard</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="../img/user.png" alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <h3><?php echo $name;?></h3>
          </span>
          <span class="user-role"> Seller</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="sidebar-dropdown">
           <a href="product.php">
              <i class="fa fa-shopping-cart"></i>
              <span>Add Product</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
           <a href="productlist.php">
              <i class="fa fa-shopping-cart"></i>
              <span>Product List</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="profile.php">
              <i class="fa fa-shopping-cart"></i>
              <span>Profile</span>
            </a>
            <div class="sidebar-submenu">
              
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="reportissue.php">
              <i class="far fa-gem"></i>
              <span>Report Issue</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">issue</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="logout.php">
              <i class="fa fa-chart-line"></i>
              <span>Logout</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">logout</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
      </div>
      <!-- sidebar-menu  -->
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container">
          <img src="../img/logo.png" class="logo"> <br>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <h1>WELCOME!!</h1><br><br><br>

          <h3>You can do everything from your sidebar.</h3>


      <footer class="text-center">
        <div class="mb-2">
          <small><br><br><br><br>
            © 2021 All Right Reserved <i class="fa fa-heart" style="color:red"></i><a target="_blank" rel="noopener noreferrer" href="https://azouaoui.netlify.com">
            </a>
          </small>
        </div>

      </footer>

    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->

</body>
</html>
