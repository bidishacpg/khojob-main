<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Login'])) {
		
		$username = $_POST['companyname'];
		$password = $_POST['password'];
		
		// include database connection file
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "SELECT * FROM regcompany WHERE companyname='$username' AND password='$password'");
       
        if(mysqli_num_rows($result) > 1) {
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
        <link rel="stylesheet" href="logincompanyy.css">
</head>
<body>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <!--jobs available-->
      <li><a  href="index.php">Home</a> </li>
      <li><a  href="about.php">About us</a> </li>
      <li><a  href="apply.php">Apply Job</a> </li>
      
        </ul>
    </nav>
</header>
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
<form  action="logincompany.php" method="post" name="form1"class="input">
    <input type="text" class="input-field" name="companyname"placeholder="Enter your companyname" >
    <input type="password" class="input-field" name="password" placeholder="Enter your Password" >
    <input type="checkbox" class="checkbox"><span>Remember Password </span>
    <button type="submit" class="submit-btn" name="Login">Login</button>
    <div class="container reg">
    <p>Haven't Registered Yet? <a href="regcompany.php">Register Here</a></p>
  </div>
</form>

        </div>
        
</div>
</body>
</html>

