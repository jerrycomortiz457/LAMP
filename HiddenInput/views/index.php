<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hidden Input</title>
</head>
<body>
    <form action="process.php" method="post">
        <input type="hidden" name="action" value="register">
        <input type="text" name="first_name" id="first_name">
        <input type="text" name="last_name" id="last_name">
        <input type="text" name="email" id="email">
        <input type="password" name="password" id="password">
        <input type="submit" value="Register">
    </form>
    <form action="process.php" method="post">
        <input type="hidden" name="action" value="login">
        <input type="text" name="email" id="email">
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>