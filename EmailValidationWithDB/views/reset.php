<?php

    session_start();

    session_destroy();

    require_once('new-connection.php');
    $query = "TRUNCATE TABLE emails";
    run_mysql_query($query);
    header('Location: home.php');


?>