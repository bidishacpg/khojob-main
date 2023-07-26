<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);

	if(isset($_POST['Register'])) {
		
		$companyname = $_POST['companyname'];
        $email=$_POST['email'];
		$password = $_POST['password'];
        $confirm_password=$_POST['confirm_password'];
        $city = $_POST['city'];
        $industry = $_POST['industry'];
        $mobile = $_POST['mobile'];



	
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
   
      <li><a  href="job.php">Job</a> </li>
     
         <li> <a href="about.php">About Us</a></li>
         <li> <a  href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>

<script>
  function validateForm() {
    const companyname = document.getElementById('company-name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;
    const city = document.getElementById('city').value;
    const industry = document.getElementById('industry').value;
    const mobile = document.getElementById('mobile').value;

    // Simple validation for required fields
    if (companyname.trim() === '') {
      alert('Company Name is required');
      return false;
    }
    
    if (email.trim() === '') {
      alert('Email is required');
      return false;
    }

    if (password.trim() === '') {
      alert('Password is required');
      return false;
    }

    if (confirm_password.trim() === '') {
      alert('Confirm Password is required');
      return false;
    }

    if (password !== confirm_password) {
      alert('Passwords do not match');
      return false;
    }

    if (city === '') {
      alert('Please select a city');
      return false;
    }

    if (industry === '') {
      alert('Please select an industry');
      return false;
    }

    if (mobile.trim() === '') {
      alert('Mobile is required');
      return false;
    }

    // Simple validation for valid email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Invalid email format');
      return false;
    }

    // Simple validation for valid mobile format
    const mobileRegex = /^\d{10}$/;
    if (!mobileRegex.test(mobile)) {
      alert('Invalid mobile number format');
      return false;
    }

    return true;
  }
</script>

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

<form action="index.php" method="post" name="form1" onsubmit="return validateForm()">
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
                    <button type="submit" name="Register" class="submit-btn">Register</button>
                    
    <p>Already Registered? <a href="logincompany.php">Login Here</a></p>
  </div>
</form>

        </div>
        
</div>
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our goals</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">trainings</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">jobs</a></li>
  	 				<li><a href="#">companies</a></li>
  	 				<li><a href="#">recruitment</a></li>
  	 				<li><a href="#">hiring</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>jobs</h4>
  	 			<ul>
  	 				<li><a href="#">parttime</a></li>
  	 				<li><a href="#">fulltime</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
  <style>


}
</style>
    </body>
    </html>