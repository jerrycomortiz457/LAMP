<?php

$time_start = microtime(true);
    function bubbleSort($array){        
        for($i=0;$i<count($array)+1;$i++)
        {            
            for($j=0;$j<count($array)-1;$j++){
                if ($array[$j]>$array[$j+1])
                {
                    $temp = $array[$j];                 
                    $array[$j]=$array[$j+1];                  
                    $array[$j+1]=$temp;
                }
            }
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
    
    bubbleSort($test_array);
    $time_end = microtime(true);
    $time = $time_end - $time_start;
    echo "time elapsed: $time second(s)";

?>