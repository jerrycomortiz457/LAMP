<?php
    class MyFirstCLass
    {
        public $property = "I am the first property! Woohoo!";
    
        public function __construct($instance)
        {
            echo "I getting called for object:  {$instance} <br>";
        }

        public function set_property($property)
        {
            $this->property = $property;
        }

        public function get_property()
        {
            return $this->property;
        }
    }

    $obj1 = new MyFirstCLass('instance one');
    $obj2 = new MyFirstCLass('instance two');
    echo $obj1->get_property();
    echo $obj2->get_property();

?>