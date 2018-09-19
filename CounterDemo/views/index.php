<?php
    session_start();
    
    if(!isset($_SESSION['counter']))
    {
        $_SESSION['counter'] = 1;      
    }   
    else
    {
        $_SESSION['counter'] = $_SESSION['counter']+1;
    }
    // session_destroy();
    var_dump($_SESSION);
    $_SESSION['foo'] = 'bar';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counter Demo</title>
    <link rel="stylesheet" href="../assets/css/test.css">
</head>
<body>
    <h1>You came to this website</h1>
    <h2><?= $_SESSION['counter']?> times</h2>
</body>
</html>