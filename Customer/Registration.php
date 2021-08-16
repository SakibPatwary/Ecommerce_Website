<!DOCTYPE html>
 <html>
 <head>
  <title>Customer Regestration</title>  
           
 <style>
error {color: #FF0000;}
body{
        background-color:lavender;
      }
</style>
 </head>
 <body>
  
  <fieldset>
    <?php include 'header.php'; ?>

    <br> 
  <form name="myform" action="login.php" method="POST" 
  onsubmit=" validateform()" >  
    <fieldset style="width: 450px;">
                     
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" id="name" onblur="checkNameBlur()" />
                     <span id="NameErr"></span> 
                     <br /> 
                     

                     <label>E-mail</label>
                     <input type="text" name = "email" id="email"  onblur="checkEmail()"  />
                     <span id="emailErr"></span>
                     <br/>

                     <label>User Name</label>
                     <input type="text" name = "un" id="un"  onblur="checkUn()" />
                     <span id="unErr"></span>
                     <br/>

                     <label>Password</label>
                     <input type="password" name = "pass" id="pass"  onblur="checkPass()"  />
                     <span id="passErr"></span>
                     <br/>


                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" id="Cpass"  onblur="checkCpass()" />
                     <span id="CpassErr"></span>
                     <br/>


                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
                   </fieldset>

                    <fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset> 
                     <br>
                     <input type="submit" name="submit" value="Submit"/><br />
                     <br><br>
                          <script src="js/RegScript.js"></script>                        
                   
                
                </form>

 </fieldset>
 <br>
    <?php include 'footer.php' ?>
    
 </body>
 </html>