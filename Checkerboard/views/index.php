<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkerboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <div class="wrapper">   
        <div class="checkboard">                
            <?php for($i=1; $i<=8; $i++)
                { ?>
                <div class="row">            
            <?php    for($j=1; $j<=8; $j++)
                    { ?> 
            <?php 
                $num1 = $i+$j;
                if($num1%2==0){
                    echo "<div class='red'></div>";
                }            
                else{
                    echo "<div class='black'></div>";
                }   
            ?>                     
            <?php    } ?>
            </div>
            <?php } ?>
            </div>  
        <div class="checkboard2">                
            <?php for($i=1; $i<=8; $i++)
                { ?>
                <div class="row">            
            <?php    for($j=1; $j<=8; $j++)
                    { ?> 
            <?php 
                $num1 = $i+$j;
                if($num1%2==0){
                    echo "<div class='greenish'></div>";
                }            
                else{
                    echo "<div class='green'></div>";
                }   
            ?>                     
            <?php    } ?>
            </div>
            <?php } ?>
            </div>
        </div>  
</body>
</html>