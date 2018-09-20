<?php
    session_start();
    require_once('new-connection.php');

    $query = "SELECT name, quote, DATE_FORMAT(created_at, '%h:%i %p %M %d, %Y') AS date_added FROM dojo_quotes";
    $quotes = fetch_all($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quoting Dojo - Quotes and Names</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Here are the awesome quotes!</h1>
        </div>
        <div id="quotes_display">
            <div class="quote">
                <ul>              
                <?php
                    foreach($quotes as $quote)
                    {
                        echo "<li><div class='divider'><h3 class='quote_format'>".'"'."{$quote['quote']}".'"'."</h3><br>-{$quote['name']} at {$quote['date_added']}</div></li>";   
                    }
                ?>
                  </ul>
            </div>
        </div>
        <div id="add_another">
            <form action="process.php" method="post">
                <input type="submit" value="Back" name="back">
            </form>
        </div>
    </div>
</body>
</html>