<?php

function placeValues($array,$placeholder){

    for( $i = 0; $i<count($array) ; $i++ )
    {
        $num = $array[$i];
        switch ($placeholder)
        {
            case 'ones':
                echo ($num%10).' - ones';
            break;
            
            case 'tens':
                echo (($num/10)%10).' - tens';
            break;
            
            case 'hundreds':
                echo (($num/100)%10).' - hundreds';  
            break;
            
            case 'thousands':
              echo (($num/1000)%10).' - thousands'; 
            break;
            
            case 'ten thousands':
                echo (($num/10000)%10).' - ten thousands'; 
            break;
        }
        echo "<br />";
    }
}

$test_array = array(123,456,789);
placeValues($test_array,'thousands');

?>
