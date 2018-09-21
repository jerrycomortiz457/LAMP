<?php
    session_start();
    require('new-connection.php');

    if($_SESSION['success'] == 'Congratulations! You have successfully registered.')
    {
        echo $_SESSION['success'];
    }
    else
    {
        echo $_SESSION['success'];
        echo "<a href='wall.php'>Go to CodingDojo Wall</a>";
        echo "<a href='process.php'>Log Out</a>";
    }
    
    

    
?>