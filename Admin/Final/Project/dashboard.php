<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<title>Dashboard</title>
</head>
<body>
	<?php include 'UpperHeader.php';
           include 'sideInfo.php';

      if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
      ?>  
<img src="img/dashboard.jpg" width="100%" height="400">
<?php include 'lowerFooter.php' ?>
</body>
</html>