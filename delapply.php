<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
$id=$_GET['id'];

$result= mysqli_query($mysqli,"DELETE FROM apply WHERE id=$id");

header("Location:viewapply.php");
?>