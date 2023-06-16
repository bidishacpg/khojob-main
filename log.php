<?php
include_once("mysqli.php");
$result=mysqli_query($mysqli,"SELECT * FROM users ORDER BY email DESC");
?>
<html>
    <head>
        <title>Homepage</title>
</head>
<body>
    <a href="login.php">Add New User</a></br></br>
    <table width='80%' border=1>
        <tr>
            <th>Email</th><th>Password</th>
</tr>
<?php
while($user_data=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$user_data['email']."</td>";
    echo"<td>".$user_data['password']."</td>";
    
}
?>
</table>
</body>
</html>