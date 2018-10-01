<?php
   
    class HTML_Helper
    {
        public function __get($property)
        {
            if(property_exists($this,$property))
            {
                return $this->property;
            }
        }
    
        public function __set($property, $value)
        {
            if(property_exists($this,$property))
            {
                $this->$property = $value;
            }
            return $this;
        }

        public function print_table($md_array)
        {            
            echo "<table><thead>";              
            foreach($md_array[0] as $key => $value)
            {
                echo "<th>$key</th>";
            }          
            echo "</thead><tbody>";
            for($md_array_index = 0; $md_array_index < count($md_array); $md_array_index++)
            {
                echo "<tr>";
                foreach($md_array[$md_array_index] as $key=>$value)
                {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
        }

        public function print_select($name, $sample_array)
        {
            echo "<select name='{$name}'>";
                foreach($sample_array as $items)
                {
                    echo "<option value='{$items}'>{$items}</option>";
                }
            echo "</select>";
        }
    
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Helper</title>
    <style>
        *{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* outline: 1px dashed lawngreen; */
        }       
        table thead{
            background-color: #4285F4;
            color: white;
        }
        table tbody tr:nth-child(even){
            background-color: #34A853;
            color: white;
        }
        table tbody tr:nth-child(odd){
            background-color: #EA4335;
            color: white;
        }
    </style>
    
</head>
<body>
    <?php
        $sample_md_array = array(
            array("first_name"=>"Michael", "last_name"=>"Choi", "nick_name"=>"Sensei"), 
            array("first_name"=>"John", "last_name"=>"Supsupin", "nick_name"=>"V88"), 
            array("first_name"=>"Spongebob", "last_name"=>"Squarepants", "nick_name"=>"SB"), 
            array("first_name"=>"Patrick", "last_name"=>"Starfish", "nick_name"=>"PSF"), 
            array("first_name"=>"Sandy", "last_name"=>"Squirrel", "nick_name"=>"SS")
        );            
        $sample_array = array("CA","WA","UT","TX","AZ","NY");
        
        $test_HTML_Helper = new HTML_Helper();
        echo "<h3>Table</h3>";
        $test_HTML_Helper->print_table($sample_md_array);   
        echo "<h3>Select Form</h3>";
        $test_HTML_Helper->print_select("state", $sample_array);
    ?>    
</body>
</html>