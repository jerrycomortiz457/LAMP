<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Headers</title>
</head>
<body>
    <form action="process.php" method="get">
        <input type="text" name="x" id="x">
        <input type="text" name="y" id="y">       
        <input type="submit" value="Add">    
    </form>
    <?php
        if (empty($_SESSION))
        {
            echo 'empty';
        }
        else
        {
            echo $_SESSION['sum'];
            
        }
        
    ?>

</body>
</html>