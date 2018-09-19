<?php
    session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja Gold Game - Make Money!</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div id="wrapper">
        <div id="score_board">
            <h2>Your Gold: </h2>
            <h2 id="score"><?= $_SESSION['score'];?></h2>
        </div>

        <div id="buildings">
            <div class="building" id="farm">
                <h3>Farm</h3>
                <p>(earns 10-20 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="bldg" value="farm">
                    <input type="submit" name="farm" value="Find Gold!">
                </form>
            </div>
            <div class="building" id="cave">
                <h3>Cave</h3>
                <p>(earns 5-10 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="bldg" value="cave">
                    <input type="submit" name="cave"  value="Find Gold!">
                </form>
            </div>
            <div class="building" id="house">
                <h3>House</h3>
                <p>(earns 2-5 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="bldg" value="house">
                    <input type="submit" name="house" value="Find Gold!">
                </form>
            </div>
            <div class="building" id="casino">
                <h3>Casino!</h3>
                <p>(earns/takes 0-50 golds)</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="bldg" value="casino">
                    <input type="submit" name="casino" value="Find Gold!">
                </form>
            </div>
        </div>

        <div><h3>Activities:</h3></div>
        <div id="activity_log">
          
            <?php 
                if($_SESSION['bldg'] == 'farm'){
                    // echo $_SESSION['log']; 
                }            
                if($_SESSION['bldg'] == 'cave'){
                    // echo $_SESSION['log'];
                }            
                if($_SESSION['bldg'] == 'house'){
                    // echo $_SESSION['log'];
                }            
                if($_SESSION['bldg'] == 'casino'){
                    // echo $_SESSION['log'];
                }     
                            
                for($i=$_SESSION['counter'];$i>0;$i--)
                {
                    echo $_SESSION["idx{$i}"];
                }
              
            ?>
      
           
        </div>
        <form action="reset.php" method="post">
            <input type="hidden" name="test" value="tester">
            <input type="submit" value="Start Again!">
        </form>
    
    </div>
    
</body>
</html>