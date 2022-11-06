<?php
    $email = $_POST['email'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost','root','','blog');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into reg login(email,firstname,lastname,username,password) values(?, ?, ?, ?, ?)");
        $stmt->mysqli_query($email, $fname, $lname, $uname, $pword);
        $stmt->execute();
        echo "registered successfully...";
        $stmt->close();
        $conn->close();
    }
?>