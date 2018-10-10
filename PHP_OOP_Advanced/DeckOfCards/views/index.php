<?php
    
    require('process.php');  
    if(empty($_SESSION))
    {
        $_SESSION = null;
    }

    if(empty($_SESSION['dealer_total']) || empty($_SESSION['player_total']))
    {
        $_SESSION['dealer_total'] = 0;
        $_SESSION['player_total'] = 0;
    }

    if(empty($_SESSION['player']))
    {
        $_SESSION['player'] = null;        
    }
    if(empty($_SESSION['dealer']))
    {
        $_SESSION['dealer'] = null;        
    }

    if(empty($_SESSION['switch']))
    {
        $_SESSION['switch'] = false;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deck of Cards</title>
    <link rel="stylesheet" href="../assets/css/style.css">
  
</head>
<body>
    <div id="wrapper">

        <h1>Lucky 9</h1>
        <form action="process.php" method="post">        
            <?php
                if(isset($_SESSION))
                {
                    echo "<input type='submit' value='New Game' name='action' class='newgame_btn'>";                
                    echo "<input type='submit' value='Reset' name='action' class='reset_btn'>";
                }             
                          
                if(isset($_SESSION['lucky_nine_deck']->deck))
                {                
                    if(count($_SESSION['lucky_nine_deck']->deck)>0)
                    {
                        echo "<input type='submit' value='Deal' name='action' class='deal_btn'>";                 
                    }
                }      
            ?>
        </form>      
          
        <form action="process.php" method="post">
            <div id="deck_of_cards">
                <h3>Deck of Cards</h3>
                <?php           
                
                    if(isset($_SESSION['lucky_nine_deck']))
                    {                       
                        echo "<div class='deck'><img src='../assets/images/b1pt.png'><br><img src='../assets/images/b1fh.png'><br><img src='../assets/images/b1pb.png'></div>";
                        
                        // var_dump($_SESSION['lucky_nine_deck']);
                    }                  
                ?>      
            </div>
        </form>
        <div id="game_table">
            <div id="dealer">
                <div id="dealer_hand">
                <h3>Dealer's Hand: <?php if($_SESSION['switch'] == false){echo $_SESSION['dealer_total'];}?></h3>
                    <?php
                        if(isset($_SESSION['dealer']->hand) && $_SESSION['switch'] == true)
                        {
                            for($hand_index = 0; $hand_index < count($_SESSION['dealer']->hand);$hand_index++)
                            {
                                echo "<div class='cards' id='{$hand_index}'><img src='../assets/images/b1fv.png' alt='{$_SESSION['player']->hand[$hand_index]->suit}{$_SESSION['player']->hand[$hand_index]->face}'><input type='hidden' value='{$hand_index}' name='action'><input type='hidden' value='Discard' name='discard'></div>";            
                            }   
                        }
                       if(isset($_SESSION['message']))
                       {
                        if($_SESSION['switch'] == false)
                        {
                            for($hand_index = 0; $hand_index < count($_SESSION['dealer']->hand);$hand_index++)
                            {
                                echo "<div class='cards' id='{$hand_index}'><img src='../assets/images/{$_SESSION['dealer']->hand[$hand_index]->suit}{$_SESSION['dealer']->hand[$hand_index]->face}.png' alt='{$_SESSION['dealer']->hand[$hand_index]->suit}{$_SESSION['player']->hand[$hand_index]->face}'><input type='hidden' value='{$hand_index}' name='action'><input type='hidden' value='Discard' name='discard'></div>";
                            } 
                        }
                       }
                       
                    ?>            
                </div>
            </div>
        
            <div id="player">
                <form action="process.php" method="post">
                    <div id="hand">                        
                    <h3>Player's Hand: <?php echo $_SESSION['player_total'];?></h3>
                        <?php
                            if(isset($_SESSION['player']->hand))
                            {
                                for($hand_index = 0; $hand_index < count($_SESSION['player']->hand);$hand_index++)
                                {
                                    echo "<div class='cards' id='{$hand_index}'><img src='../assets/images/{$_SESSION['player']->hand[$hand_index]->suit}{$_SESSION['player']->hand[$hand_index]->face}.png' alt='{$_SESSION['player']->hand[$hand_index]->suit}{$_SESSION['player']->hand[$hand_index]->face}'><input type='hidden' value='{$hand_index}' name='action'><input type='hidden' value='Discard' name='discard'></div>";
                                }   
                            }
                           
                            if(isset($_SESSION['switch']) && $_SESSION['switch'] == true)
                            {
                                echo "<input type='submit' value='Bet' name='play' class='bet_btn'>";
                            }
                            if(!empty($_SESSION['player']))
                            {
                                if(count($_SESSION['player']->hand) < 4 && $_SESSION['switch'] == true)
                                {
                                    echo "<input type='submit' value='Draw' name='play' class='draw_btn'>";
                                }
                            }                       
                        ?>
                
                    </div>
                </form> 
                <?php 

                    if(isset($_SESSION['message']) && $_SESSION['switch'] == false)
                    {
                        echo "<h3>{$_SESSION['message']}</h3>";
                    }
                ?>
            </div>
        </div>
    

        
    </div>

</body>
</html>
