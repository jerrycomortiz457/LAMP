<?php

$test_array = array(1,456,7829);

function placeValues($num,$placeholder){

    // for( $i = 0; $i<count($array) ; $i++ )
    // {
        // $num = $array[$i];
        switch ($placeholder)
        {
            case 1:
                $ones = ($num%10);
                // echo $ones;
            break;
            
            case 2:
                $tens = (($num/10)%10);
                // echo $tens;
            break;
            
            case 3:
                $hundreds = (($num/100)%10);  
                // echo $hundreds;
            break;      
           
        }
        
    // }
}     
        // placeValues(123,3);
        $counter_array = array(0,0,0,0,0,0,0,0,0,0);
        // $counter = 1;
        function analyzer($array){
            
            for($i = 0;$i<count($array);$i++)
            {
                $test_num = placeValues($array[$i],1);
                echo strlen((string)$array[$i]);

                $counter_array[$test_num];             
              
            }

        }
        print_r($counter_array);

        analyzer($test_array);

        echo '<br>working!';

?>
