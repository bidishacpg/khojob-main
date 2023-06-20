<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Login'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// include database connection file
		include_once("mysqli.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$username' AND password='$password'");
       
        if(mysqli_num_rows($result) == 1) {
             echo " Login successfully";
        } else{
            echo "Invalid Username or password";
            exit();
        }


	}
	?>
    <html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="log">
        <div class="form-box">
            <div class="btn-box">
            <h3>Login here</h3>

            </div>
            <div class="icons">
            <img src="imgg/fb.png">
            <img src="imgg/tw.png">
            <img src="imgg/gp.png">
</div>
<form  action="home.php" method="post" name="form1"class="input">
    <input type="text" class="input-field" name="username"placeholder="Enter your Username" >
    <input type="password" class="input-field" name="password" placeholder="Enter your Password" >
    <input type="checkbox" class="checkbox"><span>Remember Password </span>
    <button type="submit" class="submit-btn" name="Login">Login</button>
    <div class="container reg">
    <p>Haven't Registered Yet? <a href="reg.php">Register Here</a></p>
  </div>
</form>

        </div>
        
</div>
</body>
</html>

