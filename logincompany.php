<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli = mysqli_connect($Host, $Username, $Password, $dbName);

if (isset($_POST['Login'])) {
    $username = $_POST['companyname'];
    $password = $_POST['password'];

   
    if (empty($username) || empty($password)) {
        echo "Please fill in all the fields.";
    } else {
      
        $username = mysqli_real_escape_string($mysqli, $username);
        $password = mysqli_real_escape_string($mysqli, $password);


        $result = mysqli_query($mysqli, "SELECT * FROM regcompany WHERE companyname='$username' AND password='$password'");

        if (mysqli_num_rows($result) > 0) {
            echo "Login successfully";
         
        } else {
            echo "Invalid Username or password";
        }
    }
}
?>

    
<html>
<head>
    <title>Login form</title>
    <link rel="stylesheet" href="logincompanyy.css">
    
    <script>
        function validateForm() {
            var companyname = document.forms["form1"]["companyname"].value;
            var password = document.forms["form1"]["password"].value;

            // Check if any field is empty
            if (companyname === "" || password === "") {
                alert("Please fill in all the fields.");
                return false;
            }

            // Add more specific validation if needed

            return true; // Form is valid, and submission will proceed
        }
    </script>
</head>
<body>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <!--jobs available-->
      <li><a  href="index.php">Home</a> </li>
      <li><a  href="about.php">About us</a> </li>
      <li><a  href="apply.php">Apply Job</a> </li>
      
        </ul>
    </nav>
</header>
    <div class="log">
        <div class="form-box">
            <div class="btn-box">
            <h3>Login here</h3>

            </div>
            <div class="icons">
            <img src="imgg/fb.png">
            <img src="imgg/tw.png">
            <img src="imgg/gp.png">
</div>
<form action="company.php" method="post" name="form1" class="input" onsubmit="return validateForm()">

    <input type="text" class="input-field" name="companyname"placeholder="Enter your companyname" >
    <input type="password" class="input-field" name="password" placeholder="Enter your Password" >
    <input type="checkbox" class="checkbox"><span>Remember Password </span>
    <button type="submit" class="submit-btn" name="Login">Login</button>
    <div class="container reg">
    <p>Haven't Registered Yet? <a href="regcompany.php">Register Here</a></p>
  </div>
</form>

        </div>
        
</div>
</body>
</html>

