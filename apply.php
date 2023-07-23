<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="applyy.css">
</head>
<body>
<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <!--jobs available-->
      <li><a  href="homeuser.php">Home</a> </li>
      <li><a  href="about.php">About us</a> </li>
      <li><a  href="apply.php">Apply Job</a> </li>
      
        </ul>
    </nav>
</header>
    <div class="container">
        <div class="apply-box">
            <h1>Job Application <span class="title-small">(web)</span></h1>

            <form action="job.php">
                <div class="form-container">
                    <div class="form-control">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" placeholder="Enter First Name">
                    </div>
                    <div class="form-control">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" placeholder="Enter Last Name">
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-control">
                        <label for="job-role">Job Role</label>
                        <select name="job-role" id="job_role">
                            
                            <option value="frontend">Frontend Development</option>
                            <option value="backend">Backend Development</option>
                            <option value="full-stack">Full Stack Web Development</option>
                            <option value="ui-ux">UI & UX Designer</option>
                        </select>
                    </div>
                    <div class="textarea-control">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="50" rows="4" placeholder="Enter Address"></textarea>
                        
                    </div>
                    <div class="form-control">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter City">
                    </div>
                    <div class="form-control">
                        <label for="Company">Company</label>
                        <select name="Company" id="company">
                            
                            <option value="fuse">Fuse pvt</option>
                            <option value="aesterdio">aesterdio</option>
                            <option value="intel-g">intel-g</option>
                            <option value="apple">Apple</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="date">Date</label>
                        <input value="2022-10-24" type="date" id="date" name="date" placeholder="Enter Date">
                    </div>
                    <div class="form-control">
                        <label for="upload">Upload Your CV</label>
                        <input type="file" id="upload" name="upload"/>
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit">Apply Now</button>
                </div>
            </form>
            
        </div>
    </div>
    <?php include_once 'include/footer.php'; ?>
</body>
</html>