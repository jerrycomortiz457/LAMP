<?php
    session_start();    
    require_once('new-connection.php');
    
        $name = $_POST['name'];
        $quote = $_POST['quote'];
        $_SESSION['name'] = $name;
        $_SESSION['quote'] = $quote;

        if(isset($_POST['add_quote']) && $_POST['add_quote'] == 'Add my quote!')
        {
            $errors = array();

            if(empty($_POST['name']))
            {
                $errors[] = "Name is empty";
            }
            if(empty($_POST['quote']))
            {
                $errors[] = "Quote is empty";
            }
            if(count($errors) > 0)
            {
                $_SESSTION['errors'] = $errors;
                header('Location: index.php');
            }
            else{
                $query = "INSERT INTO dojo_quotes(name, quote, created_at, updated_at) VALUES('{$name}','{$quote}',NOW(),NOW())";
                if(run_mysql_query($query))
                {
                    $_SESSION['log'] = "Entry added!";
                }
                else
                {
                    $_SESSION['log'] = "Failed to add new entry!";
                }
                header('Location: main.php');
            }
        }

        if(isset($_POST['skip_to_main']) && $_POST['skip_to_main'] == 'Skip to quotes!')
        {
            header('Location: main.php');
        }
        if(isset($_POST['back']) && $_POST['back'] == 'Back')
        {
            header('Location: index.php');
        }
       
?>