<?php
    session_start();
    // session_destroy();

    require('new-connection.php');

    if(empty($_SESSION['errors']))
    {
        $_SESSION['errors'] = array();
    }
    else
    {
        foreach($_SESSION['errors'] as $error)
        {
            echo "<p class='errors'>$error</p>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="../assets/css/test.css">
</head>
<body>
    <div id="wrapper">  
        <h2>Registration</h2>
        <form action="process.php" method="post">
            <input type="hidden" name="action" value='register'>
            <label for="first_name">First name: <input type="text" name="first_name" id="first_name"></label>
            <label for="last_name">Last name: <input type="text" name="last_name" id="last_name"></label>
            <label for="email_address">Email address: <input type="text" name="email_address" id="email_address"></label>
            <label for="password">Password: <input type="password" name="password" id="password"></label>
            <label for="confirm_password">Confirm Password: <input type="password" name="confirm_password" id="confirm_password"></label>
            <input type="submit" value="Register">
        </form>
        <h2>Login</h2>
        <form action="process.php" method="post">
            <input type="hidden" name="action" value='login'>
            <label for="email_address">Email address: <input type="text" name="email_address" id="email_address"></label>
            <label for="password">Password: <input type="password" name="password" id="password"></label>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>