<?php

    function selectionSort($array){        
        for($i=0;$i<count($array);$i++)
        {
            $temp = $array[$i];
            for($j=0;$j<count($array);$j++)
            {
               if($temp<$array[$j])
                {         
                    $temp = $array[$j];                                    
                }   
                $index_of_temp = array_search($temp, $array);
                $array[$index_of_temp] = $array[$i];
                $array[$i] = $temp;
            }                      
        }        
        print_r($array);      
    }
    $test_array = array(8,5,2,6,9,2,3,1,0,4,7);
    selectionSort($test_array);

?>