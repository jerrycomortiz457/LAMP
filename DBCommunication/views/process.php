<?php
// process.php
// include connection page
require_once('new-connection.php');
// Add validations here to make sure information is correct
// if validations pass, we insert the records into the database
$query = "INSERT INTO interests (music_id, color, file_path, created_at, updated_at)
          VALUES('{$_POST['music_id']}','{$_POST['color']}','{$file_path}', NOW(), NOW())";
if(run_mysql_query($query))
{
    $_SESSION['message'] = "New Interest has been added correctly!";
}
else
{
    $_SESSION['message'] = "Failed to add new Interest"; 
}
header('Location: index.php');