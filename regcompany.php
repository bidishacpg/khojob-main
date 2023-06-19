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
        <title>Registeration form</title>
        <link rel="stylesheet" href="regcompany.css">
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
<form action="job.php">
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
                    </div>
                    
    <p>Already Registered? <a href="login.php">Login Here</a>.</p>
  </div>
</form>

        </div>
        
</div>
    </body>
    </html>