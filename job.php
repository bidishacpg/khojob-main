<!DOCTYPE html>
<html Lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>khojob</title>
    <link rel="stylesheet" href="jobb.css">
</head>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <!--jobs available-->
      <li><a  href="index.php">Home</a> </li>
      <li><a  href="about.php">About us</a> </li>
      <li><a  href="contact.php">Contact us</a> </li>
      <li><a  href="loginuser.php">Apply Job</a> </li>
      <li><a  href="logincompany.php">Post Job</a> </li>
        </ul>
    </nav>
</header>
<div class="jobs-list-container">
          <h2>jobs available</h2>
          <div class="search_bar">
        <input type="search" placeholder="Search job here...">
        <select name="" id="">
          <option>category</option>
      <option>Education</option>
          <option>finance</option>
          <option>banking</option>
        </select>
        <select class="type">
          <option>type</option>
          <option>Part Time</option>
          <option>Full time</option>
        </select>
      </div>
<section class="second py-2">
  
<div class="jobs-list-container">
<div class="jobs">
          <div class="job">
            <img src="imgg/fuse.png" alt="">
            <h3 class="job-title">Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications. <br>
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
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
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
</div>
<a href="#" class="details-btn">Apply</a>
<span class="positions">Aesterdio</span>
</div>
<div class="job">
            <img src="imgg/AIT.jpeg" alt="">
            <h3 class="job-title">product manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
</div>
<a href="#" class="details-btn">Apply</a>
<span class="positions">AIT</span>
</div>
<div class="job">
            <img src="imgg/grow.jpeg" alt="">
            <h3 class="job-title">Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
</div>
<a href="#" class="details-btn">Apply</a>
<span class="positions">Grow</span>
</div>
<div class="job">
            <img src="imgg/miniso.jpg" alt="">
            <h3 class="job-title">Receptionist</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
</div>
<a href="#" class="details-btn">Apply</a>
<span class="positions">Miniso</span>
</div>
<div class="job">
            <img src="imgg/amazon.jpg" alt="">
            <h3 class="job-title">assistant manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
</div>
<a href="#" class="details-btn">Apply</a>
<span class="positions">amazon</span>
</div>
<div class="job">
            <img src="imgg/youtube.png" alt="">
            <h3 class="job-title">Content manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
</div>
<a href="#" class="details-btn">Apply</a>
<span class="positions">Youtube</span>
</div>
<div class="job">
            <img src="imgg/tiktok.png" alt="">
            <h3 class="job-title">Content creater</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.<br>
              <a href="more.php" style="color:red; font-size:15px; text-decoration:underline">More Details</a>
</div>
<a href="#" class="details-btn">Apply</a>
<span class="positions">tiktok</span>
</div>
</div>
</div>
</section>
<?php 
include_once 'include/footer.php';
 ?>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  
</body>
</html>