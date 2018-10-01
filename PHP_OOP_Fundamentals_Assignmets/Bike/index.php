<?php
    class Bike
    {
        public $bike_name;
        public $price;
        public $max_speed;
        public $miles = 0;

       
        
        public function __get($property)
        {
            if(property_exists($this, $property))
            {
                return $this->property;
            }
        }

        public function __set($property, $value)
        {
            if(property_exists($this, $property))
            {
                $this->$property = $value;
            }
            return $this;
        }
        public function __construct($bike_name, $price, $max_speed)
        {               
            $this->bike_name = $bike_name;
            $this->price = $price;
            $this->max_speed = $max_speed;
        }     

        public function displayInfo()
        {
            echo "<br>Price: $$this->price<br>Max speed: $this->max_speed kph<br>Miles: $this->miles miles<br>";
        }

        public function drive()
        {
            echo "<br>$this->bike_name: driving...<br>";
         
            $this->miles += 10;
            return $this;
        }
        public function reverse()
        {
            echo "<br>$this->bike_name: reversing...<br>";
           
                $this->miles -= 5;
        
            if($this->miles < 0)
            {
                $this->miles = 0;
            } 
            return $this;
        }
    }

    $bike1 = new Bike('Bike 1',600, 1000);
    $bike2 = new Bike('Bike 2',700, 1000);
    $bike3 = new Bike('Bike 3',900, 1000);

    echo "<img src='biking1.gif' alt='biking 1' width='55px'>__________________________________";
    $bike1->drive();
    $bike1->drive();
    $bike1->drive();
    $bike1->reverse();
    $bike1->displayInfo();
  
    echo "_________________________________________<br>";
    echo "<img src='biking2.gif' alt='biking 2' width='55px'>______________";
    $bike2->drive();
    $bike2->reverse();
    $bike2->displayInfo();    
    echo "_________________________________________<br>";

    echo "<img src='biking3.gif' alt='biking 3' width='55px'>";
    $bike3->reverse();
    $bike3->displayInfo();
    echo "_________________________________________<br>";

?>