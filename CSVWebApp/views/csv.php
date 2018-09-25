<?php

    if(empty($_FILES['file']))
    {
        var_dump($_FILES);
    }
    if(isset($_POST['Preview CSV File']))
    {
        if(isset($_FILES['file']))
        {
            if($_FILES['file']['error'] > 0)
            {
                echo "Return Code: " . $_FILES['file']['error']."<br />";
            }
            else
            {
                //print $_FILES
                // var_dump($_FILES);
                // echo "This is the realpath:" . realpath($_SERVER["DOCUMENT_ROOT"]) . "\<br />";  
                //file exists    
                if(file_exists("upload/" . $_FILES['file']['name']))
                {
                    echo $_FILES['file']['name'] . "already exists.";
                }
                else
                {
                    //store
                    $storagename = "uploaded_file.txt";
                    move_uploaded_file($_FILES['file']['name'], "upload/" . $storagename);
                    // echo "Stored in:" . "upload/" . $_FILES['file']['name'] . "<br />"; 
                }
            }
        }
    }
    
    ini_set('auto_detect_line_endings',true);      
    $file = fopen($_FILES['file']['tmp_name'],"r");              
    $table_thead = fgetcsv($file,1000,',','"');  
    
    echo "<table><thead>";
    foreach($table_thead as $th)
    {   
        echo "<th>$th</th>";
    }
    echo "</thead><tbody>";         
    for($index = 0;$index < 50; $index++)
    {  
        $table_body = fgetcsv($file,1000, ',', '"');  
        // var_dump($table_body);
        if(count($table_body) == count($table_thead))
        {
            echo "<tr>";
            foreach($table_body as $td)
            {
                echo "<td>$td</td>";
            }
            echo "</tr>";  
        }         
    }   
    echo "</tbody></table>";
      
  
?>