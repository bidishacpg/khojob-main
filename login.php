html>
<head>
	<title>Add Users</title>

</head>
 <link rel="stylesheet"  href="style.css">
<body>
	<a href="log.php">GO TO HOME</a>
	<br/><br/>
	

	<form action="login.php" method="post" name="form1">
	<div class="form">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="" placeholder="Enter Password Here">
                    <button class="btnn"><a href="#">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="#">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    </div>

                </div>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['btnn'])) {
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		// include database connection file
		include_once("mysqli.php");
				
		// Insert user data into table
		$result =mysqli_query($mysqli, "INSERT INTO users(email,password) VALUES('$email','$password')");
		
		// Show message when user added
		echo "User added successfully. <a href='log.php'>View Users</a>";
	}
	?>
	
</body>
</html>