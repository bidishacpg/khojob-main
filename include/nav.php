<header>
    <div class="logo">
      <img src="imgg/KHO-JOBT.png" class="khojob">
</div>
    <nav>
      <ul>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="loginuser.php">Jobseeker</a>
          <a class="dropdown-item" href="logincompany.php">Company</a>
         </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="regseeker.php">Jobseeker</a>
          <a class="dropdown-item" href="regcompany.php">Company</a>
         </div>
      <!--jobs available-->
      <li><a  href="job.php">Job</a> </li>
      <!--more-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="about.php">About Us</a>
          <a class="dropdown-item" href="contact.php">Contact Us</a>
         </div>
        </ul>
    </nav>
</header>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: Georgia,'Times New Roman',Times,serif;
    box-sizing:border-box;
}
body{
    height: 90vh;
    background-position: center;
    background-size: cover;
    background-color: rgb(253, 250, 250);
}
header{
    width:100%;
    height:10vh;
    display: flex;
    justify-content: space-between;
    align-items:center;
    padding:20px 10%;
    background:transparent;
    margin-bottom: 20px;
}
.logo{
    font-size: 20px;
    font-weight:bold;
    color:rgb(169, 207, 241);
    letter-spacing: 1.5px;
    cursor:pointer;
    height: auto;
}
.khojob{
    position: absolute;
    height: auto;
    left: 0px;
    width: 130px;
    bottom:550px;
}
nav li{
    display: inline-block;
    list-style: none;
    padding: 0px 20px;
}
a,button{
    font-size: 22px;
    font-weight: 500;
    color: rgb(0, 0, 0);
    text-decoration: none;
    cursor:pointer;
}
button{
    background: rgba(255, 251, 251, 0.2);
    border:2px solid yellow;
    border-radius: 50px;
    padding: 9px 25px;
}
nav li a:hover{
    color:yellow;
    transition: all 0.3s ease 0s;
}
button:hover{
    background-color: yellow;
    transition: all 0.3sec ease;
}
</style>