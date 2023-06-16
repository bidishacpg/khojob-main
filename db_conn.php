<!DOCTYPE html>
    <html>
    <body>
        <?php
        $Host='localhost';
        $dbName='crud12_db';
        $EmailAddress='root';
        $Password='';
        $mysqli= mysqli_connect($Host,$EmailAddress,$Password,$dbName);

             if($mysqli->connect_error){
                die("Connection failed:" .$mysqli->connect_error);
             }
             echo "Connected succesfully";
             ?>