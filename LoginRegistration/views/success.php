<?php
    session_start();
    require('new-connection.php');

    echo $_SESSION['success'];

    echo "<a href='process.php'>Log Out</a>";

    
?>