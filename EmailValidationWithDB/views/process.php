<?php
    session_start();    
    require_once('new-connection.php');
  
    $emailcheck = $_POST['emailcheck'];
    $_SESSION['emailcheck'] = $emailcheck;

    if(isset($_POST['action']) && $_POST['action'] == 'validate')
    {
        $errors = array();

        if(empty($_POST['emailcheck']))
        {
            $errors[] = "Email cannot be blank";
        }
        if(isset($_POST['emailcheck']) && $_POST['emailcheck'] != null)
        {
            if(!filter_var($_POST['emailcheck'], FILTER_VALIDATE_EMAIL))
            {
                $errors[] = "This email is not valid";
            }
        }
        if(count($errors) > 0)
        {
            $_SESSION['errors'] = $errors;
            header('Location: home.php');
        }
        else
        {
            $_SESSION['success'] = "Your email was valid";
            echo $_SESSION['success'];                  
            $query = "INSERT INTO emails(email_address, created_at, updated_at) VALUES('{$emailcheck}', NOW(), NOW())";
            if(run_mysql_query($query))
            {
                $_SESSION['message'] = "Email added!";
            }
            else
            {
                $_SESSION['message'] = "Failed to add new Interest"; 
            }
            
            header('Location: success.php');
        }

    }


    // header('Location: home.php');

?>