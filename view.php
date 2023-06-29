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