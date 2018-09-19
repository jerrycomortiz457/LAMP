<?php
    session_start();    

    if(isset($_POST['action']) && $_POST['action'] == 'register')
    {
        $errors = array();

        if(empty($_POST['email']))
        {
            $errors[] = "Email cannot be blank";
        }
        if(isset($_POST['email']) && $_POST['email'] != null)
        {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                $errors[] = "This email is not valid";
            }
        }
        if(isset($_POST['firstname']) && $_POST['firstname'] != null)
        {
            if(preg_match('/[^a-zA-Z ]/', $_POST['firstname']))
            {
                $errors[] = "This first name is not valid";
            }
        }
        if(isset($_POST['lastname']) && $_POST['lastname'] != null)
        {
            if(preg_match('/[^a-zA-Z ]/', $_POST['lastname']))
            {
                $errors[] = "This last name is not valid";
            }
        }
        if(empty($_POST['firstname']))
        {
            $errors[] = "First name cannot be blank";
        }
        if(empty($_POST['lastname']))
        {
            $errors[] = "Last name cannot be blank";
        }
        if(empty($_POST['password']))
        {
            $errors[] = "Password cannot be blank";
        }
        if(empty($_POST['confirm_password']))
        {
            $errors[] = "Confirm password cannot be blank";
        }
        if(isset($_POST['password']) && $_POST['password'] != null && isset($_POST['confirm_password']) && $_POST['confirm_password'] != null )
        {
                if($_POST['password'] != $_POST['confirm_password'] )
                {
                    $errors[] = "Passwords did not match";
                }
        }
        if(count($errors) > 0)
        {
            $_SESSION['errors'] = $errors;
            header('Location: index.php');
        }
        
        else
        {
            $_SESSION['success'] = "Your information was valid!";
            echo $_SESSION['success'];
        }

    }

    // header('Location: index.php');


?>