<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <link rel="stylesheet" type="text/css" href="project.css">
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
    </head>
<body>

    <div class="container">
        <h2 class="he"><u>Registration Form</u></h2>
        <br><br>
        <form action="test1.php", method="POST">
            <div class="form-group">
             <b>First Name</b> 
               <input type="text" name="fname" id="fname" required placeholder="Enter first name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
             
            
             <b>Last Name</b>  
              <input type="text" name="lname" id="lname"  required placeholder="Enter last name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
          
              <b>Email Address</b> 
               <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
          
  
              <b>Password</b>
                <input type="password" name="pwd" id="pwd" placeholder="Enter new password" title="Password should be of 6-10 length"></input>
        
           
               <b>Confirm Password</b>
                <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
                
                <b>Date of Birth</b>
            <input type="date" id="birthday" placeholder="" max="2022-12-31">
            <br><br>
             <b>Gender:</b>
            <input type="radio"name="gender">Male
            <input type="radio"name="gender">Female
            <input type="radio"name="gender">Other
            <br><br>
            <b>Education:</b>
            <select>
                <option>Board</option>
                <option>+2</option>
                <option>Bachelor</option>
                <option>Master</option>
                
            </select>
            <br><br>
            <lable>Remark</lable>
            <textarea></textarea>
            <br><br>
      
           <button type="submit">Sign Up</button>
            </div>
        </form>
          </div>
</body>
</html>
        
     
  
