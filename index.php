<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <title>khojob</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="indexx.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
</head>
<body>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="loginuser.php">Jobseeker</a>
          <a class="dropdown-item" href="logincompany.php">Company</a>
         </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="regseeker.php">Jobseeker</a>
          <a class="dropdown-item" href="regcompany.php">Company</a>
         </div>
		 <li><a  href="adminlogin.php">Adminlogin</a> </li>
      <!--jobs available-->
      <li><a  href="job.php">Job</a> </li>
      <!--more-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="about.php">About Us</a>
          <a class="dropdown-item" href="contact.php">Contact Us</a>
         </div>
        </ul>
    </nav>
</header>
<section class="main py-5">
  <div class="container py-5">
    <div class="row">
      <div class="search">
        <h1>Find your Most Exciting <br>
         Dream Jobs</h1>
         <input type="text" name="" id="find" placeholder="Job title or keyword" onclick="search()">
         <button class="btn"><a href="job.php"> Search</a></button>
</div>
</div>
</div>
</div>
<div class="second py-2">
<div class="jobs-list-container">
<div class="jobs">
          <div class="job">
            <img src="imgg/fuse.png" alt="">
            <h3>Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="loginuser.php" class="details-btn">Apply</a>
<span class="positions">Fuse pvt ltd</span>
</div>
<div class="job">
            <img src="imgg/asterdio.png" alt="">
            <h3>It officer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Aesterdio</span>
</div>
<div class="job">
            <img src="imgg/AIT.jpeg" alt="">
            <h3>product manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">AIT</span>
</div>
<div class="job">
            <img src="imgg/grow.jpeg" alt="">
            <h3>Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Grow</span>
</div>
<div class="job">
            <img src="imgg/miniso.jpg" alt="">
            <h3>Receptionist</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Miniso</span>
</div>
<div class="job">
            <img src="imgg/amazon.jpg" alt="">
            <h3>assistant manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">amazon</span>
</div>
<div class="job">
            <img src="imgg/youtube.png" alt="">
            <h3>Content manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
</div>
<a href="apply.php" class="details-btn">Apply</a>
<span class="positions">Youtube</span>
</div>
<div class="job">
            <img src="imgg/tiktok.png" alt="">
            <h3>Content creater</h3>
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

<script>
      function search(){
            let filter=document.getElementById('find').value.toUpperCase();
            let job=document.querySelectorAll('.job');
            let i =document.getElementByTagName('h3');

            for(var i=0;i<=1.length;i++){
              let a=item[i].getElementByTagName('h3')[0];

              let value= a.innerHTML || a.innerText || a.textContent;

              if(value.toUpperCase().indexof(filter) > -1){
                item[i].style.display="";
              }
              else{
                item[i].style.display="none";
              }
            }
      }
      </script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  
</body>
</html>
