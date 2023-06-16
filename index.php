<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="index.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Khojob</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--dropdown-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login/Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a>
        </div>
      </li>
      <!--jobs available-->
      <li class="nav-item active">
        <a class="nav-link" href="job.php">Job <span class="sr-only">(current)</span></a>
      </li>
      <!--more-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="contact.php">Contact Us</a>
          <a class="dropdown-item" href="About.php">About Us</a>
          <a class="dropdown-item" href="Career.php">Career Tips</a>


        </div>
      </li>
        
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search
 </button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgg/khoj.webp" alt="khojob" width="1100" height="500">
      <div class="carousel-caption">
        <h3>KhoJob</h3>
        <p>Find Your Dream Job</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="imgg/join.webp" alt="khojob1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>KhoJob</h3>
        <p>Amazing starting of your career</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="imgg/join3.jpg" alt="khojob2" width="1100" height="500">
      <div class="carousel-caption">
        <h3>KhoJob</h3>
        <p>Gateway to Jobs</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <section class="our-details">
    <div>
      <h2 class="text-centre">Jobs In Nepal-KhoJob</h2>
      <h3 class="text-centre1"> Providing 500+ Vacancies</h2>
      <p>Khojob is a online job portal website that showers you with amazing jobs of your choice.
        khojob aims to provide you the job of your dreams and gateway to achieve them.Using khojob,
      it is guarentee to be satisfied and grab different opportunities.</p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
