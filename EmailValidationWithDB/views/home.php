<?php
    require_once('new-connection.php');
    session_start();

    if(isset($_SESSION['errors']))
    {
        foreach($_SESSION['errors'] as $errors)
        {
            echo "<p>{$errors}</p>";
        }
    }
    // var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Validation with Database</title>
</head>
<body>
    <form action="process.php" method="POST">
        <input type="text" name="emailcheck" id="emailcheck">        
        <input type="hidden" name="action" value="validate">
        <input type="submit" value="Validate" name="validate">
    </form>
    
</body>
</html>   