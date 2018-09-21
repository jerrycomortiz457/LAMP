<?php
    session_start();
    require('new-connection.php');

    if(isset($_POST['action']) && $_POST['action'] == 'register')
    {
        register_user($_POST);
    }  

    else if(isset($_POST['action']) && $_POST['action'] == 'login')
    {
        login_user($_POST);
    } 
    else if(isset($_POST['action']) && $_POST['action'] == 'post')
    {
        post_message($_POST);
    }
    else if(isset($_POST['action']) && $_POST['action'] == 'comment')
    {
        post_comment($_POST);
    }
    else 
    {
        session_destroy();
        header('Location: index.php');
        die();
    }

    function register_user($post){
        $_SESSION['errors'] = array();
        //first name errors
        if(empty($post['first_name']))
        {
            $_SESSION['errors'][] = "First name can't be blank!";
        }
        if(isset($post['first_name']) && $post['first_name'] != null)
        {
            if(preg_match('/[^a-zA-Z ]/',$post['first_name']))
            {
                $_SESSION['errors'][] = "The first name you entered is not valid! It must not consist of numerical values or symbols.";
            }
            if(strlen($post['first_name']) < 2)
            {
                $_SESSION['errors'][] = "First must be at least 2 characters long each";
            }
        }
       
        //last name errors
        if(empty($post['last_name']))
        {
            $_SESSION['errors'][] = "Last name can't be blank!";
        }
        if(isset($post['last_name']) && $post['last_name'] != null)
        {
            if(preg_match('/[^a-zA-Z ]/',$post['last_name']))
            {
                $_SESSION['errors'][] = "The last name you entered is not valid! It must not consist of numerical values or symbols.";
            }
            if(strlen($post['last_name']) < 2)
            {
                $_SESSION['errors'][] = "Last names must be at least 2 characters long each";
            }
        }
        //email address errors
        if(empty($post['email_address']))
        {
            $_SESSION['errors'][] = "Email address can't be empty!";
        }
        if(isset($post['email_address']) && $post['email_address'] != null)
        {
            if(!filter_var($post['email_address'], FILTER_VALIDATE_EMAIL))
            {
                $_SESSION['errors'][] = "The email address you entered in not valid!";
            }
        }

        //password errors
        if(empty($post['password']))
        {
            $_SESSION['errors'][] = "Password can't be empty!";
        } 
        if(empty($post['confirm_password']))
        {
            $_SESSION['errors'][] = "Confirm password can't be empty!";
        }
        
        if(isset($post['password']) && $post['password'] != null && isset($post['confirm_password']) && $post['confirm_password'] != null)
        {
            if($post['password'] != $post['confirm_password'])
            {
                $_SESSION['errors'][] = "Passwords did not match!";
            }
            if(strlen($post['password']) < 8 || strlen($post['confirm_password']) < 8)
            {
                $_SESSION['errors'][] = "Password must be at least 8 characters long";
            }
        }

        //error counter
        if(count($_SESSION['errors']) > 0)
        {
            header('Location: index.php');
        }
        else
        {
            $_SESSION['success'] = "Congratulations! You have successfully registered.";
            $_SESSION['registered'] = TRUE;
            $first_name = escape_this_string($post['first_name']);
            $last_name = escape_this_string($post['last_name']);
            $email_address= escape_this_string($post['email_address']);
            $password = escape_this_string($post['password']);
            $salt = bin2hex(openssl_random_pseudo_bytes(22));
            // $encrypted_password = md5($password.''.$salt);
            $encrypted_password = md5($password);
            $query = "INSERT INTO users(first_name, last_name, email_address, password, salt, created_at, updated_at) VALUES('{$first_name}', '{$last_name}', '{$email_address}', '{$encrypted_password}','{$salt}', NOW(), NOW())";
            run_mysql_query($query);
            header('Location: success.php');
            die();
        }       
    }

    function login_user($post){
        $_SESSION['errors'] = array();
        $password = escape_this_string($post['password']);
        $salt = bin2hex(openssl_random_pseudo_bytes(22));
        $encrypted_password = md5($password);
        $query = "SELECT * FROM users WHERE password = '{$encrypted_password}' AND email_address = '{$post['email_address']}'";
        $user = fetch_all($query);
        if(count($user) > 0)
        {
            $_SESSION['user_id'] = $user[0]['id'];
            $_SESSION['first_name'] = $user[0]['first_name'];
            $_SESSION['last_name'] = $user[0]['last_name'];
            $_SESSION['created_at'] = $user[0]['created_at'];
            $_SESSION['updated_at'] = $user[0]['updated_at'];
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['success'] = "Welcome {$_SESSION['first_name']}!";
            header('Location: success.php');
            die();
        }
        else
        {
            $_SESSION['errors'][] = "Can't find credentials!";
            header('Location: index.php');
        }
    }

    function post_message($post){
        $_SESSION['posts'] = array();
        $message = escape_this_string($post['post']);
      
        $_SESSION['posts'][] =  $message;        
        $query = "INSERT INTO messages(user_id, message, created_at, updated_at) VALUES('{$_SESSION['user_id']}','{$message}',NOW(),NOW())";
        run_mysql_query($query);
        header('Location: wall.php');
    }

    function post_comment($post){
        
        $comment = escape_this_string($post['comment']);
        $_SESSION['comments'] = $comment;
        $query = "SELECT messages.id AS id_of_message, comments.user_id AS id_of_user FROM users JOIN messages ON users.id = messages.user_id JOIN comments ON messages.id = comments.message_id";
        $get_data = fetch_all($query);
      
        $message_id = $post['message_id'];
        $query = "INSERT INTO comments(message_id, user_id, comment, created_at, updated_at) VALUES('$message_id','{$_SESSION['user_id']}', '{$comment}', NOW(), NOW())";
        run_mysql_query($query);

        header('Location: wall.php');


    }
?>