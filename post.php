 <?php
 @include 'config.php';
 if(isset($_POST['add_job'])){

    $job_name = $_POST['job_name'];
    $job_detail = $_POST['job_detail'];
    $job_image_tmp_name= $_FILES['product_image']['tmp_name'];
    $job_image_folder= 'uploaded_img/'.$product_image;

    if(empty($job_name)|| empty($job_detail) || empty($job_image)){
      $message[] = 'please fill out all details';
    }else{
        $insert = "INSERT INTO jobs(name,details,image) VALUES('$job_name','$job_detail','$job_image)";
        $upload = mysqli_query($conn,$insert);
        if($upload){
            move_uploaded_file($job_image_temp_name,$product_image_folder);
            $message[]='new job added successfully';
        }else{
            $message[]='could not the job';
        }
        }
    }
 }
 ?>


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

<?php
if(isset($message)){
    foreach($message as $message){
        echo'<span class="message">'.$message.'</span>';
    }
}



<div class="container">
    
</div class="admin-job-form-container">
<form action="<?php $_SERVER['PHP_SELF']?>" method="Post" enctype="multipart/form-data">
<h3>add new job</h3>
<input type="text" placeholder="enter job name" name="job_name" class="box">
<input type="number" placeholder="enter job" name="job_name" class="box">  
<input type="file" accept="image/png, image/jpeg, image/jpg name=job_image" class="box">
<input type="submit" class="btn" name="add_job" value="add job">  
</form>

    </div>
</div>


</body>
</html>
