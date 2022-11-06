<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>The archives</title>
</head>
<body>
    <div>
        <nav>
            <div class="navsup">
                <a href="index.html" class="logo">
                    <span class="grey-color">(</span>
                    <span class="logo-name">The Archives</span>
                    <span class="grey-color">/></span>
                </a>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="signup.html">Sign up</a>
                <a href="#login">Login</a>
                <a href="Contact.html">Contact</a>
                <a href="About.html">About</a>
                <a href="#Home"  class="active">Home</a>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                </a>
            </div>
            <div>
                
                
            </div>
            

        </nav>
    </div>
    <div class="overlay">
        <img class="arc-img" alt="archivebooks" src="img/library_banner-1024x307.jpg">
    </div>
    <div class="overtext">
        <header>Archives</header>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem veniam aliquid odit delectus, ex eligendi expedita sequi quam quia, enim placeat labore, laboriosam aut at. Quae facere unde sunt quibusdam?</p>
        <a href="#login"><h3>Click me to access full archive </h3></a>
    </div>

   <div id="display">

   </div>
    <div id="login">
        <div class="login-logo">
            <div class="navsup">
                <a href="" class="logo">
                    <span class="grey-color">(</span>
                    <span class="logo-name">The Archives</span>
                    <span class="grey-color">/></span>
                </a>
            </div> 
            <div>
                <h4>
                    Login
                </h4>
            </div>
        </div>
        <form method="POST" action="login.php">
            <div class="login">
                <input type="text" placeholder="Enter username" class="box" name="username" ><br>
                <input type="Password" placeholder="Password" class="box" name="password " ><br>
                <button name="login" type="submit" class="login-btn">Login</button>
                <a href="signup.html"><button class="login-btn2"  >Sign up</button></a>

            </div>
        </form>
    </div>

    <div id="News">
        <div>
            <header id="fullname" class="sec-header">
                News
            </header>
        </div> 
        
        
    </div>

    <script src="app.js"></script>
    
</body>
<footer>
    <div class="footer-content">
        <h3>The archives</h3>
        <p>The archives is a collective news blog and library to promote knowledge and infromation</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
         </ul>
         <div class="footer-bottom">
            <p>copyright &copy;2021 <a href="#">Anyim</a>  </p>
            <div class="footer-menu">
                <ul class="f-menu">
                   <li><a href="#index.html">Home</a></li>
                   <li><a href="">Archives</a></li>
                   <li><a href="">News</a></li>
                </ul>
               </div>
         </div>
         
    </div>
</footer>
</html>