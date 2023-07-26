<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
$id=$_GET['id'];

$result= mysqli_query($mysqli,"DELETE FROM reg WHERE id=$id");

header("Location:viewuser.php");
?>