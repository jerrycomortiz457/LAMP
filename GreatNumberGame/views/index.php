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
    <title>Great Number Game</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
 
    <h1>Welcome to the Great Number Game!</h1>
    <h4>I am thinking of a number between 1 and 100</h4>
    <h4>Take a guess!</h4>
       <form action="generate.php" method="post">
        <!-- <input type="text" name="input_number" id="input_number"> -->
        <input type="submit" value="Start Game" id="submit">
    </form> 
      
   
</body>
</html>