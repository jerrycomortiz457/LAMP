<?php
session_start();
session_id();
echo $_GET['SESSIONID'];
echo '<br>'.session_id();
?>