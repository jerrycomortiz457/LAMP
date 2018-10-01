<?php

    class MyFirstClass
    {
        public $my_property = "My text of my property <br>";
      
        public function __construct()
      {
          echo "I am constructed! <br> ";
      }
    }

    $obj = new MyFirstClass(); 
    echo $obj->my_property;    
    echo $obj->my_property = "Hello World";    
    // var_dump($obj);

    $obj2 = new MyFirstClass();
    echo $obj2->my_property = "2nd obj 'my property '";
   

?>