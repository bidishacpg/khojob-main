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
        $result=mysqli_query($mysqli,"SELECT * FROM apply ORDER BY id DESC");
?>
<html>
    <head>
        <title>Users</title>
</head>
<body>
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
          <li><a href="company.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">back</span>
          </a>
          </li>
          </a>
          </li>
          <li><a href="jobcompany.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">All jobs</a></span>
          </a>
          </li>
          <li><a href="applycomp.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">applied Users</span>
          </a>
          </li>
          <li><a href="postjob.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">post job</span>
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
    <a href="apply.php">Apply new job</a></br></br>
    <table width='80%' border=2 border-color='red'>
        <tr>
        <th>firstname</th><th>lastname</th><th>email</th><th>city</th><th>pic</th><th> Operation</th>
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
    echo"<td>".$user_data['firstname']."</td>";
    echo"<td>".$user_data['lastname']."</td>";
    echo"<td>".$user_data['email']."</td>";
    echo"<td>".$user_data['city']."</td>";
    echo"<td> <img id='myImg' src='".$user_data['pic']."'></td>";
    echo "<td><a href='editapply.php?id=$user_data[id]'>Edit</a> | <a href='delapply.php?id=$user_data[id]'>Delete</a></td></tr>"; 
    
}
?>
<style>
  img#myImg{
    width:20%;
  }
</style>

</table>
</body>
</html>