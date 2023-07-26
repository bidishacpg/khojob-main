<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';
$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
if(isset($_POST['submit'])){
    // if (isset($_FILES["pic"]) && $_FILES["pic"]["error"] == UPLOAD_ERR_OK) {
 $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
        $email=$_POST['email'];
		$jobrole = $_POST['jobrole'];
        $address=$_POST['address'];
        $city = $_POST['city'];
        $Company = $_POST['Company'];
        $date = $_POST['date'];
        $uploadDir = "upload/"; // Change this to your desired upload directory
        $fileName = $_FILES["image"]["name"];
        $filePath = $uploadDir . $fileName;

	$result = mysqli_query($mysqli, "INSERT INTO apply(firstname,lastname,email,jobrole,address,city,Company,date,pic) VALUES('$firstname','$lastname','$email','$jobrole','$address','$city','$company','$date','$pic')");
        echo "Company Registered successfully";
        //    }
        }
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="applyy.css">
</head>
<body>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <!--jobs available-->
      <li><a  href="homeuser.php">Home</a> </li>
      <li><a  href="about.php">About us</a> </li>
      <li><a  href="apply.php">Apply Job</a> </li>
      
        </ul>
    </nav>
</header>
    <div class="container">
        <div class="apply-box">
            <h1>Job Application <span class="title-small">(web)</span></h1>

            <form action="apply.php" method="POST">
                <div class="form-container">
                    <div class="form-control">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter First Name">
                    </div>
                    <div class="form-control">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name">
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-control">
                        <label for="jobrole">Job Role</label>
                        <select name="jobrole" id="jobrole">
                            
                            <option value="frontend">Frontend Development</option>
                            <option value="backend">Backend Development</option>
                            <option value="full-stack">Full Stack Web Development</option>
                            <option value="ui-ux">UI & UX Designer</option>
                        </select>
                    </div>
                    <div class="textarea-control">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="50" rows="4" placeholder="Enter Address"></textarea>
                        
                    </div>
                    <div class="form-control">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter City">
                    </div>
                    <div class="form-control">
                        <label for="Company">Company</label>
                        <select name="Company" id="company">
                            
                            <option value="fuse">Fuse pvt</option>
                            <option value="aesterdio">aesterdio</option>
                            <option value="intel-g">intel-g</option>
                            <option value="apple">Apple</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="date">Date</label>
                        <input  type="date" id="date" name="date" placeholder="Enter Date">
                    </div>
                    <div class="form-control">
                        <label for="image">Upload Your CV</label>
                        <input type="file" id="pic" name="pic" required data-parsley-trigger="keyup" class="form-control">
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit" name="submit">Apply Now</button>
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