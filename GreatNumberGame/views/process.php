<?php
    session_start();
    
    $_SESSION['input']  = $_POST['input_number'];
  
    if($_SESSION['input'] < $_SESSION['great_number'])
    {
        $prompt = "<div id='low'> Too low!</div>";
    }
    else if($_SESSION['input'] > $_SESSION['great_number'])
    {
        $prompt = "<div id='high'> Too high!</div>";
    }
    else if($_SESSION['input'] == $_SESSION['great_number'])
    {
        $prompt = "<div id='win'> You Got It right! {$_SESSION['great_number']} is the great number.<form action='index.php' method='post'><input type='submit' value='Play Again!' name='Play Again!'></form> </div>";               
    }

    $_SESSION['prompt'] = $prompt;
    
    header('Location: gameindex.php');
 
?>