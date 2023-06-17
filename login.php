<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="log">
        <div class="form-box">
            <div class="btn-box">
                <div id="btn"> </div>
                <button type="button" class="toggle-btn" onclick="login()">LogIn</button>
                <button tupe="button" class="toggle-btn" onclick="register()"> Register</button>

            </div>
            <div class="icons">
            <img src="imgg/fb.png">
            <img src="imgg/tw.png">
            <img src="imgg/gp.png">
</div>
<form  id="login" class="input">
    <input type="text" class="input-field" placeholder="Enter your User Id" required>
    <input type="text" class="input-field" placeholder="Enter your Password" required>
    <input type="checkbox" class="checkbox"><span>Remember Password </span>
    <button type="submit" class="submit-btn">Login</button>
</form>
<form id="Register" class="input">
    <input type="text" class="input-field" placeholder="Enter your User Id" required>
    <input type="email" class="input-field" placeholder="Enter your Email" required>
    <input type="text" class="input-field" placeholder="Enter your Password" required>
    <input type="checkbox" class="checkbox"><span>I agree to the terms and conditions </span>
    <button type="submit" class="submit-btn">Register</button>
</form>

        </div>
        
</div>
<script>
    var x =document.getElementById("login");
    var y =document.getElementById("Register");
    var z =document.getElementById("btn");
    function register(){
        x.style.left="-350px";
        y.style.left="50px";
        z.style.left="110px";
    }
    function login(){
        x.style.left="50px";
        y.style.left="350px";
        z.style.left="0px";
    }

    </script>
    </body>
    </html>