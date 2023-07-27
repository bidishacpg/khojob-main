<?php
// Check if the form was submitted
if (isset($_POST["submit"])) {

    $jobname = $_POST["jobname"];
    $jobdetails = $_POST["jobdetails"];

    // Check if the required fields are not empty
    if (empty($jobname) || empty($jobdetails)) {
        echo "Please fill in all the required fields.";
        exit();
    }

    // Check if there was no error during the file upload
    if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // Rest of your existing code for uploading the image and inserting data into the database...
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