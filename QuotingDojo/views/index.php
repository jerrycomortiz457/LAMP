<?php
    session_start();
    require_once('new-connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quoting Dojo</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <div id="wrapper">      
        <div id="header">
            <h1>Welcome to QuotingDojo</h1>
        </div>
        <div id="input_area">
            <form action="process.php" method="post">
                <label for="name">
                    Your name: <input type="text" name="name" id="name">
                 </label>
                <label for="name">
                   Your quote: <textarea name="quote" id="quote" cols="30" rows="10"></textarea>
                </label>
                <input type="hidden" name="action" value="add">
                <input type="submit" name="add_quote" value="Add my quote!" id="add_button">
                <input type="submit" name="skip_to_main" value="Skip to quotes!" id="skip_button">
            </form>
        </div>
    </div>    
</body>
</html>