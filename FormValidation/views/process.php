<?php
    session_start();
    
    if(isset($_POST['action']) && $_POST['action'] == 'register')
    {
        $errors = array();

        if(empty($_POST['name']))
        {
            $errors[] = "Name cannot be blank";
        }
        if(empty($_POST['city']))
        {
            $errors[] = "City cannot be blank";
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