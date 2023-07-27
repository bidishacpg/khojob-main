<?php


$Host = 'localhost';
$dbName = 'crud_db';
$Username = 'root';
$Password = '';

$mysqli = mysqli_connect($Host, $Username, $Password, $dbName);

if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic form validation (checking if fields are not empty)
    if (empty($username) || empty($password)) {
        echo "Please fill in both username and password fields.";
        exit();
    }

    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($mysqli, $username);
    $password = mysqli_real_escape_string($mysqli, $password);

    // Insert user data into table
    $result = mysqli_query($mysqli, "SELECT * FROM reg WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($result) == 1) {
        // Start the session
        session_start();

        // Set session variables to store user information
        $_SESSION['username'] = $username;

        // Redirect to the homeuser.php page after successful login
        header('Location: homeuser.php');
        exit();
    } else {
        echo "Invalid Username or password";
        exit();
    }
}
?>

  
<html>

<head>
    <title>Login form</title>
    <link rel="stylesheet" href="loginuse.css">
    <script>
        function validateForm() {
            var username = document.forms["form1"]["username"].value;
            var password = document.forms["form1"]["password"].value;

            // Check if any field is empty
            if (username === "" ||  password === "" ) {
                alert("All fields are required");
                return false;
            }

            // Check if checkbox is checked

            // Add more specific validation if needed (e.g., email format)

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
      <li><a  href="index.php">Home</a> </li>
      <!--jobs available-->
      <li><a  href="job.php">Job</a> </li>
      <!--more-->
         <li> <a href="about.php">About Us</a></li>
         <li> <a  href="contact.php">Contact Us</a></li>
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
        <form action="loginuser.php" method="post" name="form1" class="input" onsubmit="return validateForm();">
            <input type="text" class="input-field" name="username" placeholder="Enter your Username">
            <input type="password" class="input-field" name="password" placeholder="Enter your Password">
            <input type="checkbox" class="checkbox"><span>Remember Password</span>
            <button type="submit" class="submit-btn" name="Login">Login</button>
            <div class="container reg">
               <p>Haven't Registered Yet?? <a href="regseek.php">Register Here</a></p>

    </div>
            </form>
        </div>
    </div>

</body>

</html>
        
</div>
</body>
</html>

