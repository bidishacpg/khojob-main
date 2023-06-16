<?php

$Host= "localhost";
$uname= "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($Host, $uname, $password, $db_name);
if($db_conn->connect_error){
	die("Connection failed:" .$mysqli->connect_error);
 }
 echo "Connected succesfully";
 ?>
