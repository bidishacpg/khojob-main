<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <link rel="stylesheet" type="text/css" href="project.css">
    </head>
<body>
    
    <div class="container">
        <h2 class="he"><u>Registration Form</u></h2>
        <br><br>
        <form action="test1.php", method="POST">
            <div class="form-group">
             <b>First Name</b>   <input type="text" name="fname" id="fname" required placeholder="Enter first name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
             </div>
            <div class="form-group">
             <b>Last Name</b>   <input type="text" name="lname" id="lname"  required placeholder="Enter last name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Email Address</b>  <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Password</b>  <input type="password" name="pwd" id="pwd" placeholder="Enter new password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6,10}" title="Password should be of 6-10 length"></input>
              </div>
             <div class="form-group">
               <b>Confirm Password</b> <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
            </div>
            <div class="form-group0">
            <b>Date Of Birth</b> 
            <input type="date" id="birthday" name="birthday" min="1900-01-01" max="2010-12-31" >
            </div>
            <div class="form-group1">
                <button type="submit">Sign Up</button>
            </div>
        </form>
          </div>
        
     
   <script>
var password = document.getElementById("pwd"),
   confirm_password = document.getElementById("psw-repeat");
function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
</script>
