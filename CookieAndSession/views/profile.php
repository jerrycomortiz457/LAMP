<?php

    session_start();
    if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE){
        header('Location: login.php');
    }
    else
    {
        if($_SESSION['id'] == 1)    
        {
            echo "Oliver";
        }
        if($_SESSION['id'] == 2)
        {
            echo "Michael";
        }
    }

    echo $_SESSION['first_name'];
    echo $_SESSION['last_name'];
    $_SESSION['account_type'] = "Administrator";
    echo ' '.$_SESSION['account_type'];
    unset($_SESSION['first_name']);
    $_SESSION = array();
    session_destroy();

?>

<h1>Profile</h1>