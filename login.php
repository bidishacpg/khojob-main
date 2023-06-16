<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="enter.php">GO TO HOME</a>
	<br/><br/>
	

	<form action="login.php" method="post" name="form1">
		<table width="25%" border="0">
		<tr> 
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$id=$_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("mysqli.php");
				
		// Insert user data into table
		$result =mysqli_query($mysqli, "INSERT INTO users(id,name,email,mobile) VALUES('$id','$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='enter.php'>View Users</a>";
	}
	?>
	<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
       
          <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" name="file">
          <label class="custom-file-label" for="customFileInput">Select file</label>
          <input type="submit" name="submit" value="Upload" class="btn btn-primary">
    </form> -->
</body>
</html>