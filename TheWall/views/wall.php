<?php
    session_start();  
    // session_destroy(); 

    require_once('new-connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodingDojo Wall</title>
    <style>
        li{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>CodingDojo Wall</h1>
            <h2>Welcome <?= $_SESSION['first_name']?>!</h2>
            <a href="process.php">Logout</a>
        </div>
        <div id="post">
            <h3>Post a message</h3>
            <form action="process.php" method="post">
                <input type="hidden" name="action" value="post">
                <textarea name="post" id="post" cols="30" rows="10" placeholder="Write your message.."></textarea>
                <input type="submit" value="Post a message">
            </form>
        </div>
        <div id="display_message">
            <ul>
                <?php
                    $query = "SELECT  messages.id AS tag_for_comment, CONCAT_WS(' ',users.first_name,users.last_name) AS full_name, messages.created_at AS posted_date, messages.message AS messages FROM users JOIN messages ON users.id = messages.user_id ORDER BY messages.created_at DESC";
                    $display_data = fetch_all($query);
                    foreach($display_data AS $data)   
                    {
                        echo "<li id='{$data['tag_for_comment']}'>{$data['full_name']} - {$data['posted_date']}<br>{$data['messages']}</li>";                            
                        echo "<ul>";
                        echo "<li></li>";             
                        echo "</ul>";
                        echo "<div id='comment'>
                        <h4>Post a comment</h4>
                        <form action='process.php' method='post'>
                            <input type='hidden' name='action' value='comment'>
                            <input type='hidden' name='message_id' value='{$data['tag_for_comment']}'>                               
                            <textarea name='comment' id='comment' cols='30' rows='10' placeholder='Write a comment..'></textarea>
                            <input type='submit' value='Post a comment'>
                        </form>
                    </div>";
                        echo "___________________________________";              
                    }                                       
                ?>
                
                    
            </ul>
            
        </div>
    </div>
</body>
</html>