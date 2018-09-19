<?php
session_start();    

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $password = $_POST['password'];


    if(isset($_POST['action']) && $_POST['action'] == "register")
    {
     echo "{$_SESSION['password']}, Thank You for registering!";  
    }
    if(isset($_POST['action']) && $_POST['action'] == "login")
    {
        echo "Welcome {$_SESSION['email']}, you are now logged in! Enjoy!";
        echo $password;
    }
?>