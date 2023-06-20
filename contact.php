<?php
$Host='localhost';
$dbName='crud_db';
$Username='root';
$Password='';

$mysqli= mysqli_connect($Host,$Username,$Password,$dbName);
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		
		$username = $_POST['username'];
    $email=$_POST['email'];
		$mobile = $_POST['mobile'];
    $feedback = $_POST['feedback'];



		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO contact(username,email,mobile,feedback) VALUES('$username','$email','$mobile','$feedback')");
       
        echo "feedback sent successfully";
	}
    
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="imgg/location1.png" class="icon" alt="" />
              <p>Bharatpur-10,Chitwan,Nepal</p>
            </div>
            <div class="information">
              <img src="imgg/email2.png" class="icon" alt="" />
              <p>info@khojob.com</p>
            </div>
            <div class="information">
              <img src="imgg/phone2.png" class="icon" alt="" />
              <p>9804241324</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <form action="contact.php" method="post" >
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" class="input"  placeholder="username">
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email" >
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="mobile" class="input" placeholder="phonenumber">
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <input type="feedback" name="feedback" class="input" placeholder="type Feedback">
              <span>Feedback</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>