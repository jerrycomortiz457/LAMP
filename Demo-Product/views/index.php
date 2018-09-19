<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo - Product</title>
    <link rel="stylesheet" href="../assets/css/test.css">
</head>
<body>
    <h1>Product Demo</h1>
    <form action="process.php" method="post">
        <div>Your Name: <input type="text" name="name" id="name"></div> 
        <div>Email: <input type="text" name="email" id="email"></div> 
        <div> Purchasing: <select name="item" id="item">
            <option value="-no item selected-">Select item</option>
            <option value="Coding Dojo Katana">Coding Dojo Katana</option>
            <option value="Coding Dojo Shoes">Coding Dojo Shoes</option>
            <option value="Coding Dojo Shuriken">Coding Dojo Shuriken</option>
        </select></div> 
        <div> Quantity: <input type="text" name="quantity" id="quantity"></div> 
        <input type="submit" value="Purchase">
    </form>
</body>
</html>