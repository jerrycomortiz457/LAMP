<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
    <form action="process.php" method="post">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
    
    <?php
        if(isset($_SESSION['errors']))
        {
            foreach($_SESSION['errors'] as $error) 
            {
                echo $error;
            }  
        }

    ?>
</body>
</html>