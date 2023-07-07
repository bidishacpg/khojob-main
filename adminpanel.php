<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Dashboard </title>
  <link rel="stylesheet" href="company.css" >
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="imgg/KHO-JOBT.png">
          <h1>Khojob</h1>
        </div>
        <ul>
          <li><a href="">
            <i class="fas  fa-user"></i>
            <span class="nav-item">Home</span>
          </a>
          </li>
          <li><a href="job.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">All jobs</a></span>
          </a>
          </li>
          <li><a href="viewuser.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">View Jobseeker</span>
          </a>
          </li>
          <li><a href="viewcomp.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">View Company</span>
          </a>
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Posted Job
            </span>
          </a>
          <li><a href="viewfeedback.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Feedback
            </span>
          </li>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Setting</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Report a problem</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Help</span>
          </a>
          </li>
          <li><a href="index.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>Admin panel</p>
      </div>
      <div class="main-body">
        <h1>Find Recent Posted Jobs</h1>
      
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
      <div class="row">
        <p>There are more than <span>400</span> Jobs</p>
        <a href="#">See all</a>
      </div>
  <div class="jobs-list-container">
          <h2>5 jobs</h2>
          <div class="jobs">
          <div class="job">
            <img src="imgg/fuse.png" alt="">
            <h3 class="job-title">Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.
</div>
<a href="#" class="details-btn">More Details</a>
<span class="positions">Fuse pvt ltd</span>
</div>
<div class="job">
            <img src="imgg/AIT.jpeg" alt="">
            <h3 class="job-title">product manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.
</div>
<a href="#" class="details-btn">More Details</a>
<span class="positions">AIT</span>
</div>
<div class="job">
            <img src="imgg/asterdio.png" alt="">
            <h3 class="job-title">IT officer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.
</div>
<a href="#" class="details-btn">More Details</a>
<span class="positions">Asterdio</span>
</div>
<div class="job">
            <img src="imgg/grow.jpeg" alt="">
            <h3 class="job-title">Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.
</div>
<a href="#" class="details-btn">More Details</a>
<span class="positions">grow</span>
</div>
<div class="job">
            <img src="imgg/youtube.png" alt="">
            <h3 class="job-title">content manager</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.
</div>
<a href="#" class="details-btn">More Details</a>
<span class="positions">youtube</span>
</div>
<div class="job">
            <img src="imgg/google.webp" alt="">
            <h3 class="job-title">Software Engineer</h3>
            <div class="details">
              Responsible for designing,developing and maintaining system and
              applications.
</div>
<a href="#" class="details-btn">More Details</a>
<span class="positions">Google</span>
</div>
</div>
</div>
</section>
</body>
</html>