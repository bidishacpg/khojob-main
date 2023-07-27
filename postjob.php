<?php
// Check if the form was submitted
if (isset($_POST["submit"])) {

    $jobname = $_POST["jobname"];
    $jobdetails = $_POST["jobdetails"];

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

            $result = mysqli_query($connection, "INSERT INTO post(jobname,jobdetails,pic) VALUES('$jobname','$jobdetails''$targetPath')");
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
  <link rel="stylesheet" href="apply.css" >
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <script>
    function validateForm() {
        const jobname = document.getElementById("jobname").value;
        const jobdetails = document.getElementById("jobdetails").value;
        const image = document.getElementById("image").value;

        if (jobname.trim() === "") {
            alert("Please enter the job name.");
            return false;
        }

        if (jobdetails.trim() === "") {
            alert("Please enter job details.");
            return false;
        }

        if (image === "") {
            alert("Please select an image to upload.");
            return false;
        }

        // Add any other validation checks as needed
        
        return true;
    }
</script>
</head>
<body>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <!--jobs available-->
      <li><a  href="company.php">Home</a> </li>
      <li><a  href="about.php">About us</a> </li>
      <li><a  href="apply.php">Apply Job</a> </li>
      
        </ul>
    </nav>
</header>
    <div class="container">
        <div class="apply-box">
            <h1>Post your job <span class="title-small">(post)</span></h1>

            <form action="postjob.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
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