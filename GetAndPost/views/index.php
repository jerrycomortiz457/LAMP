<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form>input{
                display: block;        
        }
    </style>
</head>
<body>
    <form action="process.php" method="post">
        First Name:<input type="text" name="firstname">
        Last Name:<input type="text" name="lastname">
        Email address:<input type="text" name="email">
        Password:<input type="password" name="password">
        <input type="submit" value="add user!">
    </form>
    
    <form action="search.php" method="get">
        <input type="text" name="search_query">
        <input type="submit" value="Search">
    
    </form>
</body>
</html>
