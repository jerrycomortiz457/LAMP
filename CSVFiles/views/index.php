<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV Files</title>
</head>
<body>
    <?php
            $file = fopen("../assets/docs/us-500.csv","r");             
            $list = fgetcsv($file);         
            $report_number = 1;
            for($i=0;$i<count($list);$i++)
            {   
                if(preg_match('/"/', $list[$i]))
                {
                    echo '<h1>Report '.$report_number++.'</h1><ul>';
                    echo '<li>First Name: '.trim(strstr($list[$i], '"'),'/"/').'</li><li>Last Name: '.$list[$i+1].'<li>Company Name: '.$list[$i+2].'</li><li> Address: '.$list[$i+3].', '.$list[$i+4].', '.$list[$i+5].', '.$list[$i+6].', '.$list[$i+7].'</li><li>Phone Number 1: '.$list[$i+8].'</li><li>Phone Number 2: '.$list[$i+9].'</li><li>Email: '.$list[$i+10].'</li>';
                   
                    if (stripos($list[$i+11],'"')>1)
                    echo '<li>Web: '.strstr($list[$i+11],'"', true).'</li>';
                    else 
                    echo '<li>Web: '.$list[$i+11].'</li>';                 
                }
                echo '</ul>';
            }  
    ?>
</body>
</html>