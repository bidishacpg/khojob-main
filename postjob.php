<?php
// Check if the form was submitted
if (isset($_POST["submit"])) {

    $jobname=$_POST["jobname"];
    $jobdetails=$_POST["jobdetails"];


    // Check if there was no error during the file upload
    if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // Define the target directory to save the uploaded image
        $targetDir = "jobs/";

        // Generate a unique filename for the uploaded image to avoid conflicts
        $uniqueFilename = uniqid() . '_' . $_FILES["image"]["name"];

        // Complete target path with the unique filename
        $targetPath = $targetDir . $uniqueFilename;

        // Move the temporary uploaded file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {            
            $Host='localhost';
            $dbName='crud_db';
            $Username='root';
            $Password='';
            $connection= mysqli_connect($Host,$Username,$Password,$dbName);

            $result = mysqli_query($connection, "INSERT INTO post(jobname,jobdetails,pic) VALUES('$jobname','$jobdetails','$targetPath')");
        echo "job posted successfully";


            echo "Image uploaded successfully. File path: " . $targetPath;
        } else {
            echo "Error uploading the image.";
        }
    } else {
        echo "Error during the image upload process.";
    }
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Dashboard </title>
  <link rel="stylesheet" href="company.css" >
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="imgg/KHO-JOBT.png">
          <h1>Khojob</h1>
        </div>
        <ul>
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          </a>
          </li>
          <li><a href="jobcompany.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">All jobs</a></span>
          </a>
          </li>
          <li><a href="applyusers.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">View Users</span>
          </a>
          </li>
          <li><a href="postjob.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">post job</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Help</span>
          </a>
          </li>
          <li><a href="index.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>Company page</p>
      </div>
      <div class="main-body">
        <h1>Find Recent Posted Jobs</h1>
      
      <div class="search_bar">
        <input type="search" placeholder="Search job here...">
        <select name="" id="">
          <option>category</option>
      <option>Education</option>
          <option>finance</option>
          <option>banking</option>
        </select>
        <select class="type">
          <option>type</option>
          <option>Part Time</option>
          <option>Full time</option>
        </select>
      </div>
    <div class="container">
        <div class="apply-box">
            <h1>Post your job <span class="title-small">(post)</span></h1>

            <form action="postjob.php" method="POST" enctype="multipart/form-data">
                <div class="form-container">
                    <div class="form-control">
                        <label for="jobname">Job Name</label>
                        <input type="text" id="jobname" name="jobname" placeholder="Enter job Name">
                    </div>
                    <div class="form-control">
                        <label for="jobdetails">Jobdetails</label>
                        <input type="text" id="jobdetails" name="jobdetails" placeholder="Enter Jobdetails">
                    </div>
                    <div class="form-control">
                        <label for="image">Upload Your photo</label>
                        <input type="file" name="image" id="image">                  
                </div>
                <div class="button-container">
                    <button type="submit" name="submit"> Post Now</button>
                </div>
            </form>
            
        </div>
    </div>
    
</body>
</html>