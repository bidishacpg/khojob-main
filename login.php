<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Email Address']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['emailaddress']);
	$pass = validate($_POST['password']);

	if (empty($emailaddress)) {
		header("Location: index1.php?error=Email Address is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index1.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email_address='$emailaddress' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email_address'] === $emailaddress && $row['password'] === $pass) {
            	$_SESSION['email_address'] = $row['email_address'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: log.php");
		        exit();
            }else{
				header("Location: index1.php?error=Incorect Email Address or password");
		        exit();
			}
		}else{
			header("Location: index1.php?error=Incorect Email Address or password");
	        exit();
		}
	}
	
}else{
	header("Location: index1.php");
	exit();
}