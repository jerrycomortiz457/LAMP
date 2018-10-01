<?php
    class MyFirstClass
    {
        public $my_property = '0';
        
        public function __construct()
        {
            echo "Alive!";
        }
        
        public function __destruct()
        {
            echo $this->my_property;
            echo "Dead! <br>";
        }

        public function get_my_property()
        {
            return $this->print_hello().' '.$this->my_property;            
        }
        public function set_my_property($value)
        {
            $this->my_property = $value;
        }
        public function print_hello()
        {
            return 'Hello';
        }


    }
    

    $obj = new MyFirstClass();
    echo $obj->get_my_property() . '<br>';
    $obj->set_my_property('1'); 
    echo $obj->get_my_property() . '<br>';  

    $obj1 = new MyFirstClass();
    echo $obj1->get_my_property() . '<br>';
    $obj1->set_my_property('2');
    echo $obj1->get_my_property() . '<br>';
 
?>