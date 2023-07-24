<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <title>khojob</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="index.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
</head>
<body>
<?php include_once 'include/nav.php'; ?>
<section class="main py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-7">
        <h1>Find your Most Exciting <br>
         Dream Jobs</h1>
         <input type="text" placeholder="Job title or keyword">
         <button class="btn"><a href="job.php"> Search</a></button>
</div>
</div>
</div>
<div class="second py-2">
<div class="jobs-list-container">
<div class="jobs">
          <div class="job">
            <img src="imgg/fuse.png" alt="">
            <h3 class="job-title">Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Fuse pvt ltd</span>
</div>
<div class="job">
            <img src="imgg/asterdio.png" alt="">
            <h3 class="job-title">It officer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Aesterdio</span>
</div>
<div class="job">
            <img src="imgg/AIT.jpeg" alt="">
            <h3 class="job-title">product manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">AIT</span>
</div>
<div class="job">
            <img src="imgg/grow.jpeg" alt="">
            <h3 class="job-title">Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Grow</span>
</div>
<div class="job">
            <img src="imgg/miniso.jpg" alt="">
            <h3 class="job-title">Receptionist</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Miniso</span>
</div>
<div class="job">
            <img src="imgg/amazon.jpg" alt="">
            <h3 class="job-title">assistant manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">amazon</span>
</div>
<div class="job">
            <img src="imgg/youtube.png" alt="">
            <h3 class="job-title">Content manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Youtube</span>
</div>
<div class="job">
            <img src="imgg/tiktok.png" alt="">
            <h3 class="job-title">Content creater</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">tiktok</span>
</div>
</div>
<button class="more"><a href="job.php">More List</a></button>

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

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  
</body>
</html>
