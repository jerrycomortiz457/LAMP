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
    <link rel="stylesheet" href="../assets/css/wall.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>CodingDojo Wall</h1>
            <h2>Welcome <?= $_SESSION['first_name']?>!</h2>
            <a href="process.php">Logout</a>
        </div>
        <div id="post_div">
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
                    $query = "SELECT now() as current, TIMEDIFF(messages.created_at, NOW()) AS elapsed_time, messages.user_id AS user_id_messages, users.id AS user_id_users, messages.id AS tag_for_comment, CONCAT_WS(' ',users.first_name,users.last_name) AS full_name, DATE_FORMAT(messages.created_at, '%M %d, %Y %H:%i %p') AS date_of_post, messages.message AS messages FROM users JOIN messages ON users.id = messages.user_id ORDER BY messages.created_at DESC";
                    $display_data = fetch_all($query);
                    $comment_query = "SELECT messages.user_id AS user_id_from_messages, messages.id AS message_id, comments.id AS comment_id, comments.comment AS comment, comments.user_id AS user_id_from_comments, CONCAT_WS(' ', users.first_name, users.last_name ) AS who_commented, DATE_FORMAT(comments.created_at, '%M %d, %Y %H:%i %p') AS date_of_comment FROM comments JOIN messages ON comments.message_id = messages.id LEFT JOIN users ON comments.user_id = users.id ORDER BY comments.created_at ASC";
                    $display_comment = fetch_all($comment_query);
                    
                    
                    foreach($display_data AS $data)   
                    {   
                        $message_index = $data['tag_for_comment'];
                        $current = $data['current'];
                        $time_differrence = $data['elapsed_time'];
                        // echo "{$time_differrence}<br>";
                        // echo "{$current}";           

                        
                        if($data['user_id_messages'] == $_SESSION['user_id']  && $time_differrence < '-00:30:00') 
                        {      
                            echo "<form action='process.php' method='post'><input type='hidden' name='action' value='delete'><input type='hidden' value='{$data['tag_for_comment']}' name='delete_id'><input type='submit' id='delete_button' value='Delete message'></form>";       
                        }                       
                       
                        echo "<li id='{$data['tag_for_comment']}' class='post_entry'><h4>{$data['full_name']}</h4> <h6>- {$data['date_of_post']}</h6><p>{$data['messages']}</p></li>";
                        echo "<ul>";
                        foreach($display_comment as $all_comment)
                        {
                           if($all_comment['message_id'] == $message_index)
                           {
                                echo "<li id='{$all_comment['comment_id']}' class='comment_entry'><h5>{$all_comment['who_commented']}</h5> <h6>- {$all_comment['date_of_comment']}</h6><p>{$all_comment['comment']}</p></li>";    
                           }
                            // var_dump($all_comment);                    
                        }                       
                        echo "</ul>";
                        echo "<div id='comment_div'>
                        <h4>Post a comment</h4>
                        <form action='process.php' method='post'>
                            <input type='hidden' name='action' value='comment'>
                            <input type='hidden' name='message_id' value='{$data['tag_for_comment']}'>                               
                            <textarea name='comment' id='comment' cols='30' rows='10' placeholder='Write a comment..'></textarea>
                            <input type='submit' value='Post a comment'>
                        </form>
                        </div>";            
                    }                                       
                ?>
                
                    
            </ul>
            
        </div>
    </div>
</body>
</html>