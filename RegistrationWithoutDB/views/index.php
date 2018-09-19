<?php
    session_start();

    if(isset($_SESSION['errors']))
    {
        foreach($_SESSION['errors'] as $errors)
        {
            echo "<p>{$errors}</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form Without DB</title>
</head>
<body>
    <div id="wrapper">
        <form action="registration_process.php" method="post">
            <label for="email"><b>Email:</b></label>
            <input type="text" name="email" id="email">

            <label for="firstname"><b>First Name:</b></label>
            <input type="text" name="firstname" id="firstname">

            <label for="lastname"><b>Last Name:</b></label>
            <input type="text" name="lastname" id="lastname">

            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" id="password">

            <label for="confirm_password"><b>Confirm Password:</b></label>
            <input type="password" name="confirm_password" id="confirm_password">

            <label for="birthdate"><b>Birthdate:</b></label>
            <input type="date" name="birthdate" id="birthdate">
            
            <input type="hidden" name="action" value="register">
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>