<?php
    session_start();
    $_SESSION['great_number'] = rand(1,100);
    header('Location: gameindex.php');
    
?>