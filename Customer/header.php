<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<style>
.error {color: #FF0000;}
body{
        background-color:lavender;
      }

</style>
<body>
  <fieldset>
  <h1><img src="uploads/29.png" alt="Image "><br></h1>
  
  <?php
  session_start();

  if(isset($_SESSION['uname']))
  {
    echo "Logged in as "."<a href='viewProfile.php'>".$_SESSION['uname']."| </a>";
    echo "<a href=' logout.php'>Logout</a>";
    echo "<hr>";
  }
  else{
    
  echo "<a href='home.php'>Home|</a>";
  echo "<a href='login.php'>Login|</a>";
  echo "<a href='registration.php'>Registration</a>";
  echo "<hr>";
}

  
  ?>
  </fieldset>
</body>
</html>