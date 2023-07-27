<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Register'])) {
		
		$username = $_POST['username'];
        $email=$_POST['email'];
		$password = $_POST['password'];
        $confirm_password=$_POST['confirm_password'];
		
	
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO reg(username,email,password,confirm_password) VALUES('$username','$email','$password','$confirm_password')");
       
        echo "jobseeker registered successfully";
	}
    
        ?>

<html>
   
<head>
    <title>register form</title>
    <link rel="stylesheet" href="regseeker.css">

    <script>
        function validateForm() {
            var username = document.forms["form1"]["username"].value;
            var email = document.forms["form1"]["email"].value;
            var password = document.forms["form1"]["password"].value;
            var confirm_password = document.forms["form1"]["confirm_password"].value;
            var checkbox = document.forms["form1"]["checkbox"].checked;

            // Check if any field is empty
            if (username === "" || email === "" || password === "" || confirm_password === "") {
                alert("All fields are required");
                return false;
            }

            // Check if password and confirm_password match
            if (password !== confirm_password) {
                alert("Passwords do not match");
                return false;
            }

            // Check if checkbox is checked
            if (!checkbox) {
                alert("Please agree to the terms and conditions");
                return false;
            }

            // Add more specific validation if needed (e.g., email format)

            return true; // Form is valid, and submission will proceed
        }
    </script>
</head>
<body>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <li><a  href="index.php">Home</a> </li>
      <!--jobs available-->
      <li><a  href="job.php">Job</a> </li>
      <!--more-->
         <li> <a href="about.php">About Us</a></li>
         <li> <a  href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>
    <div class="log">
        <div class="form-box">
            <div class="btn-box">
                <h3>Register here</h3>

            </div>
            <div class="icons">
            <img src="imgg/fb.png">
            <img src="imgg/tw.png">
            <img src="imgg/gp.png">
</div>

<form action="index.php" method="post" name="form1" class="input" onsubmit="return validateForm()">

    <input type="text" class="input-field" name="username" placeholder="Enter your  Username">
    <input type="email" class="input-field" name ="email" placeholder="Enter your Email" >
    <input type="password" class="input-field" name="password" placeholder="Enter your Password" >
    <input type="password" class="input-field" name="confirm_password" placeholder="Confirm password" >
    <input type="checkbox" class="checkbox" name="checkbox"><span>I agree to the terms and conditions </span>
    <button type="submit"  name="Register" class="submit-btn">Register</button>
    <div class="container login">
    <p>Already Registered? <a href="loginuser.php">Login Here</a>.</p>
  </div>
</form>
        </div>     
</div>
    </body>
    </html>