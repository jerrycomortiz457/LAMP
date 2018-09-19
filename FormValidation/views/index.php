<?php
    session_start();

    if(isset($_SESSION['errors']))
    {
        foreach($_SESSION['errors'] as $error)
        {
            echo "<p>{$error}</p>";
        }
    }
    // session_destroy();
?>

<form action="process.php" method="post">
    Name: <input type="text" name="name" id="name">
    City: <input type="text" name="city" id="city">
    <input type="hidden" name="action" value="register">
    <input type="submit" value="sign up!">
</form>