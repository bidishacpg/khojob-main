<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
	
	if(isset($_POST['Login'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$username' AND password='$password'");
       
        if(mysqli_num_rows($result) == 1) {
             echo " Login successfully";
        } else{
            echo "Invalid Username or password";
            exit();
        }


	}
	?>
    <html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="loginuse.css">
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
<form  action="loginuser.php" method="post" name="form1"class="input">
    <input type="text" class="input-field" name="username"placeholder="Enter your Username" >
    <input type="password" class="input-field" name="password" placeholder="Enter your Password" >
    <input type="checkbox" class="checkbox"><span>Remember Password </span>
    <button type="submit" class="submit-btn" name="Login">Login</button>
    <div class="container reg">

    <script>
    
    const registeredUsers = [
      { username: "user1", password: "password1" },
      { username: "user2", password: "password2" }
    ];

    function login() {
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;

      
      const user = registeredUsers.find(u => u.username === username && u.password === password);

      if (user) {
       
        document.getElementById("loginStatus").innerText = "Login successful!";
      } else {
 
        document.getElementById("loginStatus").innerText = "Invalid username or password.";
      }
    }
  </script>
    <p>Haven't Registered Yet?? <a href="regseek.php">Register Here</a></p>

  </div>
</form>

        
</div>
</body>
</html>

