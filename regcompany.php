<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Register'])) {
		
		$companyname = $_POST['companyname'];
        $email=$_POST['email'];
		$password = $_POST['password'];
        $confirm_password=$_POST['confirm_password'];
        $city = $_POST['city'];
        $industry = $_POST['industry'];
        $mobile = $_POST['mobile'];



		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO regcompany(companyname,email,password,confirm_password,city,industry,mobile) VALUES('$companyname','$email','$password','$confirm_password','$city','$industry','$mobile')");
       
        echo "Company Registered successfully";
	}
    
        ?>

<html>
    <head>
        <title>Registeration form</title>
        <link rel="stylesheet" href="regcompany.css">
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
<form action="index.php" method="post" name="form1" >
                <div class="form-container">
                    <div class="form-control">
                        <label for="company-name">Company Name</label>
                        <input type="companyname" id="company-name" name="companyname" placeholder="Enter company Name">
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-control">
                        <label for="password">password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-control">
                        <label for="password">Confirm_password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm password">
                    </div>
                    <div class="form-control">
                        <label for="city">Choose city</label>
                        <select name="city" id="city">
                            <option value="kathmandu">Kathmandu</option>
                            <option value="chitwan"> Chitwan</option>
                            <option value="butwal">Butwal</option>
                            <option value="dharan">dharan</option>
                        </select> <br>
                        <div class="form-control">
                        <label for="industry">Choose Company Industries</label>
                        <select name="industry" id="industry">
                            <option value="Education">Education</option>
                            <option value="account">account</option>
                            <option value="finance">finance</option>
                            <option value="banking">banking</option>
                            <option value="aerospace">aerospace</option>
                            <option value="agriculture">agriculture</option>
                            <option value="others">others</option>

                            
                        </select><br>
                    </div>
                    <div class="form-control">
                        <label for="mobile">Mobile</label>
                        <input type="text" id="mobile" name="mobile" placeholder="Enter mobile">
                    </div><br>
                    <button type="submit"  name="Register" class="submit-btn">Register</button>
                    
    <p>Already Registered? <a href="logincompany.php">Login Here</a>.</p>
  </div>
</form>

        </div>
        
</div>
    </body>
    </html>