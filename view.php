<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
				
if($mysqli->connect_error){
    die("Connection failed:" .$mysqli->connect_error);
 }
 echo "Connected succesfully";
        $result=mysqli_query($mysqli,"SELECT * FROM login ORDER BY id DESC");
?>
<html>
    <head>
        <title>Users</title>
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
<link rel="stylesheet" href="view.css">
    <a href="loginuser.php">Add New User</a></br></br>
    <table width='80%' border=1>
        <tr>
            <th>Username</th><th>Password</th>
</tr>
<?php
while($user_data=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$user_data['username']."</td>";
    echo"<td>".$user_data['password']."</td>";
    
}
?>
</table>
</body>
</html>