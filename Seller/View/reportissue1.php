<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>contact form</title>
</head>

<body>

<link href="../Model/reportissue.css" rel="stylesheet">


<div class="fcf-body">

    <div align="center" class="logo"> <img src="../img/logo.png" class="logo"> <br></div>

    <div id="fcf-form">
    <h3 class="fcf-h3" style="color: red;">Report Issue</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" name="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>

        </div>

        <a href="index.php">
              <span>Back to Login Page</span>
            </a>
       
    </form>

    </div>

</div>

</body>
</html>

<?php

$message = ''; 


 if(isset($_POST["submit"])) {

    if(file_exists('Report/data.json'))  
           {  
                $current_data = file_get_contents('Report/data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'Name'               =>     $_POST['Name'],  
                     'E-mail'           =>     $_POST["Email"],  
                     'Message'       =>     $_POST["Message"],
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('Report/data.json', $final_data))  
                {  
                     echo "Your Report Submitted. We will contact to you very shortly. Thank You.";  
                }  
           }  
           else  
           {  
                echo "ERROR!!"; 
           } 


 }
    
       ?>