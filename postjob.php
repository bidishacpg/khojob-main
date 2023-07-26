<?php
// Check if the form was submitted
if (isset($_POST["submit"])) {

    $jobname=$_POST["jobname"];
    $jobdetails=$_POST["jobdetails"];


    // Check if there was no error during the file upload
    if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // Define the target directory to save the uploaded image
        $targetDir = "jobs/";

        // Generate a unique filename for the uploaded image to avoid conflicts
        $uniqueFilename = uniqid() . '_' . $_FILES["image"]["name"];

        // Complete target path with the unique filename
        $targetPath = $targetDir . $uniqueFilename;

        // Move the temporary uploaded file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {            
            $Host='localhost';
            $dbName='crud_db';
            $Username='root';
            $Password='';
            $connection= mysqli_connect($Host,$Username,$Password,$dbName);

            $result = mysqli_query($connection, "INSERT INTO post(jobname,jobdetails,pic) VALUES('$jobname','$jobdetails','$targetPath')");
        echo "job posted successfully";


            echo "Image uploaded successfully. File path: " . $targetPath;
        } else {
            echo "Error uploading the image.";
        }
    } else {
        echo "Error during the image upload process.";
    }
}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="apply.css">
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
            <h1>Post your job <span class="title-small">(post)</span></h1>

            <form action="postjob.php" method="POST" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="form-control">
                        <label for="jobname">Job Name</label>
                        <input type="text" id="jobname" name="jobname" placeholder="Enter job Name">
                    </div>
                    <div class="form-control">
                        <label for="jobdetails">Jobdetails</label>
                        <input type="text" id="jobdetails" name="jobdetails" placeholder="Enter Jobdetails">
                    </div>
                    <div class="form-control">
                        <label for="image">Upload Your photo</label>
                        <input type="file" name="image" id="image">                  
                </div>
                <div class="button-container">
                    <button type="submit" name="submit"> Post Now</button>
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