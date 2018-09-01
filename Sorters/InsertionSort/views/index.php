<?php

$time_start = microtime(true);
    function insertionSort($array){    
        
        for($i=1;$i<count($array);$i++)
        {  
             $temp = $array[$i];
                                 
            for($j=$i-1;$j>=0 && $temp<$array[$j];$j--)
            {
                $array[$j+1] = $array[$j];                                 
            }     
            $array[$j+1] = $temp;       
        }
                      
        for($x=0;$x<count($array);$x++)
        {
            echo '<pre>'.$array[$x].'</pre>';
        }   
    }

    $test_array = array();
    for($x=0;$x<10000;$x++)
    {
        array_push($test_array,rand(1,10000));        
    }
    
    insertionSort($test_array);
    $time_end = microtime(true);
    $time = $time_end - $time_start;
    echo "time elapsed: $time second(s)";

?>