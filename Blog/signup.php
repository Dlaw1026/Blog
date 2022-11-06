<?php
session_start();
    include("connection.php");
    include("functions.php");

    if ($_SERVER['RESQUEST_METHOD'] == "POST"){
        $uname = $_POST['username'];
        $pword =$_POST['password'];

        if (!empty($uname) && !empty($pword) && !is_numeric($uname)){
            $user_id = random_num(20);
            $query = "insert into login(user_id,username,password) values ('$user_id','$uname','$pword')";

            mysqli_query($con, $query);
            header("location: login.php");
            die;
        }else{
            echo"please enter valid info";
        }
    }


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
            <div>
                <a href="" class="logo">
                    <span class="grey-color">(</span>
                    <span class="logo-name">The Archives</span>
                    <span class="grey-color">/></span>
                </a>
            </div>
            <div class="topnav" id="myTopnav">
                
                <a  class="active">Sign up</a>
                <a href="index.html#login">Login</a>
                <a href="#About">About</a>
                <a href="Contact.html">Contact</a>
                <a href="index.html">Home</a>

                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                </a>
            </div>
            <div>
                
            </div>
        </nav>
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
                    Sign up for
                </h4>
            </div>
        </div>
        <form method="POST" action="login.php">
            <div class="login">
                <input type="text" placeholder="Enter email" class="box" name="email"><br>
                <input type="text" placeholder="Enter firstname" class="box" name="firstname"><br>
                <input type="text" placeholder="Enter lastname" class="box" name="lastname"><br>
                <input type="text" placeholder="Enter username" class="box" name="username"><br>
                <input type="Password" placeholder="Password" class="box" name="password"><br>
                <p class="sign-terms">
                    By signing up, you agree to our Terms , Privacy Policy and Cookies Policy .
                </p><br>
                <a href="Archive.html"><button class="login-btn2" name="signup">Sign up</button></a>

            </div>
        </form>
    </div>


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