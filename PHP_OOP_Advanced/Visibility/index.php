<?php
   class MyBaseClass
   {
       public function __construct($instance)
       {
           echo "I am called for object: " . $instance;
       }
   
       // Note: in the previous example, this was marked 'protected'
       private $base_property = 0;
       private $check_property = 0;
   
       // Note: in the previous example, this was marked 'public'
       protected function set_the_property($prop_value)
       {
           $this->base_property = $prop_value;          //  I can always see/set my own attributes
           $this->check_property = $prop_value;          //  I can always see/set my own attributes
       }
   }
   
   class MyChildClass extends MyBaseClass
   {
       public function directly_set_property($prop_value)
       {
           // 'private' makes MyBaseClass::base_property unavailable, even to child classes.
           $this->base_property = $prop_value;         // This causes an error -- cannot access prop_value 
       }
       public function child_sets_property($prop_value)
       {
           // 'protected' makes MyBaseClass::set_the_property() visible to child classes like this one.
           $this->set_the_property($prop_value);      // This will work well. 
       }
   }

    $child = new MyChildClass('child');
    $base = new MyBaseClass('base');
    $child->base_property = 68;
    $child->check_property = 99;
 
    //  $base->base_property = 86;     

    var_dump($child);



  


     ?>
