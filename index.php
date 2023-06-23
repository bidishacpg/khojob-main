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
<div class="search-wrapper">
            <div class="search-box">
                <div class="search-card">
                    <input class="search-input" type="text" placeholder="job title or keywords">
                    <button class="search-button"><a href="login.php">Search</a></button>

                </div>
            </div>
        </div>
        <section class="job-list" id="jobs">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="imgg/fuse.png">
                    <div class="job-details">
                        <h4>Fuse</h4>
                        <h3>Mechanical Engineering</h3>
                        <p>Lorem ipsum dolor sit amet </p>
                     </div>
                </div>
                <div class="job-label">
                    <a class="label-a" href="#">HTML</a>
                    <a class="label-b" href="#">Css</a>
                    <a class="label-c" href="#">Javascript</a>
                </div>
                <div class="job-posted">
                    Posted 4 mins ago
                </div>
            </div>
        

        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="imgg/asterdio.png">
                <div class="job-details">
                    <h4>Asterdio</h4>
                    <h3>Software Engineering</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                 </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">Css</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted 3 mins ago
            </div>
        </div>
        
        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="imgg/grow.jpeg">
                <div class="job-details">
                    <h4>Grow</h4>
                    <h3>Graphic Engineering</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                 </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">Css</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted 16 mins ago
            </div>
        </div>

        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="imgg/AIT.jpeg">
                <div class="job-details">
                    <h4>Artificial Info Tech</h4>
                    <h3>digital Marketting</h3>
                    <p>Lorem ipsum dolor sit amet </p>
                 </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">Css</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted 16 mins ago
            </div>
        </div>
        <button class="job-more"><a href="login.php">More List</a></button>
</section>

        

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  
</body>
</html>
