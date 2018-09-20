<?php
    
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_DATABASE', 'login_registration');
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);

    if($connection->connect_errno)
    {
        die("Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error);
    }

    function fetch($query)
    {
        global $connection;

        $result = mysqli_query($connection,$query);
        $rows = array();

        foreach($result as $row)
        {
            $rows[] = $row;
        }
        return $rows;
    }
    
    function run_mysql_query($query)
    {
        global $connection;

        $result = mysqli_query($connection, $query);

        if(preg_match("/insert/i", $query))
        {
            return mysqli_insert_id($connection);
        }
        return $result;
    }
  
    function fetch_all($query)
    {
    $data = array();
    global $connection;
    $result = $connection->query($query);
    while($row = mysqli_fetch_assoc($result)) 
    {
        $data[] = $row;
    }
    return $data;
    }
    //SELECT - used when expecting a single result
    //returns an associative array
   
    function fetch_record($query)
    {
    global $connection;
    $result = $connection->query($query);
    return mysqli_fetch_assoc($result);
    }

    //returns an escaped string. EG, the string "That's crazy!" will be returned as "That\'s crazy!"
    //also helps secure your database against SQL injection
    function escape_this_string($string)
    {
    global $connection;
    return $connection->real_escape_string($string);
    }
?>