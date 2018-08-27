<?php

$time_start = microtime(true);

    function selectionSort($array){
        $min = '';
        $max = '';
       
      for($i=0;$i<count($array);$i++)
        {
            $temp = $array[$i];
            for($j=0;$j<count($array);$j++)
            {    
                if($temp<$array[$j])
                {         
                    $temp = $array[$j];    
                    $min = $temp;                                
                }

                if($max>$array[$j])
                {                    
                    $max = $array[$j];
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

        // print_r($array);      
    }

    $test_array = array();
    for($x=0;$x<1000;$x++)
    {
        array_push($test_array,rand(1,1000));        
    }
    selectionSort($test_array);

$time_end = microtime(true);
$time = $time_end-$time_start;
echo "Time elapsed: $time second(s)";    

?>