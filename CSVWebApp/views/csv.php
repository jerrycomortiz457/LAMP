<?php
   
    if(empty($_FILES['file']))
    {
        // var_dump($_FILES);
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
                    $use_this_file=move_uploaded_file($_FILES['file']['name'], "upload/" . $storagename);
                    // echo "Stored in:" . "upload/" . $_FILES['file']['name'] . "<br />"; 
                }
            }
        }
    }
    $_SESSION['file'] = $_FILES['file'];
   
    // $table_header = array();      
    ini_set('auto_detect_line_endings',true);      
    $file = fopen($use_this_file,"r");              
    $table_thead = fgetcsv($file,1000,',','"');    
    foreach($table_thead as $th)
    {  
        $table_header[] = $th;
    }
    if(empty($_GET['page']))
    {
        $_SESSION['page'] = 1;
    }
    else
    {
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
                    }             
                }         
            }  
                        
    }    
        // var_dump($entry_compile);
        // header('Location: index1.php');
?>