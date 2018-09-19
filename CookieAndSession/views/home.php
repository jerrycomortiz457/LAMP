<?php
    session_start();
    

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE){
        // header('Location: home.php');
    } else {
       header('Location: login.php');
    }
    $_SESSION['first_name'] = "Michael"; 
    $_SESSION['last_name'] = "Choi"; 
    $_SESSION['occupation'] = "CEO";      
    
    setcookie('foo','HELLO WORLD',time() + 86400 * 30, '/');
    echo $_COOKIE['foo'];
    
?>
<h1>Home</h1>