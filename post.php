<?php

if(isset($_POST['upload'])){
    $target = "images/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "root", "", "crud_db");
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
    mysqli_query($db, $sdl);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg = "Images uploaded successfully";
    }else{
        $msg = "There was a problem uploading image";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Image uploded</title>
    <link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>
    <div id ="content">
        <form method="post" action="post.php" entype="multipart/form.data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <div>
                <textarea name="text" cols="40" rows="4" placeholder="Say somethings about this image."></textarea>
            </div>
            <div>
                <input type="submit" name="upload" value="Uplode Image">

    
</body>
</html>