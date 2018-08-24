<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Debugging</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php  
    echo "<h2> Fix all the errors to show the page </h2>";
    $array = array("var_dump", "and", "echo", "helps", "debug");
    for($i = 0; $i < count($array); $i++)    
    {
        echo "The value of the $i index is $array[$i]<br>";
    }
    echo "<h3>isset function determines if a variable is set and is not NULL</h3>";
    $error = "";
    if(isset($error)) 
    {
        echo "Is an empty string NULL? Also, is there of an operator that we can use to return a true value to a variable that is not set yet!!!!!<br>";
    }
      
    if(isset($array))
    {        
        echo "<br><span class='name'>array</span><span class='size'> (size=".count($array).")</span><br>";
        for($j=0;$j < count($array);$j++)
        {
            echo "<span>".$j." => <span class='type'>".gettype($array[$j])."</span></span> <span class='value'>'".$array[$j]."'</span> <span class='length'>(length=".strlen($array[$j]).')</span><br>';            
        }       
    }
    ?>
</body>
</html>