<?php
    session_start();
    require('new-connection.php');

    if($_SESSION['success'] == '<p>Congratulations! You have successfully registered.</p>')
    {
        echo $_SESSION['success'];
        echo "<a href='process.php'>Return</a>";
    }
    else
    {
        echo $_SESSION['success'];
        echo "<a href='wall.php'>Go to CodingDojo Wall</a>";
        echo "<a href='process.php'>Log Out</a>";
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Successfull!</title>
    <style>
        *{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
        a{
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    
</body>
</html>