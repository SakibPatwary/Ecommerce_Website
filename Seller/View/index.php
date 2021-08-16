<?php 


include "../includes/db_connect.inc.php";

$uPass = $uName = $message = $username = $email ="";
$errors = array();



    if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['Login'] == "Login") {

        if(!empty($_POST['lusername'])){

        $uName = mysqli_real_escape_string($conn, $_POST['lusername']);
    }
    
    if(!empty($_POST['lpassword'])){
        $uPass = mysqli_real_escape_string($conn, $_POST['lpassword']);
    }
    $sqlUserCheck = "SELECT username, password FROM user WHERE username = '$uName'";
    $result = mysqli_query($conn, $sqlUserCheck);
    $rowCount = mysqli_num_rows($result);

    if($rowCount < 1){
        $message = "User does not exist!";
    }
    else{
        while($row = mysqli_fetch_assoc($result)){
            $uPassInDB = $row['password'];

            $uNameInDB= $row['username'];

            if($uPassInDB== $uPass){
              echo $uName;
              echo $uPass;
              $_SESSION['userName'] = $uName;
              $_SESSION['passWord'] = $uPass;


                
                header("Location: dashboard.php");
            }
            else{
                $message = "Wrong Password!";
            }
        }
    }
  }

 if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['Create'] == "Create") {


  $_SERVER["REQUEST_METHOD"] == "POST";

    if(!empty($_POST['name'])){
      $name = mysqli_real_escape_string($conn, $_POST['name']);
    }
    if(!empty($_POST['username'])){
      $username = mysqli_real_escape_string($conn, $_POST['username']);
    }
    if(!empty($_POST['phone'])){
      $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    }
    if(!empty($_POST['email'])){
      $email = mysqli_real_escape_string($conn, $_POST['email']);
    }
    if(!empty($_POST['password'])){
      $password = mysqli_real_escape_string($conn, $_POST['password']);
    }
    if(!empty($_POST['confirmpassword'])){
      $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    }

  if (empty($name) || empty($username) || empty($phone) || empty($email) || empty($password) || empty($confirmpassword) || $password !== $confirmpassword)

  {
    $errors="ERROR!!";
  }

  else{
      $sqlUserCheck = "SELECT * FROM user WHERE username='$username' OR phone=$phone OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $sqlUserCheck);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['username'] === $username) {
      array_push( "Username already taken",$errors);
    }

    if ($user['phone'] === $phone) {
      array_push("Phone number already exists",$errors);
    }

    if ($user['email'] === $email) {
      array_push( "email already exists",$errors);
    }
  }
  if (count($errors) == 0) {

    $query = "INSERT INTO user (name, username, phone, email, password)VALUES('$name', '$username', '$phone', '$email', '$password');";

           mysqli_query($conn, $query);

  }
 
}

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Model/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <title>
  </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="login-page">
  <div class="form">
    <img src="../img/logo.png" class="logo"> <br>
    <form class="register-form" action="index.php" method="post">
      <br>
      <input type="text" placeholder="name" name="name" id="name" required/>
      <span style="padding-left: 150px; font-size: smaller; color: red" id="validatename">*required</span>

      <input type="text" placeholder="user name" name="username" id="username" required/>
      <span style="padding-left: 150px; font-size: smaller; color: red" id="validateusername">*required</span>

      <input type="text" placeholder="phone" name="phone" id="phone" oninput="this.value = this.value.replace(/[^0-9 .]/g, '').replace(/(\..*)\./g, '$1');" required/>
      <span style="padding-left: 150px; font-size: smaller; color: red" id="validatephone">*required</span>

      <input type="text" placeholder="email address" name="email" id="email" required/>
      <span style="padding-left: 150px; font-size: smaller; color: red" id="validateemail">*required</span>

      <input type="password" placeholder="password" name="password" id="password" required/>
      <span style="padding-left: 150px; font-size: smaller; color: red" id="validatepassword">*required</span>


      <input type="password" placeholder="confirm password" name="confirmpassword" id="confirmpassword" required/>
 <!--      <?php echo $errors?> -->
      <span style="padding-left: 150px; font-size: smaller; color: red" id="validateconfirmpassword">*required</span>

      <br>
      <br>
      <input type="hidden" name="Login">

      <button type="submit" name="Create" value="Create">Create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>


    <form class="login-form" action="validation.php" method="post">
      <input type="text" placeholder="username" name="lusername" id="lusername" required/>

      <input type="password" placeholder="password" name="lpassword" id="lpassword" required/>

      <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
       <div style="padding-left: 150px; font-size: smaller; color: red;"><?php echo $message?></div>
      <br>

      <p style="padding-left: 220px; float: left;"><input type="checkbox" onclick="showpass()" ></p>
      <p style="float: left; padding-left: 5px; ">Remember Me</p>

      <input type="hidden" name="Create">

      <button type="submit" name="Login" value="Login">Login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>

    </form>
          <p class="message">Any Problem? <a href="reportissue1.php">Report Issue</a></p>
  </div>
</div>

<script src="JavaScript/index.js"></script>
</body>
</html>

  <script type="text/javascript">
      $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
   }); 

  </script>

  <script>
    
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#lpassword');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
  </script>


