<?php
 // include connection
 require_once('new-connection.php');
 function login($email, $password)
 {
     $query = "SELECT * FROM users where email = '$email' AND password = '$password' ";
     $user = fetch_record($query);
     if($user) { 
        echo "YOU ARE LOGGED IN!";
     } else {
         echo "ERROR! Wrong email and password combination!";
     } 
     echo $query;
 }
 ?>