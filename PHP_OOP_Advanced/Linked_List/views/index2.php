<?php
    session_start();  
    // session_destroy();
     
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deck of Cards</title>
    <link rel="stylesheet" href="../assets/css/test.css">
    <style>
       *{
            margin: 0;
            padding: 0;
            /* outline: 1px dashed lawngreen; */
        }

    </style>
</head>
<body>
    <div id="wrapper">
        <form action="process.php" method="post">
            <input type="hidden" name="action" value="new game">
            <input type="submit" value="New Game (Lucky 9)">
        </form>
        
        <form action="process.php" method="post">
        <div id="deck_of_cards">
            <h3>Deck of Cards:</h3>
            <?php
           
             
            ?>
                  
        </div>
        </form>
        <div id="game_table">
            <div id="dealer">
                <div id="dealer_hand">
                <h3>Dealer's Hand:</h3>
                    <?php
                
                    ?>            
                </div>
            </div>
        
            <div id="player">
                <form action="index.php" method="post">
                    <div id="hand">                        
                    <h3>Player's Hand:</h3>
                        <?php
                        
                        ?>
                    </div>
                </form> 
            </div>
        </div>
    

        
    </div>

</body>
</html>
