<?php
    class Human
    {
        public $health;        
        public $clan; 
        public $strength = 3; 
        public $intelligence = 3; 
        public $stealth = 3; 
       

        public function __get($property)
        {
          if (property_exists($this, $property))
          {
            return $this->$property;
          }
        }
        public function __set($property, $value) 
        {
          if (property_exists($this, $property)) 
          {
            $this->$property = $value;
          }
          return $this;
        }

        public function trashTalk()
        {
            echo "You want a piece of me?";
        }

        public function __construct($instance)
        {
            echo "{$instance}: I am alive! <br>";
            $this->health = 100;
            // $this->trashTalk();
        }  
        public function attack($human)
        {
            $this->trashTalk();
            $luck = rand(0,100);
            if($luck*$this->intelligence > 1000)
            {
                if($luck>$human->$stealth)
                {
                    $human->health -= $this->strength;
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }        
    }
    $julius = new Human('Julius');  
    $julius->health = 80; 
    // echo $julius->health;   
    // var_dump($julius);

    function check()
    {

    }
    $clarkson = new Human('Clarkson');
    // var_dump($clarkson);

    // $julius->attack($clarkson);
    
    // var_dump($julius);
    // var_dump($clarkson);
    
?>