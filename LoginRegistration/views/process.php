<?php
    session_start();
    require('new-connection.php');

    if(isset($_POST['action']) && $_POST['action'] == 'register')
    {
        register_user($_POST);
    }  

    if(isset($_POST['action']) && $_POST['action'] == 'login')
    {
        login_user($_POST);
    }  

    function register_user($post){
        $_SESSION['errors'] = array();
        //first name errors
        if(empty($_POST['first_name']))
        {
            $_SESSION['errors'][] = "First name can't be blank!";
        }
        if(isset($_POST['first_name']) && $_POST['first_name'] != null)
        {
            if(preg_match('/[^a-zA-Z ]/',$_POST['first_name']))
            {
                $_SESSION['errors'][] = "The first name you entered is not valid! It must not consist of numerical values or symbols.";
            }
        }
        //last name errors
        if(empty($_POST['last_name']))
        {
            $_SESSION['errors'][] = "Last name can't be blank!";
        }
        if(isset($_POST['last_name']) && $_POST['last_name'] != null)
        {
            if(preg_match('/[^a-zA-Z ]/',$_POST['last_name']))
            {
                $_SESSION['errors'][] = "The last name you entered is not valid! It must not consist of numerical values or symbols.";
            }
        }
        //email address errors
        if(empty($_POST['email_address']))
        {
            $_SESSION['errors'][] = "Email address can't be empty!";
        }
        if(isset($_POST['email_address']) && $_POST['email_address'] != null)
        {
            if(!filter_var($_POST['email_address'], FILTER_VALIDATE_EMAIL))
            {
                $_SESSION['errors'][] = "The email address you entered in not valid!";
            }
        }

        //password errors
        if(empty($_POST['password']))
        {
            $_SESSION['errors'][] = "Password can't be empty!";
        } 
        if(empty($_POST['confirm_password']))
        {
            $_SESSION['errors'][] = "Confirm password can't be empty!";
        } 
        if(isset($_POST['password']) && $_POST['password'] != null && isset($_POST['confirm_password']) && $_POST['confirm_password'] != null)
        {
            if($_POST['password'] != $_POST['confirm_password'])
            {
                $_SESSION['errors'][] = "Passwords did not match!";
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
            $first_name = escape_this_string($_POST['first_name']);
            $last_name = escape_this_string($_POST['last_name']);
            $email_address= escape_this_string($_POST['email_address']);
            $password = escape_this_string($_POST['password']);
            $salt = bin2hex(openssl_random_pseudo_bytes(22));
            $encrypted_password = md5($password. '' .$salt);
            $query = "INSERT INTO users(first_name, last_name, email_address, password, salt, created_at, updated_at) VALUES('{$first_name}', '{$last_name}', '{$email_address}', '{$password}','{$salt}', NOW(), NOW())";
            run_mysql_query($query);
            header('Location: success.php');
        }       
    }

    function login_user($post){
        $query = "SELECT * FROM users WHERE password = '{$post['password']}' AND email_address = '{$post['email_address']}'";
        $user = fetch_all($query);
        if(count($user) > 0)
        {
            var_dump($user);
        }
        else
        {
            echo "Can't find credentials!";
        }
    }
?>