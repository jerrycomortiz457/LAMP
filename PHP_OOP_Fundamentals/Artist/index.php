<?php

    Class Human {
        public $health;
        public $clan;
        public $strength = 3;
        public $intelligence = 3;
        public $stealth = 3;
        public function __construct()
        {
            echo "I am alive!";
            $this->health = 100;
        }
    public function __get($propertry)
    {
        // if(property_exists($this,$property))
        // {
            return $this->property;
        // }
    }
    public function __set($propertry,$value)
    // {
    //     if(property_exists($this,$property))
    //     {
            $this->$property= $value;
        // }
        return $this;
    }
    public function trashTalk()
    {
        echo "You wan a piece of me?";
    }
    public function attack($hunan)
    {
        $this->trashTalk();
        $luck = rand(0,100);
        if($luck*$this->intelligence =1000)
        {
            if($luck > $hunan->stealth)
            {
                $human->health -= $this->strength;
                return true;
            }
            else
            {
                return false;
            }
    
        }  else{return false;}
    }

}
$test =  new Human;
var_dump($test);

   
?>