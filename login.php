<html>
<head>
	<title>Add Users</title>

</head>
 <link rel="stylesheet"  href="style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<body>
	<a href="log.php">GO TO HOME</a>
	<br/><br/>
	<div class="container">
		<div class="form-box">
		   <h2>Login Now</h2>
		   <div class="input-field">
			  <label for="">Email</label>
			  <input type="text" id="email" placeholder="email">
			  <i class="fa " aria-hidden="true"></i>
			  <span></span>
		   </div>
		   <div class="input-field">
			  <label for="">Password</label>
			  <input type="text" id="password" placeholder="password">
			  <i class="fa " aria-hidden="true"></i>
			  <span></span>
		   </div>
		   <input type="submit" id="submit" value="Login">
		</div>
	 </div>
</body>
</html>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['SUBMIT'])) {
		
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