<!DOCTYPE html>
    <html>
    <body>
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
             ?>