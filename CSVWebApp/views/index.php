<?php
    session_start();

   $page_counter = 1;
//    $_SESSION['page'] = '';
    
    if(empty($_FILES))
    {
        
    }
    if ( isset($_POST["submit"]) ) 
    {
        if ( isset($_FILES["file"])) 
        {     
                 //if there was an error uploading the file
            if ($_FILES["file"]["error"] > 0) {
                 echo "Return Code: " . $_FILES["file"]["error"] . "<br />";     
            }
            else 
            {
                      //Print file details
                // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                // echo "Type: " . $_FILES["file"]["type"] . "<br />";
                // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    
                      //if file already exists
                if (file_exists("upload/" . $_FILES["file"]["name"])) 
                {
                    echo $_FILES["file"]["name"] . " already exists. ";
                }
                else 
                {
                    //Store file in directory "upload" with the name of "uploaded_file.txt"
                    $storagename = "uploaded_file.csv";
                    move_uploaded_file($_FILES["file"]["tmp_name"], "C:/wamp/www/learn/CSVWebApp/assets/csv/" . $storagename);
                    // echo realpath($storagename);                  
                    //  echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";                 
                }
            }
        } 
        else 
        {
            echo "No file selected <br />";
        }
    }
   
    ini_set('auto_detect_line_endings',true);      
    $file = fopen("../assets/csv/uploaded_file.csv","r");       
    $table_thead = fgetcsv($file,1000,',','"');        
    foreach($table_thead as $th)
    {  
        $table_header[] = $th;       
    }
  
    // echo count($table_header);
    if(empty($_GET['page']))
    {
        $_GET['page'] = 0;
    }
    else{
        $_SESSION['page'] = $_GET['page'];
    }   

    for($page_index = 0; $page_index < $_SESSION['page']; $page_index++)
    {                                 
        foreach($table_thead as $th)
        {  
            $entry_compile = array();                  
        }                    
        for($index = 0;$index < 50; $index++)
        {  
            $table_body = fgetcsv($file,1000, ',', '"');  
            if(count($table_body) == count($table_thead))
            {
                foreach($table_body as $td)
                {
                    $entry_compile[$index][] = $td;
                    // $page_counter++;     
                }                         
            }         
        }       
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV</title>
    <link rel="stylesheet" href="../assets/css/test_2.css">   
</head>
<body>
<div id="wrapper">
        <div id="header">
            <h1>CSV File Viewer</h1>
        </div>
        <div id="main">
            <div id="upload_area">
            <form action=""<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                <label for="file">Choose a CSV file to view:</label>
                <input type="file" name="file" id="file">
                <input type="submit" value="Preview CSV File" name="submit">
            </form>
            </div>
            <div id="diplay_table">
        <?php
            if(empty($_FILES)){
                
            }            
        ?>
                <table>
                    <thead>
                    <?php 
                        for($i = 0; $i < count($table_header); $i++){
                            echo "<th>{$table_header[$i]}</th>";
                        }
                    ?>
                    </thead>
                    <tbody>
                    <?php                    
                        for($display_index = 0; $display_index < count($entry_compile); $display_index++)
                        {
                            echo "<tr>";
                            for($display_index2 = 0; $display_index2 < count($entry_compile[$display_index]); $display_index2++)
                            {
                                echo "<td>{$entry_compile[$display_index][$display_index2]}</td>";                            
                            }
                            echo "</tr>";
                        }
                    ?>
                    </tbody>

                </table>
            </div>

        <form action="index.php" method="get" enctype="multipart/form-data">
                <div class="pagination">
                <?php          
                    $number_of_pages = ceil(0/(count($table_thead)*50));                  
                    echo "number of pages: $number_of_pages <br>";
                    $_SESSION['backward'] = $_SESSION['page'] - 1;
                    $_SESSION['forward'] = $_SESSION['page'] + 1;
                    if($_SESSION['backward']  > 0)
                    {
                        echo "<a href='http://localhost/learn/CSVWebApp/views/index.php?page={$_SESSION['backward']}'>&laquo;</a>";
                    }
                    for($pages = 1; $pages <= $number_of_pages; $pages++)
                    {
                        echo "<a href='http://localhost/learn/CSVWebApp/views/index.php?page=$pages'>{$pages}</a>";
                    } 
                    if($_SESSION['forward'] <= $number_of_pages)
                    {
                        echo "<a href='http://localhost/learn/CSVWebApp/views/index.php?page={$_SESSION['forward']}'>&raquo;</a>";
                    }                       
                ?>
                </div>
                
        </form> 
    </div>
    
</body>
</html>