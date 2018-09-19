<?php
    session_start();
    $_SESSION['name'] = $_POST["name"];
    $_SESSION['quantity'] = $_POST["quantity"];
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['item'] = $_POST["item"];
    header('Location: checkout.php');
    die();
?>