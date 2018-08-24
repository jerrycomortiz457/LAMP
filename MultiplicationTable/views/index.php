<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
   
    <table> 
        <tr>
        <?php for($multiplier_header=0;$multiplier_header<=9;$multiplier_header++)
            {
                echo '<td>'.$multiplier_header.'</td>';
            }
        ?>  
        </tr>             
        <?php for($multiplicand=1; $multiplicand<=9; $multiplicand++)
            { ?>
            <tr>                
                <td><?= $multiplicand ?></td>
        <?php    for($multiplier=1; $multiplier<=9; $multiplier++)
                { ?>
                <td><?= $multiplicand * $multiplier ?></td>
        <?php    } ?>
            </tr>
        <?php } ?>
    </table>  

</body>
</html>