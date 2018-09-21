<?php

    require_once('new-connection.php');
    $query = "SELECT messages.id AS tag_for_comment, CONCAT_WS(' ',users.first_name,users.last_name) AS full_name, messages.created_at AS posted_date, messages.message AS messages FROM users JOIN messages ON users.id = messages.user_id";
    $display_data = fetch_all($query);
    var_dump($display_data);
    echo "{$display_data[0]['tag_for_comment']}";
    echo "{$display_data[0]['messages']}";

    

   
   
?>

  <div id="comment">
            <h4>Post a comment</h4>
            <form action="process.php" method="post">
                <input type="hidden" name="action" value="comment">
                <input type="hidden" name="message_id" value="">                               
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Write a comment.."></textarea>
                <input type="submit" value="Post a comment">
            </form>
        </div>