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
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Jobs Board</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fab fa-dochub"></i>
            <span class="nav-item">Documnents</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Setting</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Help</span>
          </a>
          </li>
          <li><a href="#" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>Company page</p>
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

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-google-drive"></i>
          </div>
          <div class="text">
            <h2>UX Designer</h2>
            <span>Google Drive - Junior Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$6.7 - $12.5k /yr</h4>
          <span>1 days ago</span>
        </div>
      </div>
      
      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-google"></i>
          </div>
          <div class="text">
            <h2>JavaScript Developer</h2>
            <span>Google - Senior Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$8.7 - $13.2k /yr</h4>
          <span>2 days ago</span>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-facebook"></i>
          </div>
          <div class="text">
            <h2>Product Developer</h2>
            <span>Facbook - Manager Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$11 - $18.5k /yr</h4>
          <span>2 days ago</span>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-git-alt"></i>
          </div>
          <div class="text">
            <h2>Programmer</h2>
            <span>Github - Juni Post</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$6 - $11.5k /yr</h4>
          <span>3 days ago</span>
        </div>
      </div>

      <div class="job_card">
        <div class="job_details">
          <div class="img">
            <i class="fab fa-youtube"></i>
          </div>
          <div class="text">
            <h2>React.js Expert</h2>
            <span>Youtube - VIP</span>
          </div>
        </div>
        <div class="job_salary">
          <h4>$12.5 - $25.5k /yr</h4>
          <span>4 days ago</span>
        </div>
      </div>
    </div>
    </section>
  </div>

</body>
</html>