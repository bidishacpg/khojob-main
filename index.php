<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <title>khojob</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="inde.css">
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
        <div class="about">
        <div class="inner-section">
            <h1>About Us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Doloribus velit ducimus, enim inventore earum, eligendi 
                nostrum pariatur necessitatibus eius dicta a voluptates sit 
                deleniti autem error eos totam
                 nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <button>Contact Us</button>
            </div>
        </div>
    </div>
        <section class="main">
      <div class="row">
        <p>There are more than <span>400</span> Jobs</p>
        <a href="#">See all</a>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="image" src="imgg/fuse.png">
          </div>
          <div class="text">
            <h2>Software Engineer</h2>
            <span>Fuse Pvt Ltd - Junior Post</span> <br>
            <span>1 days ago</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$6.7 - $12.5k /yr</h4>
          <button>Apply</button>
        </div>
      </div>
      
      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="image" src="imgg/AIT.jpeg"></i>
          </div>
          <div class="text">
            <h2>JavaScript Developer</h2>
            <span>AiT- Senior Post</span><br>
            <span>2 days ago</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$8.7 - $13.2k /yr</h4>
          <button>Apply</button>
         
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="image" src="imgg/asterdio.png">
          </div>
          <div class="text">
            <h2>Manager</h2>
            <span>asterdio- Manager Post</span><br>
            <span>2 days ago</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$11 - $18.5k /yr</h4>
          <button>Apply</button>

          
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <img class="image" src="imgg/grow.jpeg">
          </div>
          <div class="text">
            <h2>Programmer</h2>
            <span>Grow - Junior Post</span><br>
            <span>3 days ago</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$6 - $11.5k /yr</h4>
          <button>Apply</button>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <image class="image" src="imgg/intel.png"></i>
          </div>
          <div class="text">
            <h2>React.js Expert</h2>
            <span>IntelG - VIP</span><br>
            <span>4 days ago</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$12.5 - $25.5k /yr</h4>
          <button>Apply</button>
          
        </div>
      </div>
    </div>
    </section>
  </div>


        

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  
</body>
</html>
