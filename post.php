<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
    
</div class="admin-job-form-container">
<form action="<?php $_SERVER['PHP_SELF']?>" method="Post" enctype="multipart/form-data">
<h3>add new job</h3>
<input type="text" placeholder="enter job name" name="job_name" class="box">
<input type="number" placeholder="enter job" name="job_name" class="box">  
<input type="file" accept="image/png, image/jpeg, image/jpg name=job_image" class="box">
<input type="submit" class="btn" name="add_job" value="add job">  


</body>
</html>
