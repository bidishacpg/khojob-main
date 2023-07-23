<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
				
if($mysqli->connect_error){
    die("Connection failed:" .$mysqli->connect_error);
 }
 echo "Connected succesfully";
        $result=mysqli_query($mysqli,"SELECT * FROM regcompany ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard </title>
  <link rel="stylesheet" href="company.css" >
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
<link rel="stylesheet" href="company.css">
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="imgg/KHO-JOBT.png">
          <h1>Khojob</h1>
        </div>
        <ul>
        <li><a href="adminpanel.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">back</spam>
</a>
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
    <a href="regcompany.php">Register new company</a></br></br>
    <table width='80%' border=2 border-color='red'>
        <tr>
        <th>companyname</th><th>Email</th><th>Password</th><th>confirm_password</th>
        <th>city</th><th>industry</th><th>mobile</th>
</tr>
<style>
    table {
    width: 80%;
    margin: 0;
    background: #FFFFFF;
    border: 1px solid #333333;
    border-color:"black";
    border-collapse: collapse;
}

td, th {
    border-bottom: 1px solid #333333;
    padding: 6px 16px;
    text-align: left;
}

th {
    background: #EEEEEE;
}

caption {
    background: #E0E0E0;
    margin: 0;
    border: 1px solid #333333;
    border-bottom: none;
    padding: 6px 16px;
    font-weight: bold;
}
</style>
<?php
while($user_data=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$user_data['companyname']."</td>";
    echo"<td>".$user_data['email']."</td>";
    echo"<td>".$user_data['password']."</td>";
    echo"<td>".$user_data['confirm_password']."</td>";
    echo"<td>".$user_data['city']."</td>";
    echo"<td>".$user_data['industry']."</td>";
    echo"<td>".$user_data['mobile']."</td>";
    
}
?>
</table>
</body>
</html>