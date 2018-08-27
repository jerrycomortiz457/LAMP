<?php

    function bubbleSort($array){        
        for($i=0,$j=1;$i<count($array);$i++,$j++)
        {
            $temp = $array[$i];
            if ($array[$i]>$array[$j])
            {
                
            }
        }   
 
    }
    // $test_array = array(8,5,2,6,9,2,3,1,0,4,7);
    $test_array = array(6,5,3,1,2,4);
    bubbleSort($test_array);

?>