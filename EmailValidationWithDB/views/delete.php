<?php
    session_start();
    require_once('new-connection.php');

    $email_id = $_POST['delete_email'];
    $query = "DELETE FROM emails WHERE id = '{$email_id}'";
    run_mysql_query($query);
    

    header('Location: success.php');

?>