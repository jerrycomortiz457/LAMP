<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <h1>Survey</h1>
    <form action="result.php" method="post">
       <div>
            <label for="name">Your Name: </label>
            <input type="text" name="full_name">
       </div> 
       <div>
            <label for="location">Dojo Location: </label>
            <select name="location">
                <option value="Mountain View">Mountain View</option>  
                <option value="Seattle, WA">Seattle, WA</option>            
            </select>
       </div> 
       <div>
            <label for="language">Favorite Language: </label>
            <select name="language">
                <option value="PHP">PHP</option>  
                <option value="Javascript">Javascript</option>            
            </select>
       </div>
        <div>
            <label for="comment">Comment (optional):</label>
            <textarea name="comment" cols="30" rows="10"></textarea>
        </div>
       
        <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>