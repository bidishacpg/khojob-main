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
		
		// include database connection file
		include_once("mysqli.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO reg(username,email,password) VALUES('$username','$email','$password')");
       
        echo "User added successfully";
	}
    
        ?>

<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="regseeker.css">
</head>
<body>
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
<form action="reg.php" method="post" name="form1" class="input">
    <input type="text" class="input-field" name="username" placeholder="Enter your y Username" required>
    <input type="email" class="input-field" name ="email" placeholder="Enter your Email" required>
    <input type="password" class="input-field" name="password" placeholder="Enter your Password" required>
    <label for="Job">Job-category:</label>
  <select name="jobcategory" id="jobcategory">
    <option value="education">education</option>
    <option value="account">account</option>
    <option value="finance">finance</option>
    <option value="manager">manager</option>
  </select>
    <input type="checkbox" class="checkbox"><span>I agree to the terms and conditions </span>
    <button type="submit"  name="Register" class="submit-btn">Register</button>
    <div class="container login">
    <p>Already Registered? <a href="login.php">Login Here</a>.</p>
  </div>
</form>

        </div>
        
</div>
    </body>
    </html>