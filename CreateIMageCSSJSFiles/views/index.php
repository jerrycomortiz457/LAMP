<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Image/CSS/JS File</title>
    <link rel="stylesheet" href="../assets/css/main.css.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="../assets/js/main.js.php"></script> -->

</head>
<body>  
    <!-- <h1>Demo</h1>
    <p>Text here</p>
    <img src="../assets/images/sample.png"> --> 
    <?php           
        for($i=1;$i<=5;$i++){           
            echo "<img src='../assets/images/image{$i}.php'><br><br>";
        }
    ?>   
</body>
</html>