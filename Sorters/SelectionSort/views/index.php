<?php

$time_start = microtime(true);
ini_set('max_execution_time', 600);

    function selectionSort($array){
        $min = '';
        $max = '';
        $count = '';
       
      for($i=0;$i<count($array);$i++)
        {
            $temp = $array[$i];
            for($j=0;$j<count($array);$j++)
            {   
                
                if($temp<$array[$j])
                {         
                    $temp = $array[$j];    
                    $min = $temp;  
                    $count++;                              
                }
                else
                {                                   
                    $max = $array[$j];
                    $count++;   
                }
                
                $index_of_temp = array_search($temp, $array);
                $array[$index_of_temp] = $array[$i];
                $array[$i] = $temp;
                }
                
        }    
        for($num=0;$num<count($array);$num++)
        {
            echo "<pre>$array[$num]</pre>";
        } 
        echo "if/else counter: $count";   

        // print_r($array);      
    }

    $test_array = array();
    for($x=0;$x<10000;$x++)
    {
        array_push($test_array,rand(1,1000));        
    }
    selectionSort($test_array);

$time_end = microtime(true);
$time = $time_end-$time_start;
echo "<br>Time elapsed: $time second(s)";    

?>