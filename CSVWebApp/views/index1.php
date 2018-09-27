<?php
    session_start();
    $table_header = array();
    $entry_compile = array();     
    
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
            if(empty($_FILES)){
                echo "<p>wala pang csv file</p>";
            }
            else
            {
                require_once('csv.php');   
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

                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get" enctype="multipart/form-data">
                    <input type="text" name="page" id="page">
                    <input type="submit" value="Submit">
                </form> 
       
        
            </div>
        </div>    
       </div> 
    </div> 
</body>
</html>