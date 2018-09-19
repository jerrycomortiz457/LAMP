<?php
    session_start();
    
    if($_POST['bldg'] == 'farm')
    {
        $gold = rand(10,20);
        $counter += 1;           
    }
    if($_POST['bldg'] == 'cave')
    {
        $gold = rand(5,10);     
        $counter += 1;  
    }
    if($_POST['bldg'] == 'house')
    {
        $gold = rand(2,5);
        $counter += 1;     
    }
   
    $_SESSION['gold'] = $gold;
    $_SESSION['score'] = $_SESSION['score'] + $gold; 
    $_SESSION['bldg'] = $_POST['bldg'];
    $_SESSION['timestamp'] = date("F jS Y h:i:s a");    
    $log_message =  "<p>You entered a {$_SESSION['bldg']} and earned {$_SESSION['gold']} golds. ({$_SESSION['timestamp']})</p>";
    $_SESSION['log'] = $log_message; 
    
    if($_POST['bldg'] == 'casino')
    {    
        $counter += 1;      
        $play = rand(0,2);
        
        if($play < 2)
        {
            $gold = rand(0,50); 
            $_SESSION['gold'] = $gold;
            $_SESSION['score'] = $_SESSION['score'] + $gold;   
            $log_message =  "<p>You entered a {$_SESSION['bldg']} and earned {$_SESSION['gold']} golds. ({$_SESSION['timestamp']})</p>";
            $_SESSION['log'] = $log_message; 
        }
        else if($play == 2)
        {
            $gold = rand(0,50);
            $_SESSION['gold'] = $gold;
            $_SESSION['score'] = $_SESSION['score'] - $gold;            
            $log_message = "<p id='lost'>You entered a {$_SESSION['bldg']} and lost {$_SESSION['gold']} golds... Ouch.. ({$_SESSION['timestamp']})</p>"; 
            $_SESSION['log'] = $log_message;
        }    
    }
    
    $_SESSION['counter'] = $_SESSION['counter'] + $counter;
    $_SESSION['idx'] = "idx{$_SESSION['counter']}";
    $_SESSION[$_SESSION['idx']] = $log_message;

    header('Location: gameindex.php');
?>