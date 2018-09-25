<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV Web App With Pagination</title>
    <link rel="stylesheet" href="../assets/css/test_style.css">   
    <style>
        *{
            /* outline: 1px dashed lawngreen; */
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>CSV File Viewer</h1>
        </div>
        <div id="main">
            <div id="upload_area">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                <label for="file">Choose a CSV file to view:</label>
                <input type="file" name="file" id="file">
                <input type="submit" value="Preview CSV File" name="submit">
            </form>
            </div>
        <div id="diplay_table">
        <?php
            include('csv.php');
        ?>
        </div>  
        <div id="pagination_area">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>    
       </div> 
    </div> 
</body>
</html>