<?php
session_start();
    $sum = $_GET['x'] + $_GET['y'];
    $_SESSION['sum'] = $sum ;
    // echo $sum;
    header('Location: index.php');
    session_destroy();
?>