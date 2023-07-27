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
		$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
       
        if(mysqli_num_rows($result) == 1) {
    
        } else{
            echo "Invalid Username or password";
            exit();
        }


	}
	?>
    <html>
	<head>
    <title>admin login</title>
    <link rel="stylesheet" href="adminlogin.css">

    <script>
        function validateForm() {
            var username = document.forms["form1"]["username"].value;
            var password = document.forms["form1"]["password"].value;
			

            // Check if any field is empty
            if (username === "" || password === "") {
                alert("Please fill in all the fields.");
                return false;
            }

            // Add more specific validation if needed

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
            <h3>Login here</h3>

            </div>
            <div class="icons">
            <img src="imgg/fb.png">
            <img src="imgg/tw.png">
            <img src="imgg/gp.png">
</div>
<form action="adminpanel.php" method="post" name="form1" class="input" onsubmit="return validateForm()">

    <input type="text" class="input-field" name="username"placeholder="Enter your Username" >
    <input type="password" class="input-field" name="password" placeholder="Enter your Password" >
    <input type="checkbox" class="checkbox"><span>Remember Password </span>
    <button type="submit" class="submit-btn" name="Login">Login</button>
    <div class="container reg">
    <p>Haven't Registered Yet?? <a href="regseek.php">Register Here</a></p>

  </div>
</form>

        
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

.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
</style>
</body>
</html>

